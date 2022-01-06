<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        if(Auth::user()->type == 'university'){
            return view('courses.create');
        }
        else{
            return abort('403');
        }
//        return view('courses.create');
    }
    public function store()
    {
//        dd(request()->all());
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'seats' => 'required',
            'long_description' => 'required',
            'duration' => 'required',
            'duration_type' => 'required',
            'fees' => 'required',
            'money_type' => 'required',
        ]);

        auth()->user()->courses()->create($data);
//        \App\Models\Course::create($data);
//        dd(request()->all());
        return redirect('/profile/'. auth()->user()->id);


    }
    public function show(\App\Models\Course $course)
    {
//        dd($course);
        return view('courses.show', compact('course'));
    }
}
