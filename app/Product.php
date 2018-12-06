<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'amount', 'price',
    ];

    public function requests()
    {
        return $this->belongsToMany(Request::class);
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
