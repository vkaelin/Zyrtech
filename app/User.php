<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    /**
     *  Rôle d'un utilisateur
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     *  Propriétaire d'un chef
     */
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    /**
     *  Chefs d'un propriétaire
     */
    public function chefs()
    {
        return $this->hasMany(User::class, 'owner_id');
    }

    /**
     *  Sets d'un propriétaire
     */
    public function sets()
    {
        return $this->hasMany(Set::class, 'owner_id');
    }

    /**
     *  Sets assignés à un Chef par un propriétaire
     */
    public function assignedSets()
    {
        return $this->hasMany(Set::class, 'chef_id');
    }

    /**
     *  Evalue si l'utilisateur peut ou pas évaluer un produit
     */
    public function canRateProduct($product)
    {
        return $this->setsWithProduct($product)->first();
    }

    /**
     *  Tous les sets du chef contenant un produit spécifique
     */
    public function allSetsWithProduct($product)
    {
        return $this->setsWithProduct($product)->get();
    }

    private function setsWithProduct($product)
    {
        return $this->assignedSets()->whereHas('products', function ($query) use ($product) {
            $query->where('product_id', $product->id);
        });
    }
}
