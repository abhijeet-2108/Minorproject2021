@extends('layouts.app')

@section('content')
    {{--<div class="container border border-dark">--}}
    {{--    <div class="border border-dark">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-4"></div>--}}
    {{--            <div class=" col-4 pt-5" >--}}
    {{--                <img src="{{ $user->universityprofile->profileImage() }}" class="rounded-circle border border-dark" style="width: 75%" >--}}
    {{--            </div>--}}
    {{--            <div class="">--}}
    {{--                @if (auth()->user()->id == $user->id)--}}
    {{--                    <div class=" pt-5">--}}
    {{--                        <div class="pb-4">--}}
    {{--                            <a href="/course/create"><button class="btn btn-facebook">Add New Course</button></a>--}}
    {{--                        </div>--}}
    {{--                        <div class=" pt-4">--}}
    {{--                            <button class="btn btn-facebook " >Add New Event</button>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                @endif--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <hr class="border border-dark">--}}
    {{--        <div style="text-align: center" >--}}
    {{--            <h1>{{ $user->universityprofile->university_name }}</h1>--}}
    {{--        </div>--}}
    {{--        <div class="row">--}}

    {{--            <div class="col-3 d-flex align-items-center justify-content-center offset-4" style="font-size: 24px">--}}
    {{--                 @ {!! $user->username !!}--}}
    {{--            </div>--}}
    {{--            <div class="col-5 d-flex align-items-end">--}}
    {{--                @if (auth()->user()->id == $user->id)--}}
    {{--                    <a type="button" class="btn btn-facebook" href="/profile/{{ $user->id }}/edit">Edit profile</a>--}}
    {{--                @endif--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


    {{--    <div class="row">--}}
    {{--        <div class="col-9 pt-5">--}}
    {{--            <div class="d-flex">--}}
    {{--                <div class="pr-5">--}}

    {{--                </div>--}}
    {{--                <div class="pr-5">--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <h4 class="col-3">Discription</h4>--}}
    {{--                <div class="col-5"></div>--}}
    {{--                <div class="">--}}
    {{--                    University URL--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="pt-3 front-weight-bold"><strong>{{ $user->universityprofile->university_name }}</strong></div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-8">{{ $user->universityprofile->description }}</div>--}}
    {{--                <div class=""><a href="{{ $user->universityprofile->url }}">{{ $user->universityprofile->url }}</a></div>--}}
    {{--            </div>--}}
    {{--            </div>--}}
    {{--    </div>--}}
    {{--    <div class="container pt-5">--}}
    {{--        <strong><h3>Available Courses</h3></strong>--}}
    {{--        <hr class="border border-dark">--}}
    {{--        <div class="row pt-2">--}}
    {{--            <div class="container " style="padding-top: 20px; padding-bottom: 20px">--}}

    {{--            @foreach($user->courses as $course)--}}

    {{--                    <div class="pt-4 pb-4">--}}
    {{--                        <div class="col-8" >--}}

    {{--                            <div class="font-weight-bold">--}}
    {{--                                <span class="text-dark">{{ $course->title }}</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="pt-2">{!! nl2br(e($course->description)) !!}</div>--}}


    {{--                <hr class="border border-dark">--}}
    {{--            @endforeach--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--</div>--}}

    {{--        <div class="container d-flex justify-content-center align-items-center pt-5 pb-3"--}}
    {{--             style="background-color: #545454;font-family:Poppins, sans-serif">--}}
    {{--            <div class="card">--}}
    {{--                <div class="upper"><img--}}
    {{--                        src="https://image.shutterstock.com/image-photo/old-brick-black-color-wall-260nw-1605128917.jpg"--}}
    {{--                        class="img-fluid" style="height: 100%" alt=""></div>--}}
    {{--                <div class="user text-center">--}}
    {{--                    <div class="profile"><img src="{{ $user->profile->profileImage() }}" class="rounded-circle"></div>--}}
    {{--                </div>--}}
    {{--                <div class="mt-5 text-center">--}}
    {{--                    <h4 class="mb-0">{{ $user->username }}</h4> <a href="mailto:{{ $user->email }}"><span--}}
    {{--                            class="text-muted d-block mb-2">{{ $user->email }}</span></a>--}}
    {{--                    --}}{{--            <button class="btn btn-primary btn-sm follow">Follow</button>--}}
    {{--                    <div class="row mt-4 px-4">--}}
    {{--                        <div class="stats col-6 ">--}}
    {{--                            <h6 class="">Documents</h6> <span><strong>{{$user->posts->count()}}</strong></span>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="">Marks</div>--}}
    {{--                            <div>--}}

    {{--                                @foreach($user->marks as $mark)--}}
    {{--                                    <div class="" style="font-size: small !important;">--}}
    {{--                                        <span>{{$mark->exam}}:</span>--}}
    {{--                                        <span>{{$mark->marks}}</span>--}}
    {{--                                    </div>--}}


    {{--                                @endforeach--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <hr class="line">--}}
    {{--                    <div class="">--}}
    {{--                        <strong class=""> About me</strong><br>--}}
    {{--                        <small class="">{{ $user->profile->description ?? 'NULL'}}</small><br>--}}
    {{--                        <a href="/{{ $user->profile->url }}">{{ $user->profile->url }}</a>--}}
    {{--                    </div>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    <div class=" d-flex justify-content-center align-items-center pt-5 pb-5 rounded"
         style="background-color: #545454;font-family:'Comic Sans MS'">
        <div class="card">
            <div class="upper">
                <img
                    src="{{ $course->user->universityprofile->bgprofileImage() }}"
                    class="img-fluid" style="height: 110%" alt=""></div>
            <div class="user text-center mb-5">
                <div class="profile"><img src="{{ $course->user->universityprofile->profileImage() }}"
                                          class="rounded-circle">
                </div>
            </div>
            <div class="mt-5 text-center">
                <a href="/profile/{{$course->user->id}}" class="text-dark">
                    <h1 class="mt-5">{{ $course->user->universityprofile->university_name }}</h1>
                </a>
                <h2>
                    <u>
                        {{ $course->title}}
                    </u>
                </h2>
                <small> {{ $course->description }}</small>

                <hr class="line">

                <div class="row py-3">
                    <div class="col-6 row offset-1">

                        <div class="">
                            <h4>
                                <strong>About Course:</strong>
                            </h4><br>
                        </div>
                        <div class="">
                            <span>
                                {{ $course->long_description }}
                            </span>
                        </div>

                    </div>
                    <div class="text-center col-4 offset-1">
                        <h4>
                            <strong>Total Seats</strong>
                        </h4><br>
                        <span class="pt-2">{{ $course->seats }}</span>
                    </div>
                </div>
                <hr class="line">
                <div class="row py-3">
                    <div class="col-6 row offset-1">

                        <div class="">
                            <h4>
                                <strong>Course Duration</strong>
                            </h4><br>
                            <h5>
                                {{ $course->duration }}  {{$course->duration_type}}
                            </h5>
                        </div>


                    </div>
                    <div class="text-center col-4 offset-1">
                        <h4>
                            <strong>Total Fees</strong>
                        </h4><br>
                        <span class="pt-2">{{ $course->fees }}  {{ $course->money_type }}</span>
                    </div>
                </div>
                <hr class="line">
                @if(Auth::user()->type == 'student')
                <a href="/application/create/{{$course->id}}">
                    <button class="btn-primary py-1" type="button" style="width: 60%;">
                        <h4>Apply</h4>
                    </button>
                </a>
                @endif

            </div>

        </div>
    </div>

@endsection
