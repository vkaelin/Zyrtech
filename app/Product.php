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

    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }

    public function getTypeName()
    {
        return $this->type->name;
    }

    public function getPeriodName()
    {
        return $this->period->name;
    }

    public function getStarNote()
    {
        if (!$this->stars()->exists()) {
            return 0;
        }
        return round($this->stars()->avg('value'));
    }

    public function getRatingsNote()
    {
        if (!$this->ratings()->exists()) {
            return 0;
        }
        return round($this->ratings()->avg('value'));
    }

    public function getImage()
    {
        $this->image_src === 'no-src' ? $image = Storage::url('placeholder.jpg') : $image = Storage::url($this->image_src);
        return $image;
    }

    /**
     *  Vérifie si le produit a déjà été évalué par le chef/groupe de chefs du Set
     */
    public function alreadyRatedBySetChef($user)
    {
        return $this->ratings->whereIn('set_id', $user->currentSet->id)->count();
    }

    public function convertVideoUrl()
    {
        //
    }
}
