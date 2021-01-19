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

    
}
