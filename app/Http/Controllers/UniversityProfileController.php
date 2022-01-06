<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Course;
use App\Models\Event;
use App\Models\Marks;
use App\Models\UniversityProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UniversityProfileController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(\App\Models\User $user)
    {
//        $user = User::findOrFail($user);
//        dd($user);
        return view('profiles.index',compact('user'));
    }

    public function dashboard(\App\Models\User $user)
    {
        if(Auth::user())
        {
            if (Auth::user()->type == 'student'){
                $universities = UniversityProfile::all();
                $events = Event::all();
//        dd($universities);
//            dd($user);
                return view('dashboard',compact('user','universities','events'));
//            return view('profiles.document',compact('user'));
            }
            elseif (Auth::user()->type  == 'university'){
                $events = Event::all();

                $applications = Application::all();

                return view('university_profiles.dashboard',compact('user','events','applications'));
            }
            else{
                return view('welcome');
            }
        }
        else {
            return view('auth.login');
        }


    }
    public function dashboard_application(\App\Models\User $user)
    {
        if(Auth::user())
        {
            if (Auth::user()->type == 'student'){
                $universities = UniversityProfile::all();
                $events = Event::all();
//        dd($universities);
//            dd($user);
                return view('dashboard_application',compact('user','universities','events'));
//            return view('profiles.document',compact('user'));
            }
            elseif (Auth::user()->type  == 'university'){
                $events = Event::all();

                $applications = Application::all();

                return view('university_profiles.dashboard_application',compact('user','events','applications'));
            }
            else{
                return view('welcome');
            }
        }
        else {
            return view('auth.login');
        }


    }

    public function home(\App\Models\User $user)
    {
        $universities = UniversityProfile::all();
//        dd($universities);
        return view('welcome',compact('user','universities'));
    }
    public function search(Request $request)
    {

        extract($request->all());
        if($filter == 'university'){
//            dd("university");
            $result=UniversityProfile::query()->select()->where('university_name', 'LIKE', '%' . $search . '%')->get();
//            dd($result);
            return view('search.university',compact('result'));
        }
        else
        {
            $result=Course::query()->select()->where('title', 'LIKE', '%' . $search . '%')->get();
            return view('search.course',compact('result'));
        }

    }
}
