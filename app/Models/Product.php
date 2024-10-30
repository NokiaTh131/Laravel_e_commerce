<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'category_id', 'price', 'description', 'stock', 'photo'];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_contain')->withPivot('amount');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function product_categories()
    {
        return $this->belongsTo(Product_Category::class, 'category_id');
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'in_cart','cart_id', 'product_id')->withPivot('quantity');
    }

}
