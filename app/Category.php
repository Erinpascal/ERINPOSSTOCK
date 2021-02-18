<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     public $table = 'categories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

        public function products()
    {
        return $this->hasMany(Product::class, 'id');
    }

    
}
