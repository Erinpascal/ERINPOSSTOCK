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
        'unit_profit',
    ];
public function products()
{
    return $this->belongsTo(Product::class,'product_id','id');
}
public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
    
}
