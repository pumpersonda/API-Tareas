<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use Illuminate\Support\Facades\DB;
use App\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    //
    public function index($product_id)
    {
        $reviews = DB::table('product_tag')
            ->where('product_id',$product_id)
            ->get();
        return $reviews;

    }

    public function store(StoreReviewRequest $request,$product_id)
    {

        $attributes = $request->all();
        $review = Review::create($attributes);
        $review->product_id = $product_id;
        return $review;
    }


    public function show(Review $review,$product_id, $id)
    {
        $reviews = DB::table('product_tag')
            ->where('product_id',$product_id)
            ->where('tag_id',$id)
            ->get();
        return $reviews;
    }


    public function update(StoreReviewRequest $request, Review $review)
    {
        $attributes = $request->all();

        $review->update($attributes);
        return $review;
    }

    public function modify(StoreReviewRequest $request, Review $review)
    {
        $attributes = $request->all();
        $review->update($attributes);
        return $review;
    }

}
