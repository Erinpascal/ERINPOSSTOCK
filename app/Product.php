<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'name',
        'image',
        'category_id',
        'brand_id',
        'sprice',
        'bprice',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

     public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function sales()
    {
        return $this->belongsToMany(Sales::class);
    }
}
