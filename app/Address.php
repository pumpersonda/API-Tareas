<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $fillable=['address','city','state','country','zip_code'];

    public function seller(){
        return $this->hasOne(Seller::class);
    }
}
