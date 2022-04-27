<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{   
 
   use HasFactory;

  function getCategory(){
   return $this->hasOne('App\Models\Category','id','category_id');
  }

  function getUser(){
    return $this->hasOne('App\Models\Admin','id','user_id');
   }
}
