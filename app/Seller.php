<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    ///
    protected $fillable=['address_id','name','last_name'];

    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
