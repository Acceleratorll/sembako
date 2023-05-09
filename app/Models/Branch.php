<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'store_id',
        'phone',
        'address',
        'city',
        'front_img',
        'banner_img',
        'wallet',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
