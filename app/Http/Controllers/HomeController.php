<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return redirect()->route('welcome');
    }
    public function home() {
        return view('welcome');
    }

}
