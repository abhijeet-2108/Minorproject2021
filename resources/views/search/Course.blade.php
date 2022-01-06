@extends('layouts.app')

@section('content')

{{--    {{ dd($result) }}--}}

        @foreach($result as $course)
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                    <tr>
{{--                        <td class=" text-center">1</td>--}}
                        <td class="image"><img class="rounded-circle w-100 border" style="max-width: 70px" src="{{ $course->user->universityprofile->profileImage() }}" alt=""></td>
                        <td class="">
                            <strong>
                                @if(Auth::user())
                                    <a href="/profile/{{ $course->user->id }}">
                                        @endif
                                        <h3 class="text-dark">{{ $course->user->universityprofile->university_name }}</h3>
                                    </a>
                            </strong><br>
                            <h5>{{ $course->title }}</h5><br>
                            <hr>
                            <small>{{ $course->description }}</small>
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
