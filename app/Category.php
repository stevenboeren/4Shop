<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    //Leg de relatie ook vast in de models
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
