<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function allCategory()
    {
        $categories = Category::where('is_active',1)->get();
        return $categories;
    }
    
    public function proImages()
    {
        return $this->hasMany(Image::class,'product_id','id');
    }

    public function allimages()
    {
        return $this->hasMany(Image::class,'product_id','id')->where('is_active',1); 
    }

    public function isFeatureoneimage()
    {
        return $this->proImages()->where('is_active',1)->where('is_feature',1);        
    }

   
    public function proDetail()
    {
        return $this->hasOne(ProductDetail::class,'product_id','id');
    }

    
	 public function IsFeaturedImage()
    {
        return $this->proImages()->where('is_feature',1)->where('is_active',1);
    }
	
    public function GalleryImage()
    {
            return $this->proImages()->where('is_feature',0)->where('is_active',1);  
    }
    public function favourite()
    {
        $userId = auth()->user()->id ?? 0;
        return $this->hasOne(Favourite::class,'product_id','id')->where('user_id',$userId)->orderBY('id','DESC');
    }

}


