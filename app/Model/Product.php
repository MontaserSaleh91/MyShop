<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Color;
use App\Size;


class Product extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    public function sizes(){
        return $this->belongsToMany(Size::class);
    }
}
