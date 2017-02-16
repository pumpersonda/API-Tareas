<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['seller_id','name','price','description'];

    function tags(){
    	return $this->belongsToMany(Tag::class);
    }
}
