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

    public function productLabel()
    {
        return $this->hasOne(ProductLabel::class);
    }

    public function getTypeName()
    {
        return $this->type->name;
    }

    public function getPeriodName()
    {
        return $this->period->name;
    }

    public function getLabelName()
    {
        if ($this->productLabel != null) {
            return $this->productLabel->label->name;
        }

        return 'Sans label';
    }
}
