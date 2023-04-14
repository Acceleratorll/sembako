<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
