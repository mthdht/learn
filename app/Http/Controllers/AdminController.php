<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard', [
            "active" => 'dashboard',
            "lastCourses" => Course::orderBy('created_at')->take(5)->get(),
            "lastUsers" => User::orderBy('created_at')->take(5)->get(),
            "coursesCount" => Course::count(),
            "usersCount" => User::count(),
            "userName" => Auth::user()->name
            ]);
    }
}
