<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'owner_id',
        'name',
        'address',
        'phone',
        'city',
        'slogan',
        'front_img',
        'banner_img',
        'wallet',
        'email',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function branch()
    {
        return $this->hasMany(Branch::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
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
