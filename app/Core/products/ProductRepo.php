<?php

namespace App\Core\products;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductRepo implements ProductInterface
{
    public $productModel;
    public function __construct()
    {
        $this->productModel = Product::query();
    }
    public function fetchAllProducts($orderBy)
    {
        return $this->productModel->orderBy("id", $orderBy)->get();
    }

    public function storeProduct($productData, $variations, $productImages)
    {
        try {
            return DB::transaction(function () use ($productData, $variations, $productImages) {


                $createProduct = $this->productModel->create($productData);

                if ($createProduct instanceof Product) {
                    foreach ($variations as &$variation) {
                        $variation['product_id'] = $createProduct->id;
                    }
                    DB::table("product_variants")->insert($variations);
                    foreach ($productImages['images'] as $index => $pImage) {
                        $db_image = time() . rand(0000, 9999) . '.' . $pImage->getClientOriginalExtension();
                        $pImage->storeAs("ProductImages", $db_image, 'public');

                        ProductImage::create([
                            "product_id" => $createProduct->id,
                            "image_path" => "ProductImages/" . $db_image,
                            "is_primary" => $index === 0 ? 1 : 0  // Set first image as primary
                        ]);
                    }
                    return true;
                }
                return false;
            });
        } catch (\Throwable $th) {
            $this->getLogs($th);
            return false;
        }
    }

    public function getLogs($th)
    {
        Log::debug('ErrorFile-', [$th->getFile()]);
        Log::debug('ErrorMsg-', [$th->getMessage()]);
    }
}
