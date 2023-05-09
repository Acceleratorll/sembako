<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'store_id',
        'name',
        'qty',
        'price',
        'discount',
        'desc',
        'img',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function order_product()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function order_return()
    {
        return $this->hasMany(OrderReturn::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
