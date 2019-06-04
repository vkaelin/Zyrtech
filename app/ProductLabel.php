<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLabel extends Model
{

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function label()
    {
        return $this->belongsTo(Label::class);
    }
}
