<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    function get_company(){
         return $this->hasOne(Company::class,'id','company_id');   //hasOne
    }

 
    function get_companies(){
         return $this->belongsto(Company::class,'company_id');   // belongsTo
    }


}
