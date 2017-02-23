<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('seller')->with('tags')->get();
        return $products;
    }

    public function show(Product $product)
    {
        return Product::with('seller')->with('tags')->find($product->id);
    }

    public function store(StoreProductRequest $request)
    {
        $attributes = $request->all();

        $seller = Product::create($attributes);
        return $seller;
    }

    public function update(StoreProductRequest $request,Product $product)
    {
        $attributes = $request->all();
        $product->update($attributes);
        return $product;
    }

    public function modify(StoreProductRequest $request,Product $product)
    {
        $attributes = $request->all();
        $product->update($attributes);
        return $product;
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return Response::json([], $code =200);
    }

}
