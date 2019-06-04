<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    public function productLabel()
    {
        return $this->hasOne(ProductLabel::class);
    }
}
