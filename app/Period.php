<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
