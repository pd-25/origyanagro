<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function __construct(){
        
    }
    public function cart()
    {
        return view('frontend.cart');
    }

    public function addToCart(Request $request)
    {
        $validatedData = $request->validate([
            'productId' => 'required|integer',
            'variantId' => 'required|integer',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric'
        ]);

        $productVariant = ProductVariant::find($validatedData['variantId']);
        if (!$productVariant) {
            return response()->json([
                'status' => 'error',
                'msg' => 'Product variant not found.'
            ], 404);
        }

        // Prepare the cart item
        $cartItem = [
            'product_id' => $validatedData['productId'],
            'product_variant_id' => $validatedData['variantId'],
            'quantity' => $validatedData['quantity'],
            'user_id' => auth()->id()
        ];

        Cart::create($cartItem);

        // Return success response
        return response()->json([
            'status' => 'success',
            'msg' => 'Item added to cart successfully!'
        ]);
    }
}
