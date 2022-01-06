<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Course;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create($course)
    {
        if(Auth::user()->type == 'student'){
            return view('applications.create',compact('course'));
        }
        else{
            return abort('403');
        }
    }

    public function show(\App\Models\Application $application)
    {
//        dd($post);
        if (Auth::user()->type == 'university') {
            return view('applications.show', compact('application'));
        }
            else{
                return abort('403');
            }
//        return view('applications.show', compact('application'));
    }
    public function show_doc(\App\Models\Application $application)
    {
//        dd($post);
        if (Auth::user()->type == 'university') {
            return view('applications.document', compact('application'));
        }
        else{
            return abort('403');
        }
//        return view('applications.show', compact('application'));
    }

    public function accept(\App\Models\Application $application)
    {
        if (Auth::user()->type == 'university') {
            if($application->course->user == Auth::user())
            {
//                dd($application);
//                $university = Auth::user();
                $temp = Application::find($application->id);
                if($temp){
                    $temp->status = 'Accepted';
                    $temp->save();
                }
//                Application::where('id','application->id')->update([
//                    'status' => 'Accepted'
//                ]);
                $events = Event::all();
                $user = $application->course->user;
                $applications = Application::all();
                return view('university_profiles.dashboard', compact('user','events','applications'));
            }
        }
        else{
            return abort('403');
        }
    }
    public function reject(\App\Models\Application $application)
    {
        if (Auth::user()->type == 'university') {
            if($application->course->user == Auth::user())
            {
//                dd($application);
//                $university = Auth::user();
                $temp = Application::find($application->id);
                if($temp){
                    $temp->status = 'Rejected';
                    $temp->save();
                }
//                Application::where('id','application->id')->update([
//                    'status' => 'Accepted'
//                ]);
                $events = Event::all();
                $user = $application->course->user;
                $applications = Application::all();
                return view('university_profiles.dashboard', compact('user','events','applications'));
            }
        }
        else{
            return abort('403');
        }
    }
    public function store(Course $course)
    {
//        dd($course);
//        dd(request()->all());
        $data = request()->validate([
            'first_name' => 'required',
            'father_name' => 'required',
            'surname' => 'required',
            'dob' => 'required',
            'country' => 'required',
            'phone_no' => 'required',
            'image' => 'required|image',
        ]);
        $imagePath = request('image')->store('uploads','public');

//        auth()->user()->applications()->create($data);
        auth()->user()->applications()->create([
            'first_name' => $data['first_name'],
            'father_name' => $data['father_name'],
            'surname' => $data['surname'],
            'dob' => $data['dob'],
            'country' => $data['country'],
            'phone_no' => $data['phone_no'],
            'course_id' => $course->id,
            'image' => $imagePath,
            'status' => 'Pending',

        ]);
//        \App\Models\Course::create($data);
//        dd(request()->all());
        return redirect('/profile/'. auth()->user()->id);


    }
}
