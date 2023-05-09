<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipping extends Model
{
    use
    HasFactory, SoftDeletes;

    protected $fillable = [
        'method',
        'cost',
        'shipping_date',
    ];

    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
