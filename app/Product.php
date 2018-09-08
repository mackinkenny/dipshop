<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'type_id'];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
