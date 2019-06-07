<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    public function labels()
    {
        return $this->belongsToMany(Label::class, 'product_labels');
    }

    // public function productLabel()
    // {
    //     return $this->hasOne(ProductLabel::class);
    // }

    public function stars()
    {
        return $this->hasMany(Star::class);
    }

    public function ratings()
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

    public function getStarAverage()
    {
        // A refactoriser
        $stars = $this->stars;

        if ($stars->isNotEmpty()) {
            $stars = $stars->reduce(function ($carry, $star) {
                return $carry + $star->value;
            });

            return $stars / $this->stars->count();
        }

        return 0;
    }

    public function getImage()
    {
        $this->image_src === 'no-src' ? $image = Storage::url('placeholder.jpg') : $image = Storage::url($this->image_src);
        return $image;
    }
}
