<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $guarded = [];

    public function subCategory()
    {
        return $this->hasMany('App\SubCategory');
    }
}
