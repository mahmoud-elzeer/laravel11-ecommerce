<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTO(Category::class,'category_id');
    }
    
    public function brand(){
        return $this->belongsTO(Brand::class,'brand_id');
    }
}
