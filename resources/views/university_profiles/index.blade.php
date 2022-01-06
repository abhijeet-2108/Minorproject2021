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

    <div class=" d-flex justify-content-center align-items-center py-5 rounded"
         style="background-color: #545454;font-family:'Comic Sans MS'">
        <div class="card">
            <div class="upper">
                <img
                    src="{{ $user->universityprofile->bgprofileImage() }}"
                    class="img-fluid" style="height: 110%" alt=""></div>
            <div class="user text-center mb-5">
                <div class="profile"><img src="{{ $user->universityprofile->profileImage() }}" class="rounded-circle">
                </div>
            </div>
            <div class="mt-5 text-center">
                <h4 class="mt-5">{{ $user->universityprofile->university_name }}</h4>
                <a
                    href="mailto:{{ $user->email }}"><span
                        class="text-muted d-block mb-2">{{ $user->email }}</span>
                </a>
                {{--            <button class="btn btn-primary btn-sm follow">Follow</button>--}}
                <div class="row mt-4 px-4">
                    <div class="stats col-6 ">
                        <h6 class="">Courses</h6> <span><strong>{{$user->courses->count()}}</strong></span>
                    </div>
                    <div class="col-6">
                        <h6 class="">Events</h6> <span><strong>{{$user->events->count()}}</strong></span>

                    </div>
                    {{--                <div class="stats">--}}
                    {{--                    <h6 class="mb-0"></h6> <span></span>--}}
                    {{--                </div>--}}
                </div>
                <hr class="line">
                <div class="row">
                    <div class="col-6 " style="padding-top: 20px; padding-bottom: 20px">
                        {{--                                <h4>Courses</h4>--}}
                        @foreach($user->courses as $course)

                            <div class="pt-4 pb-4">
                                <div class="text-center">

                                    <div class="font-weight-bold">
                                        <a href="/course/{{ $course->id }}">
                                            <h5 class="text-dark ">{{ $course->title }}</h5>
                                        </a>
                                    </div>
                                </div>
                                <small class="pt-2">{!! nl2br(e($course->description)) !!}</small>


                                {{--                                <hr class="border border-dark">--}}

                            </div>
                        @endforeach
                    </div>
                    <div class="col-6 " style="padding-top: 20px; padding-bottom: 20px">
                        {{--                                <h4>Courses</h4>--}}
                        @foreach($user->events as $event)

                            <div class="pt-4 pb-4">
                                <div class="text-center">

                                    <div class="font-weight-bold">

                                        <a class="card-link" role="button" data-toggle="modal"
                                           data-target="#eventsmodel-quickview{{ $event->id }}">
                                            <h5 class="text-dark">{{ $event->event_name }}</h5>
                                        </a>
                                        <div class="modal fade" id="eventsmodel-quickview{{ $event->id }}" role="" style="width: 110%">

                                            <div class="modal-dialog modal-sm" role="content"
                                                 style="font-family: 'Times New Roman'">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header " style="height: min-content">
                                                        <h4 class="modal-title">Event</h4>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            &times;
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div class="">
                                                            <h3 class="">{{ $event->event_name }}</h3>
                                                        </div>
                                                        <hr class="bg-dark">
                                                        <div class="py-4">
                                                            <h5>
                                                                {{ $event->description }}
                                                            </h5>
                                                        </div>
                                                        <h4>Date & Time: {{ $event->date }}</h4>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="">
                                                            <button type="button" class="btn btn-success"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <small class="pt-2">{!! nl2br(e($event->date)) !!}</small>


                                {{--                                <hr class="border border-dark">--}}

                            </div>
                        @endforeach
                    </div>


                </div>
                <hr class="line">

            </div>
            <div class="text-center">
                <strong class=""> About Us</strong><br>
                <small class="">{{ $user->universityprofile->description ?? 'NULL'}}</small><br>
                <a href="/redirect/{{ $user->universityprofile->url }}">{{ $user->universityprofile->url }}</a>
            </div>
        </div>
    </div>

@endsection
