<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];






    public function getPriceAttribute($price)
    {
        return $price / 100;
    }

    public function setPriceAttribute($price)
    {
        $this->attributes['price'] = $price * 100;
    }

    public function subCategory()
    {
        return $this->belongsTo('App\SubCategory');
    }
}
