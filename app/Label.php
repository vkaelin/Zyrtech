<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $guarded = [];

    public function productLabel()
    {
        return $this->hasOne(ProductLabel::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_labels');
    }
}
