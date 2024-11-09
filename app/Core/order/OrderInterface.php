<?php
namespace App\Core\order;
interface OrderInterface {
    public function getAllCarts($userId);
    public function storeOrder($OrderData);
    
}