<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    ///
    protected $fillable=['product_id','critic_name','title','content','date'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
