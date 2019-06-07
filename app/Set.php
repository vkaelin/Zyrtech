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

    public function chefs()
    {
        return $this->belongsToMany(User::class, 'set_chefs')->withTimestamps();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'set_products')->withTimestamps();
    }

    public function path()
    {
        return "/dashboard/sets/{$this->id}";
    }
}
