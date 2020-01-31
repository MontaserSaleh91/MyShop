<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    public function products(){
        return $this->hasMany(Product::class);
    }
}
