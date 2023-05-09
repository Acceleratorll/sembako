<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderReturn extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'cancelled',
        'note',
        'returned_date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order_detail()
    {
        return $this->belongsTo(OrderDetail::class);
    }
}
