<?php

namespace App\Http\Controllers;

use App\Order;
use App\Pizza;
use App\Review;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function create(Request $request)
    {
        //dd(Auth::user());
        Order::create($request->all());
        $authUser = Auth::user();
        // if(Auth::check())
        // {
            // Auth::user()->ordersAmount++;
            // Auth::user()->save();
            //DB::table('users')->where('id', Auth::user()->id)->update(['ordersAmount' => Auth::user()->ordersAmount + 1]);
        //}
        return back();
    }
}
