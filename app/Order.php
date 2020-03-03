<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function books()
    {
        return $this->belongsToMany('App\Book')->withTimestamps();
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
