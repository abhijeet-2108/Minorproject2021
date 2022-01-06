<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-social.css') }}">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto" href="/home"><img src="{{ asset('img/logo.png') }}" height="30" width="41"></a>
                <div class="collapse navbar-collapse" id="Navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item "><a class="nav-link" href="/home"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item "><a class="nav-link" href="/aboutus"><span class="fa fa-info fa-lg"></span> About</a></li>
{{--                        <li class="nav-item "><a class="nav-link" href="/contactus"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>--}}
                        @if(Route::has('login'))
                            <li class="nav-item"><a class="nav-link" href="/dashboard"><span class="fa fa-list fa-lg"></span> Dashboard</a></li>
                        @endif
{{--                        <li class="nav-item"><a class="nav-link" href="/dashboard"><span class="fa fa-list fa-lg"></span> Dashboard</a></li>--}}

                        @guest
                            @if(Route::has('login'))
                            @endif
                        @else
                            @if(Auth::user()->type=='student')
                            <li class="nav-item">
                                <a class="nav-link" href="/profile/{{ Auth::user()->id }}/documents"><span class="fa fa-save fa-lg"></span> Documents</a>
                            </li>
                            @endif
                        @endguest

                        <li class="nav-item "><a class="nav-link" data-toggle="modal" data-target="#reserveModal"><span class="fa fa-search fa-lg"></span> Search</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                                            <!-- Authentication Links -->
                                            @guest
                                                @if (Route::has('login'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                    </li>
                                                @endif

                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->username }}
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                                        @if(Auth::user()->type == 'student')
                                                        <a class="dropdown-item "  href="/profile/{{ Auth::user()->id }}"
                                                           >
                                                            Profile
                                                        </a>
                                                            <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}/edit"
                                                            >
                                                                Edit Profile
                                                            </a>
                                                        <a class="dropdown-item" href="/post/create"
                                                        >
                                                            Upload Document
                                                        </a>
                                                            <a class="dropdown-item" href="/marks/create"
                                                            >
                                                                Add Score
                                                            </a>
                                                            <a class="dropdown-item" href="/dashboard/application"
                                                            >
                                                                Results
                                                            </a>
                                                        @elseif(Auth::user()->type == 'university')
                                                            <a class="dropdown-item"  href="/profile/{{ Auth::user()->id }}"
                                                            >
                                                                Profile
                                                            </a>
                                                            <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}/edit"
                                                            >
                                                                Edit Profile
                                                            </a>
                                                            <a class="dropdown-item" href="/course/create"
                                                            >
                                                                Add New Course
                                                            </a>
                                                            <a class="dropdown-item" href="/events/create"
                                                            >
                                                                Add New Event
                                                            </a>
                                                            <a class="dropdown-item" href="/dashboard/application"
                                                            >
                                                                Accepted Applications
                                                            </a>
                                                        @endif
                                                        <div class="dropdown-divider border border-primary"></div>
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                        </ul>
{{--                    <span class="navbar-text">--}}
{{--					<a class="css-button-sliding-to-left--blue" data-toggle="modal" data-target="#loginModal" role="button"><span class="fa fa-sign-in"></span> Login</a>--}}
{{--				</span>--}}
                </div>
            </div>
        </nav>
        <div id="reserveModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg" role="content">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Search a University</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">

                        <form id="reserveModalForm" action="/search" method="get">
                            @csrf
                            <div class="form-group row">
{{--                                <label for="numguest" class="col-12 col-sm-2 col-form-label">Number of Universities</label>--}}
{{--                                <div class="col-12 col-sm-10">--}}
{{--                                    <input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest">1--}}
{{--                                    <input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest"> 2--}}
{{--                                    <input type="radio" class="radio-inline mr-2 ml-3" checked id="numguest" name="numguest"> 3--}}
{{--                                    <input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest"> 4--}}
{{--                                    <input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest"> 5--}}
{{--                                    <input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest">6--}}
{{--                                </div>--}}
                                <label class="col-12 col-sm-2 col-form-label">Search</label>
                                <div class="col-12 col-sm">

                                <input type="text" name="search" class="form-control w-50" placeholder="Search" >
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-12 col-sm-2 col-form-label">Search By-</label>
                                <div class="col-12 col-sm">
                                    <div class="btn-group" data-toggle="buttons" >
                                        <label class="btn btn-primary btn-sm active" >
                                            <input type="radio" style="display: none;" name="filter" value="university" id="option1" autocomplete="off"  checked> University
                                        </label>
                                        <label class="btn btn-primary btn-sm"  >
                                            <input type="radio" style="display: none;" name="filter" value="course" id="option2" autocomplete="off"> Course
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
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <main class="py-3">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
    <footer class="footer" style="padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-5 offset-1 col-sm-2">
                    <h5>                    <strong>Links <span class="fa fa-link"></span></strong>
                    </h5>
                    <ul class="list-unstyled ">
                        <li><a href="/home" style="color: black">Home</a></li>
                        <li><a href="/aboutus" style="color: black">About</a></li>
                        <li><a href="/dashboard" style="color: black" >Dashboard</a></li>
                        <li><a href="/contactus" style="color: black">Contact</a></li>

                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a style="color: black" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li>
                                    <a style="color: black" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <span>
                                <a style="color: black" id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a style="color: black" class="dropdown-item"  href="/profile/{{ Auth::user()->id }}"
                                    >
                                        profile
                                    </a>
                                    <a style="color: black" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </span>
                        @endguest

                    </ul>
                </div>
                <div class="col-6 col-sm-5"></div>
                <div class="col-sm align-self-center">
                    <div  class="" style="text-align:center">
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="https://mail.google.com/"><i class="fa fa-mail"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <p>Minor Project 2021/22</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
