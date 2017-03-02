<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSellerRequest;
use App\Seller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SellersController extends Controller
{
    //
    public function index()
    {
        return Seller::with('address')->get();

    }

    public function store(StoreSellerRequest $request)
    {
        $attributes = $request->all();
        $seller = Seller::create($attributes);
        return $seller;
    }


    public function show(Seller $seller, $id)
    {
        return Seller::with('address')->find($id);
    }

    public function update(StoreSellerRequest $request, Seller $seller)
    {
        $attributes = $request->all();
        $seller->update($attributes);
        return $seller;
    }

    public function modify(Request $request, Seller $seller)
    {
        $attributes = $request->all();
        $seller->update($attributes);
        return $seller;
    }

    public function destroy(Seller $seller)
    {
        $seller->delete();
        return response("Seller deleted", 200);
    }

}
