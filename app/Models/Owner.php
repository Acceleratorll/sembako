<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'phone',
        'city',
        'front_img',
    ];

    public function store()
    {
        return $this->hasMany(Store::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
