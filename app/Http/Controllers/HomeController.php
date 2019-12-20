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

    public function redirection() {
        if (Auth::user()->role->name != 'admin') {
            return redirect()->route('dashboard');
        }
        if (Auth::user()->role->name == 'admin') {
            return redirect()->route('admin.dashboard');
        }
    }

    public function index() {
        return 'ok';
    }
}
