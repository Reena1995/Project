<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetSubType extends Model
{
    use HasFactory;

       /* ORM */ 
       public function ass_type()
       {
               return $this->hasOne(AssetType::class,'id','asset_type_id');
       }
       /* ORM end */ 

    protected static function boot(){
        parent::boot();
        self::creating(function($query){
            $query->created_by = auth()->user()->id;
        });
        self::created(function($query){
        });
        self::updating(function($query){
            $query->updated_by = auth()->user()->id;
        });
        self::updated(function($query){
            /* ... code here */
        });
        self::deleting(function($query){
            /* ... code here */
        });
        self::deleted(function($query){
            /* ... code here */
        });
    }    
}
