<?php

namespace App\Http\Controllers;

use App\Address;
use App\Seller;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    public function store(Request $request, $id)
    {
        $seller = Seller::findOrFail($id);
        $attributes = $request->all();
        $address = Address::create($attributes);
        $seller->address_id = $address->id;
        $seller->save();
        return response("Address of seller created", 200);
    }


    public function update(Request $request, $id)
    {
        $seller = Seller::findOrFail($id);
        $address_id = $seller->address_id;
        $Address = Address::findOrFail($address_id);
        $Address->fill($request->all());
        $Address->save();
        return response("Address Updated", 201);
    }
}
