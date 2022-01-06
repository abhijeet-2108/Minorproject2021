{{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}
@extends('layouts.app')

@section('content')


    <div id="reserveModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Search a University</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                    <form id="reserveModalForm">
                        <div class="form-group row">
                            <label for="numguest" class="col-12 col-sm-2 col-form-label">Number of Universities</label>
                            <div class="col-12 col-sm-10">
                                <input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest">1
                                <input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest"> 2
                                <input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest"> 3
                                <input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest"> 4
                                <input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest"> 5
                                <input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest">6
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-12 col-sm-2 col-form-label">Section</label>
                            <div class="col-12 col-sm">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary btn-sm active" id="option11">
                                        <input type="radio" style="display: none;" name="options" id="option1"
                                               autocomplete="off" checked> Graduate
                                    </label>
                                    <label class="btn btn-secondary btn-sm" id="option12">
                                        <input type="radio" style="display: none;" name="options" id="option2"
                                               autocomplete="off"> Post-Graduate
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--<div class="form-group row">
                            <label for="dtime" class="col-12 col-sm-2 col-form-label">Date and Time</label>
                            <div class="col-12 col-sm-4">
                                <input type="dtime" class="form-control" id="dtime" name="dtime" placeholder="Date">
                            </div>
                            <div class="col-12 col-sm-4">
                                <input type="dtime" class="form-control" id="dtime" name="dtime" placeholder="Time">
                            </div>
                        </div>-->
                        <div class="form-group row">
                            <div class="offset-sm-2 col-md-10">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Reserve</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Jumbotron -->
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1 style="color: #f9f5fa"><i>UniVerse</i></h1>
                    <p>We take inspiration from the World's best hotel searching app Trivago, and try to search best
                        collage available for you across the sea</p>
                </div>
                <div class="col-12 col-sm align-self-center">
                    <img src="" class="img-fluid">
                </div>
                <div class="col-12 col-sm align-self-center">
                    <a type="button" class="btn btn-success btn-sm btn-block" role="button" id="reserveButton">Search a University</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container">

        <div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach($universities as $key=>$university)

                        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <img class="d-block img-fluid img-thumbnail"
                                     src="{{ $university->user->universityprofile->bgprofileImage() }}"
                                     alt="columbia_university">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2>{{ $university->user->universityprofile->university_name }} <span
                                            class="badge badge-success">Famous</span> <span
                                            class="badge badge-pill badge-default"></span></h2>
                                    <strong class="hidden-xs-down">
                                    {{ $university->user->universityprofile->description }}
                                    </strong>
                                </div>
                            </div>
                            @if($key++ >4)
                                @break
                            @endif
                        @endforeach
                    </div>

                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                    {{--                                <div class="btn-group" id="carouselButtons">--}}
                    {{--                                    <button class="btn btn-danger btn-sm" id="carousel-button">--}}
                    {{--                                        <span id="carousel-button-icon" class="fa fa-pause"></span>--}}
                    {{--                                    </button>--}}
                    {{--                                </div>--}}
                </div>
            </div>
        </div>
        @foreach($universities as $i=>$university)
            @if($i++ >4)
                @break
            @endif
        <div class="row row-content align-items-center">
            {{--            <div class=" col-md-3 flex-last">--}}
            {{--                <h3></h3>--}}
            {{--            </div>--}}
            <div class="">
                <div class="row media h-100">
                    <div class="col-6">
                        <img class=" img-fluid align-self-center" src="{{ $university->user->universityprofile->bgprofileImage() }}"
                             alt="" style="height: 200px">
                    </div>

                    <div class="media-body ">
                        @if(Auth::user())
                        <a href="/profile/{{ $university->user->id }}">
                            @endif
                            <h2 class="mt-0 text-dark">
                                {{ $university->user->universityprofile->university_name }}  <span class="badge badge-primary"> Top-Rated</span>
                            </h2>
                        </a>
                        <div class=" col-7 offset-1 ">
                            {{ $university->user->universityprofile->description }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    {{--                <footer class="footer">--}}
    {{--                    <div class="container">--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-5 offset-1 col-sm-2">--}}
    {{--                                <h5>Links</h5>--}}
    {{--                                <ul class="list-unstyled">--}}
    {{--                                    <li><a href="/home">Home</a></li>--}}
    {{--                                    <li><a href="/aboutus">About</a></li>--}}
    {{--                                    <li><a href="#">Dashboard</a></li>--}}
    {{--                                    <li><a href="/contactus">Contact</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-6 col-sm-5"></div>--}}
    {{--                            <div class="col-sm align-self-center">--}}
    {{--                                <div style="text-align:center">--}}
    {{--                                    <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>--}}
    {{--                                    <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>--}}
    {{--                                    <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>--}}
    {{--                                    <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>--}}
    {{--                                    <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>--}}
    {{--                                    <a class="btn btn-social-icon" href="https://mail.google.com/"><i class="fa fa-mail"></i></a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="row justify-content-center">--}}
    {{--                            <div class="col-auto">--}}
    {{--                                <p>This is just sample</p>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </footer>--}}

@endsection
