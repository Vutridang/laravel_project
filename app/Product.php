<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
   use SoftDeletes;
   
   protected $table = 'products';
   //table để lấy tên bảng 
   public $timestamps = true;
   //timestamps là để update trong bảng created at và updated at
}
