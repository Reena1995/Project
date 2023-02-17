<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetBrand extends Model
{
    use HasFactory;
    
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
