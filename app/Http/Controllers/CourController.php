<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\StoreCourse;
use App\Category;
use Illuminate\Support\Facades\Auth;

class CourController extends Controller
{
    /**
     * Display a listing of the Course.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::has('courses')->get();
        return view('admin.cours.index', ['active' => 'cours', 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new Course.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cours.create', ['active' => 'cours', "categories" => Category::all()]);
    }

    /**
     * Store a newly created Course in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourse $request)
    {
        $validated = $request->validated();

        $course = Course::create([
            "title" => $validated['title'],
            "slug" => $validated['slug'],
            "content" => $validated['content']
        ]);
        $course->category()->associate(Category::find($validated['category']));
        $course->user()->associate(Auth::user());
        $course->save();
        return redirect()->route('admin.cours.index');
    }

    /**
     * Display the specified Course.
     *
     * @param  \App\Course  $Course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        dd($course);
        //return view('admin.cours.show', ['cour' => $Course]);
    }

    /**
     * Show the form for editing the specified Course.
     *
     * @param  \App\Course  $Course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.cours.edit', ['cour' => $course, "active" => "cours"]);
    }

    /**
     * Update the specified Course in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $Course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified Course from storage.
     *
     * @param  \App\Course  $Course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
