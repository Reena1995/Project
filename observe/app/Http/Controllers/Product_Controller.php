<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Log;

class Product_Controller extends Controller
{
    public function index()
    {
  
        $product = Product::create([
            'name' => 'reena',
            'price' => 10
        ]);
  
        dd($product);
    }
}    
