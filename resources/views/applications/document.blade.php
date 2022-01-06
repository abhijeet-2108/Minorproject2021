@extends('layouts.app')

@section('content')


    <div class=" d-flex justify-content-center align-items-center py-5 rounded"
         style="background-color: #545454;font-family:'Comic Sans MS'">
        <div class="card">
            <div class="row pt-2" style="padding-top: 50px">
                @foreach($application->user->posts as $post)
                    <div class="container " style="padding-top: 20px; padding-bottom: 20px">
                        <div class="row">
                            <div class="col-7 ">
                                <embed
                                    src="/storage/{{ $post->image }}"
                                    class="embed-responsive"
                                    height="400px"
                                    width="50%"
                                >
                            </div>
                            <div class="col-1">
                                                    <img class="rounded img-fluid" src="{{ $application->user->profile->profileImage() }}" class="w-100">

                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center">
                                    {{--                                <div class="pr-3">--}}
                                    {{--                                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px">--}}
                                    {{--                                </div>--}}
                                    <div class="">
                                        <div class="font-weight-bold">
                                            <a href="/application/{{ $application->id }}">
                                                <h4 class="text-dark">{{ $post->user->username }}</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <h5>
                    <span class="font-weight-bold">
{{--                        <a href="/profile/{{ $post->user->id }}">--}}
                        {{--                            <span class="text-dark">{{ $post->user->username }}</span>--}}
                        {{--                        </a>--}}
                    </span>
                                    {{ $post->caption }}
                                </h5>
                            </div>
                        </div>
                    </div>

            </div>
            <hr class="bg-dark">
            @endforeach
        </div>
    </div>


@endsection
