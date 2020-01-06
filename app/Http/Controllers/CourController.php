<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\StoreCourse;
use App\Http\Requests\UpdateCourse;
use Illuminate\Http\Request;
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
        return view('admin.cours.index', ['active' => 'cours', 'categories' => $categories, "userName" => Auth::user()->name]);
    }

    /**
     * Show the form for creating a new Course.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cours.create', ['active' => 'cours', "categories" => Category::all(), "userName" => Auth::user()->name]);
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
        $request->session()->flash('status', 'Ajout réussi!');
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
        return view('admin.cours.show', ['course' => $course, 'active' => "cours", "userName" => Auth::user()->name]);
    }

    /**
     * Show the form for editing the specified Course.
     *
     * @param  \App\Course  $Course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.cours.edit', ['course' => $course, "active" => "cours", "categories" => Category::all(), "userName" => Auth::user()->name]);
    }

    /**
     * Update the specified Course in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $Course
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourse $request, Course $course)
    {
        $course->update($request->all());
        $request->session()->flash('status', 'Mise à jour réussi!');
        return redirect()->route('admin.cours.edit', ['course' => $course->slug]);
    }

    /**
     * Remove the specified Course from storage.
     *
     * @param  \App\Course  $Course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Course $course)
    {
        $course->delete();
        $request->session()->flash('status', 'Suppression réussi!');
        return redirect()->route('admin.cours.index');
    }
}
