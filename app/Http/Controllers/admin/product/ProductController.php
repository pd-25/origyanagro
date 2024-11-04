<?php

namespace App\Http\Controllers\admin\product;

use App\Core\category\CategoryInterface;
use App\Core\products\ProductInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public $productInterface, $categoryInterface;
    public function __construct(ProductInterface $productInterface, CategoryInterface $categoryInterface)
    {
        $this->productInterface = $productInterface;
        $this->categoryInterface = $categoryInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.index', [
            "products" => $this->productInterface->fetchAllProducts("DESC")
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create', [
            'categories' => $this->categoryInterface->fetchAllCategories("DESC")
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'category_id' => 'required|exists:categories,id',
                'type' => 'required|string',
                'description' => 'required|string',
                'variant_name.*' => 'required|string',
                'measurement.*' => 'required|numeric',
                'measurement_param.*' => 'required|string',
                'price.*' => 'required|numeric',
                'quantity.*' => 'required|integer',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $variations = [];
            foreach ($request->variant_name as $index => $variantName) {
                $variations[] = [
                    'variant_name' => $variantName,
                    'measurement' => $request->measurement[$index],
                    'measurement_param' => $request->measurement_param[$index],
                    'price' => $request->price[$index],
                    'quantity' => $request->quantity[$index],
                ];
            }

            $productData = $request->only("name", "category_id", "type", "description");
            $productData["quantity_in_stock"] = array_sum(array_column($variations, 'quantity'));

            $productImages = $request->only("images");

            $storeProduct = $this->productInterface->storeProduct($productData, $variations, $productImages);
            // dd($storeProduct);
            if ($storeProduct) {
                return redirect()->route('product-mamages.index')->with('success', 'Product created successfully!');
            } else {
                return back()->with('success', 'Some error occur!');
            }
        } catch (\Throwable $th) {
            Log::debug('ErrorFile-', [$th->getFile()]);
            Log::debug('ErrorMsg-', [$th->getMessage()]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
