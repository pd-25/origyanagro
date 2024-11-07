<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ["product_id", "product_variant_id", "user_id", "quantity"];

    public function user()
    {
        $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function product()
    {
        $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function productVariant()
    {
        $this->belongsTo(ProductVariant::class, 'product_variant_id', 'id');
    }

}
