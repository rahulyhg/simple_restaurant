<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'client_id', 'table', 'total_price',
    ];

    protected $with = ['products', 'client'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
