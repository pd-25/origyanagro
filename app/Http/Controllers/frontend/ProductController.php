<?php

namespace App\Http\Controllers\frontend;

use App\Core\products\ProductInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $productInterface;

    public function __construct(ProductInterface $productInterface)
    {
            $this->productInterface = $productInterface;
    }

    public function singleProduct($slug)
    {

        return view('frontend.singleproduct', [
            'singleProduct' => $this->productInterface->fetchsingleProduct($slug)
        ]);
    }
}
