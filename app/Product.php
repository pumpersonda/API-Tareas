<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['seller_id','name','price','description'];

    public static function find($id)
    {
    }

    public function tags(){
    	return $this->belongsToMany(Tag::class);
    }

    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    public function review(){
        return $this->hasMany(Review::class);
    }
}
