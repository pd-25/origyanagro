<?php

namespace App\Core\order;

use App\Models\Cart;

class OrderRepo implements OrderInterface
{
    public function getAllCarts($userId = null)
    {
        if ($userId) {
            return Cart::with("product", "user", "productVariant")->where('user_id', $userId)->get();
        }
        return Cart::with("product", "user")->get();
    }
}
