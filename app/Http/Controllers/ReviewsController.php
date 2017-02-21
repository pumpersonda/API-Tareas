<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    //
    public function index()
    {
        $reviews = Review::all();
        return $reviews;

    }

    public function store(Request $request)
    {
        $attributes = $request->all();
        $review = Review::create($attributes);
        return $review;
    }


    public function show(Review $review)
    {
        return $review;
    }

    public function update(Request $request,Review $review)
    {
        $attributes = $request->all();

        $review->update($attributes);
        return $review;
    }
}
