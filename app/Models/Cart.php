<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ["product_id", "product_variant_id", "user_id", "quantity"];
}
