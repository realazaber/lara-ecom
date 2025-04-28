<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'imgUrl',
        'price',
        'stock',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
