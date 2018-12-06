<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'date_birth', 'address',
    ];

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
