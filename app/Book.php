<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','isbn','price','quantity'];

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}
