<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
      /* ORM */ 
    public function department()
    {
            return $this->hasOne(Department::class,'id','department_id');
    }
    /* ORM end */ 
    /* created by code start */ 
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
