<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Size extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
