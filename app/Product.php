<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['seller_id','name','price','description'];

    public function tags(){
    	return $this->belongsToMany(Tag::class);
    }

    public function seller(){
        return $this->belongsTo(Review::class);
    }

    public function review(){
        return $this->hasMany(Review::class);
    }
}
