<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['title','sku','cat_id','price','photo'];

    public static function getAllProduct(){
        return Product::orderBy('id','desc')->paginate(10);
    }
    public static function getProductBySlug($slug){
        return Product::where('slug',$slug)->first();
    }
}
