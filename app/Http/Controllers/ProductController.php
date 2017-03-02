<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Product;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('seller')->with('tags')->get();
        return $products;
    }

    public function show($id)
    {
        return Product::with('seller')->with('tags')->find($id);
    }

    public function store(StoreProductRequest $request)
    {
        $attributes = $request->all();
        $product = Product::create($attributes);
        $tags = $request->input('tags');
        foreach ($tags as $current) {
            $tag = Tag::where('tag_name', $current)->first();
            if (is_null($tag)) {
                $tag = new Tag();
                $tag->tag_name = $current;
                $tag->save();
            }
            $product->tags()->attach($tag->id);
        }
        return $attributes = $request->all();

    }

    public function update(StoreProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->fill($request->all());
        $product->save();
        return $product;


    }

    public function modify(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->fill($request->all());
        $product->save();
        return $product;
    }

//NO
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response("Product deleted", 200);
    }

}
