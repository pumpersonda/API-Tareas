<?php

namespace App\Http\Controllers;

use App\Address;
use App\Seller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function store(Request $request, $id)
    {
        $seller = Seller::findOrFail($id);
        $attributes = $request->all();
        $address = Address::create($attributes);
        $seller->address_id = $address->id;
        $seller->save();
        return $address;
    }


    public function update(Request $request, $id)
    {
        $seller = Seller::findOrFail($id);
        $address_id = $seller->address_id;
        $address = Address::findOrFail($address_id);
        $address->fill($request->all());
        $address->save();
        return $address;
    }
}
