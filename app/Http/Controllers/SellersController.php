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
        $sellers = Seller::all();
        return $sellers;

    }

    public function store(StoreSellerRequest $request)
    {
        $attributes = $request->all();

        $seller = Seller::create($attributes);
        return $seller;
    }


    public function show(Seller $seller)
    {
        return Seller::with('address')->find($seller->id);
    }

    public function update(StoreSellerRequest $request,Seller $seller)
    {
        $attributes = $request->all();
        $seller->update($attributes);
        return $seller;
    }

    public function modify(StoreSellerRequest $request,Seller $seller)
    {
        $attributes = $request->all();
        $seller->update($attributes);
        return $seller;
    }

    public function destroy(Seller $seller)
    {
        $seller->delete();
        return Response::json([], $code =200);
    }

}
