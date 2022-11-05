<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Helper\Table;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pizza.index', compact('pizzas'));
    }

    public function menu()
    {
        $pizzas = Pizza::all();
        return view('pizza.menu', compact('pizzas'));
    }

    public function create(Request $request)
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show($id, Request $request)
    {
        $amount = $request->amount;
        $pizza = Pizza::find($id);
        $reviews = Review::all()->where("pizza_id", $id);
        //dd(Auth::user());
        return view('pizza.show', compact(['pizza', 'reviews']));
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
