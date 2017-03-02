<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Product;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    //
    public function index($product_id)
    {
        return $reviews = DB::table('reviews')
            ->where('product_id', $product_id)->get();

    }

    public function store(StoreReviewRequest $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $review = new Review();
        $review->fill($request->all());
        $review->product()->associate($product);
        $review->save();
        return $review;
    }


    public function show(Review $review, $product_id, $id)
    {
        $reviews = DB::table('reviews')
            ->where('product_id', $product_id)
            ->where('id', $id)
            ->get();
        return $reviews;
    }


    public function update(StoreReviewRequest $request, Review $review)
    {
        $attributes = $request->all();
        $review->update($attributes);
        return $review;
    }

    public function modify(Request $request, Review $review)
    {
        $attributes = $request->all();
        $review->update($attributes);
        return $review;
    }


    public function destroy($productId, $reviewId)
    {
        Review::where('product_id', $productId)->where('id', $reviewId)->delete();
        return response("Review deleted", 200);
    }

}
