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
        'name',
        'grandtotal'

    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    
public function salesitem()
{
    return $this->hasMany(Saleitem::class,'sale_id','id');
}
   
   public function product()
{
    return $this->hasMany(Product::class,'product_id','id');
}

    
}
