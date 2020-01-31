<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Color extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
