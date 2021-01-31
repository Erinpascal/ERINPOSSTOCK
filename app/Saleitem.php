<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saleitem extends Model
{
   protected $table = 'sale_items'; 

    

    protected $fillable = [
        'sale_id',
        'product_id',
        'price',
        'quantity',
    ];
// public function products()
// {
//     return $this->belongsTo(Product::class,'product_id','id');
// }
public function products()
    {
        return $this->belongsToMany(Product::class,'product_id','id')->withPivot(['quantity']);
    }
    
}
