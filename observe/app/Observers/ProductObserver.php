<?php

namespace App\Observers;

use App\Models\Product;
use Log;

class ProductObserver
{
    
    public function creating(Product $product)
    {
        Log::info('product creating');

        Log::info($product);
        $product->slug = \Str::slug($product->name);
        // $product->uuid = 'PR-'.$product->id;
        
    }

    public function created(Product $product)
    {
        Log::info('product created');
        Log::info($product);
        $product->uuid ='PR-'.$product->id;
        // dd($product);
      
        $product->save();
    }
    
    public function updated(Product $product)
    {
        //
    }

    
    public function deleted(Product $product)
    {
        //
    }

    
    public function restored(ProductObserve $productObserve)
    {
        //
    }

    
    public function forceDeleted(ProductObserve $productObserve)
    {
        //
    }
}
