<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationRole extends Model
{
    use HasFactory;

      /* ORM */ 
      public function department()
      {
              return $this->hasOne(Department::class,'id','department_id')->where('is_active',1);
      }
      public function designation()
      {
              return $this->hasOne(Designation::class,'id','designation_id')->where('is_active',1);
      }
      /* ORM end */ 



    
}
