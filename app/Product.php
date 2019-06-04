<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function period()
    {
        return $this->belongsTo(Period::class);
    }
}
