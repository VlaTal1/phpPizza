<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return Review::all();
    }

    public function create(Request $request)
    {
        Review::create($request->all());
        $pizza = Pizza::find($request->pizza_id);
        $reviews = Review::all()->where("pizza_id", $request->pizza_id);
        //return view('pizza.show', compact(['pizza', 'reviews']));
        return back();
    }
}
