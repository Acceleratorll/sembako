<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'store_id',
        'customer_id',
        'payment_id',
        'shipping_id',
        'ppn',
        'discount',
        'total',
    ];

    public function order_product()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function order_return()
    {
        return $this->hasMany(OrderReturn::class);
    }
}
