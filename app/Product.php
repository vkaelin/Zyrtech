<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

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

    public function star()
    {
        return $this->hasMany(Star::class);
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
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

    public function getStarAverage()
    {
        // A refactoriser
        $stars = $this->star;

        if ($stars->isNotEmpty()) {
            $stars = $stars->reduce(function ($carry, $star) {
                return $carry + $star->value;
            });

            return $stars / $this->star->count();
        }

        return 0;
    }
}
