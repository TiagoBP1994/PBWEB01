<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\job;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function news()
    {
        //auth()->user()->notify(new newJob());
        return view('news');
    }
    
    public function profile()
    {
        return view('profile');
    }
    
    public function info($id)
    {
        return view('info');
    }
}
