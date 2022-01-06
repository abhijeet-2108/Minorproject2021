@extends('layouts.app')

@section('content')
    {{--<div class="container border border-dark">--}}
    {{--    <div class="border border-dark">--}}
    {{--        <div class="text-center">--}}
    {{--                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle border border-dark" style="width: 20%" >--}}
    {{--        </div>--}}
    {{--        <hr class="border border-dark">--}}
    {{--        <div style="text-align: center" >--}}
    {{--            <h1>{{ $user->username }}</h1>--}}
    {{--        </div>--}}
    {{--        <div class="row">--}}

    {{--            <div class="col-2 d-flex align-items-center justify-content-center offset-5" style="font-size: 24px"> @ {!! $user->username !!}--}}
    {{--            </div>--}}
    {{--            <div class="col-5 d-flex align-items-end">--}}
    {{--                @if (auth()->user()->id == $user->id)--}}
    {{--                <a type="button" class="btn btn-facebook" href="/profile/{{ $user->id }}/edit">Edit profile</a>--}}
    {{--                @endif--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="row">--}}
    {{--        <div class="col-3 offset-1"><strong>{{$user->posts->count()}}</strong> Documents</div>--}}
    {{--        <div class="pr-5">--}}
    {{--        </div>--}}
    {{--        <div class="pr-5">--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="row">--}}
    {{--        <div class="col-3 offset-1">--}}
    {{--            @if (auth()->user()->id == $user->id)--}}
    {{--                <a type="button" class="btn btn-facebook" href="/post/create">Upload Document</a>--}}
    {{--            @endif--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="container pt-5 pb-5">--}}
    {{--        <h2>Student Details</h2>--}}
    {{--        <div class="row border border-dark">--}}
    {{--            <div class="col-4 border border-left">--}}
    {{--                <strong><h3>Description</h3></strong>--}}
    {{--                <div class="">{{ $user->profile->description ?? 'NULL'}}</div>--}}
    {{--            </div>--}}
    {{--            <div class="col-4 pr-2 border border-left">--}}
    {{--                <div class=" d-flex">--}}
    {{--                    <div class="">--}}
    {{--                        <strong><h3>Marks</h3></strong>--}}
    {{--                    </div>--}}
    {{--                    <div class="pt-2">--}}
    {{--                        @if (auth()->user()->id == $user->id)--}}
    {{--                            <h5><small><a href="/marks/create">Upload Marks</a></small></h5>--}}
    {{--                        @endif--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div>--}}
    {{--                    @foreach($user->marks as $mark)--}}
    {{--                        <div class="row">--}}
    {{--                            <span class="text-dark">{{$mark->exam}}:</span>--}}
    {{--                            <span class="text-dark">{{$mark->marks}}</span>--}}
    {{--                        </div>--}}


    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-4">--}}
    {{--                <strong><h3>Url</h3></strong>--}}
    {{--                <div class=""><a href="{{ $user->profile->url ?? '/#'}}">{{ $user->profile->url ?? 'NULL'}}</a></div>--}}

    {{--            </div>--}}
    {{--        </div>--}}


    {{--    </div>--}}


    {{--</div>--}}


    <div class=" d-flex justify-content-center align-items-center pt-5 pb-5 rounded"
         style="background-color: #545454;font-family:'Comic Sans MS'">

        <div class="card">
            <div class="upper">
                <img
                    src="{{ $user->profile->bgprofileImage() }}"
                    class="img-fluid" style="height: 110%" alt=""></div>
            <div class="user text-center mb-5">
                <div class="profile"><img src="{{ $user->profile->profileImage() }}" class="rounded-circle"></div>
            </div>
            <div class="mt-5 text-center">
                <h4 class="mt-5">{{ $user->username }}</h4>
                <a href="mailto:{{ $user->email }}"><span
                        class="text-muted d-block mb-2">{{ $user->email }}</span>
                </a>
                {{--            <button class="btn btn-primary btn-sm follow">Follow</button>--}}
                <div class="row mt-4 px-4">
                    <div class="stats col-6 ">
                        <h6 class="">Documents</h6> <span><strong>{{$user->posts->count()}}</strong></span>
                    </div>
                    <div class="col-6">
                        <div class="">Score</div>
                        <div>

                            @foreach($user->marks as $mark)
                                <div class="" style="font-size: small !important;">
                                    <span>{{$mark->exam}}:</span>
                                    <span>{{$mark->marks}}</span>
                                </div>


                            @endforeach
                        </div>
                    </div>
                    {{--                <div class="stats">--}}
                    {{--                    <h6 class="mb-0"></h6> <span></span>--}}
                    {{--                </div>--}}
                </div>
                <hr class="line">
                <div class="">
                    <strong class=""> About me</strong><br>
                    <small class="">{{ $user->profile->description ?? 'NULL'}}</small><br>
                    <a href="/redirect/{{ $user->profile->url }}">{{ $user->profile->url }}</a>
                </div>

            </div>
        </div>
    </div>





    {{--//////////////////////--}}


    {{--    <div class="pt-4 front-weight-bold">{{ $user->profile->title }}</div>--}}
    {{--    <div>{{ $user->profile->description }}</div>--}}
    {{--    <div><a href="#">{{ $user->profile->url }}</a></div>--}}
    {{--    <div class="row pt-5">--}}
    {{--        @foreach($user->posts as $post)--}}



    {{--            <div class="col-4 pb-4 overflow-hidden">--}}
    {{--                <a href="/post/{{ $post->id }}" alt="">--}}
    {{--                    <embed--}}
    {{--                        src="/storage/{{ $post->image }}"--}}
    {{--                        class="w-100"--}}
    {{--                    >--}}
    {{--                </a>--}}

    {{--                <img src="/storage/{{ $post->image }}" class="w-100">--}}
    {{--            </div>--}}
    {{--        @endforeach--}}
    {{--    </div>--}}

@endsection
