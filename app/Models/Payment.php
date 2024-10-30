<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = ['method', 'user_id', 'amount'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
