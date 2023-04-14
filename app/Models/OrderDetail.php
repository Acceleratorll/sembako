<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use HasFactory, SoftDeletes;

    public function order_product()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function order_return()
    {
        return $this->belongsTo(OrderReturn::class);
    }
}
