<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->admin == 0) {
            $car_list = DB::table('carlists')->get();
            return view('home', compact('car_list'));
        }
        else {
            return redirect('/admin-panel');
        }
    }
}
