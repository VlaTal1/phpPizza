<?php

namespace App\Http\Controllers;

use App\Order;
use App\Pizza;
use App\Review;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        return view('admin.index', compact('pizzas'));
        //return Pizza::all();
    }

    public function create(Request $request)
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        //Pizza::create($request->all());
        $pizza = new Pizza();
        $pizza->name = $request->input('name');
        $pizza->price = $request->input('price');
        $pizza->description = $request->input('description');
        $image = $request->file('image');
        if ($image) 
        {
            $path = Storage::putFile('public/images', $image);
            $pizza->image = Storage::url($path);
        }
        $pizza->postStore();
        return redirect()->route('post.index')->with('success', 'Новая пицца добавлена');
    }

    public function show($id)
    {
        $pizza = Pizza::find($id);
        $reviews = Review::all()->where("pizza_id", $id);
        return view('admin.show', compact(['pizza', 'reviews']));
        //return Pizza::find($id);
    }

    public function edit($id)
    {
        $pizza = Pizza::find($id);
        return view('admin.edit', compact('pizza'));
    }

    public function update(Request $request, $id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->update($request->all());
        $pizza->name = $request->input('name');
        $pizza->price = $request->input('price');
        $pizza->description = $request->input('description');
        $this->uploadImage($request, $pizza);
        $pizza->update();
        return redirect()
        ->route('admin.show', compact('id'))
        ->with('success', 'Пост успешно отредактирован');
    }

    public function destroy($id)
    {
        // $pizza = Pizza::findOrFail($id);
        // $pizza->delete();
        Pizza::where('id', $id)->delete();
        return redirect()
        ->route('admin.index')
        ->with('success', 'Пицца удалена');
    }
}
