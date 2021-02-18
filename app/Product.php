<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;
use App\Constants\GlobalConstants;

class Product extends Model
{
        public $table = 'products';

     protected $fillable = [
        'name',
        'image',
        'category_id',
        'brand_id',
        'sprice',
        'bprice',
        'qty'
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
        return $this->belongsToMany(Sale::class);
    }

    public function getFullNameAttribute() {
        $fullName = ucfirst($this->name) . ' ' . ucfirst($this->code);
        if(strlen($fullName) <= 20) {
            return $fullName;
        } else {
            return substr($fullName, 0, 20) . '...';
        }
    }


    public static function getProducts($search_keyword, $name, $sort_by, $range) {
        $products = DB::table('products');


        if($search_keyword && !empty($search_keyword)) {
            $products->where(function($q) use ($search_keyword) {
                $q->where('products.name', 'like', "%{$search_keyword}%")
                ->orWhere('products.code', 'like', "%{$search_keyword}%");
            });
        }

        // Filter By name
        if($name && $name::ALL) {
            $products = $products->where('products.name', $name);
        }

        // Filter By sprice
        if($sort_by) {
            $sort_by = lcfirst($sort_by);
            if($sort_by) {
                $products = $products->where('products.sprice', $sort_by);
            } else if($sort_by ) {
                $products = $products->where('products.sprice', $sort_by);
            }
        }

        // Filter By Salaries
        if ($range && $range::ALL) {
            $products = $products->where('products.bprice', $range);
        }

        return $products->paginate(PER_PAGE_LIMIT);
    }

   
}
