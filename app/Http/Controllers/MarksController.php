<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        if (Auth::user()->type == 'student') {
            return view('profiles.marks');
        } else {
            return abort('403');
//        }return view('profiles.marks');
        }
    }
        public function store()
        {
            $data = request()->validate([
                'exam' => 'required',
                'marks' => 'required',
            ]);

            auth()->user()->marks()->create($data);
//        dd(request()->all());
            return redirect('/profile/' . auth()->user()->id);
        }

        public
        function event_create()
        {
            return view('university_profiles.events');
        }

        public
        function event_store()
        {
            $data = request()->validate([
                'event_name' => 'required',
                'description' => 'required',
                'date' => 'required'
            ]);

            auth()->user()->events()->create($data);
//        dd(request()->all());
            return redirect('/profile/' . auth()->user()->id);
        }


    }
