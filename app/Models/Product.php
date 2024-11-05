<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = ["slug","name","description","price","category_id","type","status","quantity_in_stock"];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = static::generateUniqueSlug($product->name);
        });
    }
    protected static function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;

        while (Product::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . time();
        }

        return $slug;
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class, "product_id", "id");
    }


    public function productPrimaryImage()
    {
        return $this->hasOne(ProductImage::class, "product_id", "id")->where("is_primary", 1);
    }
}
