<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;


class ProfilesController extends Controller
{

    public function redirectweb($url)
    {
//        return Redirect::away('url');
//        edirect::($url);
//        dd($url);
        return redirect() -> away('https://'.$url);

    }
    public function index(\App\Models\User $user)
    {
//        $user = User::findOrFail($user);
//        dd($user);
        if ($user->type == 'student'){
            if(Auth::user() == $user){
                return view('profiles.index',compact('user'));
            }
            else{
                return abort('403');
            }
//            return view('profiles.index',compact('user'));
        }
        elseif ($user->type == 'university'){
            $events= auth()->user()->events;
            $today = date("Y-m-d H:i:s");
//            dump($today);
            foreach($events as $event ){
                if($event->date < $today){
                    $event->delete();
                }
                else
                {
//                    dd('no');
                }
            }

            return view('university_profiles.index',compact('user'));
        }
    }

    public function document(\App\Models\User $user)
    {
        if ($user->type == 'student'){
            return view('profiles.document',compact('user'));
        }
        elseif ($user->type == 'university'){
            return view('courses.create',compact('user'));
        }
    }

    public function edit(User $user)
    {
        if ($user->type=='student'){
            $this->authorize('update',$user->profile);
            return view('profiles.edit', compact('user'));
        }
        elseif ($user->type == 'university'){
            $this->authorize('update',$user->universityprofile);
            return view('university_profiles.edit', compact('user'));
        }
    }

    public function update(User $user)
    {
//        dd($user);
        if($user->type == 'student')
        {
            $this->authorize('update',$user->profile);

            $data = request()->validate([
                'title' =>'',
                'description' => '',
                'url' => '',
                'bgimage' => '',
                'image' => '',
            ]);

//        dd($data);
            if(request('bgimage')){
                $bgimagePath = request('bgimage')->store('profile','public');
                $bgimage = Image::make(public_path("storage/{$bgimagePath}"))->fit(1000,1000);
                $bgimage->save();
                $bgimageArray = ['bgimage' => $bgimagePath];
            }

            if(request('image')){
                $imagePath = request('image')->store('profile','public');
                $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
                $image->save();
                $imageArray = ['image' => $imagePath];
            }
//        dd($data);

            auth()->user()->profile->update(array_merge(
                $data,
                $bgimageArray ?? [],
                $imageArray ?? []
            ));

            return redirect("/profile/{$user->id}");
        }
        elseif ($user->type == 'university')
        {
            $this->authorize('update',$user->universityprofile);

            $data = request()->validate([
                'university_name' =>'',
                'description' => '',
                'url' => '',
                'bgimage' => '',
                'image' => '',
            ]);

//        dd($data);
            if(request('bgimage')){
                $bgimagePath = request('bgimage')->store('profile','public');
                $bgimage = Image::make(public_path("storage/{$bgimagePath}"))->fit(400,100);
                $bgimage->save();
                $bgimageArray = ['bgimage' => $bgimagePath];
            }
            if(request('image')){
                $imagePath = request('image')->store('profile','public');
                $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
                $image->save();
                $imageArray = ['image' => $imagePath];
            }
//        dd($data);
//            dd(auth()->user()->universityprofile);
            auth()->user()->universityprofile->update(array_merge(
                $data,
                $bgimageArray ?? [],
                $imageArray ?? []
            ));

            return redirect("/profile/{$user->id}");
        }

    }
}
