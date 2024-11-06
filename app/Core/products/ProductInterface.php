<?php
namespace App\Core\products;

interface ProductInterface {
    public function fetchAllProducts($orderBy);
    public function fetchsingleProduct($slug);
    public function storeProduct($productData, $variations, $productImages);
    
}