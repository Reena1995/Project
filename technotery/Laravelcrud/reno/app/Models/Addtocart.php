<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addtocart extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }
    public function productcart()
    {
        return $this->hasOne(Productcart::class,'id','cart_id');
    }
    public function shoppingCart()
    {
        return $this->hasMany('App\Model\Frontend\ShoppingCart', 'id', 'cart_id');
    }
}
