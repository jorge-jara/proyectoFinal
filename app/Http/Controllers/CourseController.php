<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', ['courses' => $courses]);
    }

    public function show($id)
    {
        $course = Course::find($id);

        return view('courses.show', compact('course'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $course = new Course();
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->instructor = $request->input('instructor');
        $course->price = $request->input('price');
        $course->duration = $request->input('duration');
        $course->category = $request->input('category');
        $course->level = $request->input('level');

        $course->save();

        return redirect()->route('courses.index');
    }

    public function edit($id)
    {
        $course = Course::find($id);

        return view('courses.edit', ['course' => $course]);
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);

        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->instructor = $request->input('instructor');
        $course->price = $request->input('price');
        $course->duration = $request->input('duration');
        $course->category = $request->input('category');
        $course->level = $request->input('level');

        $course->save();

        return redirect()->route('courses.index');
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect()->route('courses.index');
    }
}

