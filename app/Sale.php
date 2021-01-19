<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
   protected $table = 'sales'; 

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'tracking_no',
        'name'

    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['quantity']);
    }

   

    
}
