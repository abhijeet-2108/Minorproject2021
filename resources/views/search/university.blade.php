@extends('layouts.app')

@section('content')

{{--    {{ dd($result) }}--}}
<div class="col-3">
    @guest()
        @if(Route::has('login'))
            <p class="">Login to visit the University Profile page</p>
        @endif
    @endguest
</div>
        @foreach($result as $university)
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                    <tr>
{{--                        <td class=" text-center">1</td>--}}
                        <td class="image"><img class="rounded-circle w-100 border" style="max-width: 70px" src="{{ $university->user->universityprofile->profileImage() }}" alt=""></td>
                        <td class="">
                            <strong>
                                @if(Auth::user())
                                    <a href="/profile/{{ $university->user->id }}">
                                        @endif
                                        <span class="text-dark">{{ $university->user->universityprofile->university_name }}</span>
                                    </a>
                            </strong><br><span>{{ $university->user->universityprofile->description }}</span><br>
                            <hr>
                            <small>Courses:</small><br>
                            @foreach($university->user->courses as $course)

                                <h6 class="text-dark ">{{ $course->title }}</h6>

                            @endforeach
                        </td>
                        {{--            <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span></td>--}}
                        {{--            <td class="price text-right">$350</td>--}}
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- END TABLE RESULT -->
        @endforeach


@endsection
