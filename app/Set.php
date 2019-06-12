<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    protected $guarded = [];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function chef()
    {
        return $this->belongsTo(User::class, 'chef_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'set_products')->withTimestamps();
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function path()
    {
        return "/dashboard/sets/{$this->id}";
    }

    public function productAlreadyRated($product)
    {
        return $this->ratings()->where('product_id', $product->id)->exists();
    }
}
