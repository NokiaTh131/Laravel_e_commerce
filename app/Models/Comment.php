<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['product_id', 'order_no', 'content', 'date'];
    protected $casts = [
        'date' => 'datetime'
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_no');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
