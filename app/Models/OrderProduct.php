<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderProduct extends Model
{
    use HasFactory, SoftDeletes;

    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function order_detail()
    {
        return $this->belongsTo(OrderDetail::class);
    }
}
