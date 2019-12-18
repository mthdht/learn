<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (\Auth::user()->role->role == 'user') {
            return view('homeUser');
        }
        if (\Auth::user()->role->role == 'editor') {
            return view('homeEditor');
        }
        if (\Auth::user()->role->role == 'admin') {
            return view('homeAdmin');
        }
        return view('homeAdmin');
    }
}
