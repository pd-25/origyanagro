<?php
namespace App\Core\products;

interface ProductInterface {
    public function fetchAllProducts($orderBy);
    public function storeProduct($productData, $variations, $productImages);
    
}