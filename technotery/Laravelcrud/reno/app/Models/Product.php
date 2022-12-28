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

    public function proImages()
    {
        return $this->hasMany(Image::class,'product_id','id');
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

}


