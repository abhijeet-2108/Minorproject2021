@extends('layouts.app')

@section('content')
<div class="container border border-primary pb-3 pt-3 card">
    <form action="/course" enctype="multipart/form-data" method="post">
        @csrf


        <div class="row card-body">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>
                        Add New Course
                    </h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Course Title:</label>

                    {{--                <div class="col-md-6">--}}
                    <input id="title"
                           type="text"
                           name="title"
                           class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @enderror
                    {{--                </div>--}}
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Short Description:</label>

                    {{--                <div class="col-md-6">--}}
                    <textarea id="description" name="description" rows="2" col="5" class="form-control" value="{{ old('description')}}" required autocomplete= "description" >
{{--?? $user->profile->description}} --}}

                    </textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @enderror
                    {{--                </div>--}}
                </div>
                <div class="form-group row">
                    <label for="long_description" class="col-md-4 col-form-label">Detailed Description:</label>

                    {{--                <div class="col-md-6">--}}
                    <textarea id="long_description" name="long_description" rows="4" col="10" class="form-control" value="{{ old('long_description')}}" required autocomplete= "long_description" >
{{--?? $user->profile->description}} --}}

                    </textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @enderror
                    {{--                </div>--}}
                </div>
                <div class=" form-group row">
                    <div class=" col-6">
                        <label for="seats" class=" col-form-label">Total Seats:</label>

                        <input id="seats"
                               type="number"
                               name="seats"
                               class="form-control @error('seats') is-invalid @enderror " value="{{ old('seats') }}" required autocomplete="seats" >

                        @error('seats')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('seats') }}</strong>
                    </span>
                        @enderror
                        {{--                </div>--}}
                    </div>
                    <div class=" col-6">
                        <label for="fees" class=" col-form-label">Total Fees:</label>

                        <input id="fees"
                               type="number"
                               name="fees"
                               class="form-control @error('fees') is-invalid @enderror " value="{{ old('fees') }}" required autocomplete="fees" >
                        <select id="money_type" name="money_type" class="form-control">
                            <option value="	United_States_dollar">USD $</option>
                            <option value="Euro">EUR €</option>
                            <option value="Indian_rupee">INR ₹</option>
                            <option value="Pound">GBP £</option>
                        </select>

                        @error('fees')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('fees') }}</strong>
                    </span>
                        @enderror
                        {{--                </div>--}}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fees" class="col-3 col-form-label">Total Duration:</label>

                    <input id="duration"
                           type="number"
                           name="duration"
                           class="form-control col-3 @error('duration') is-invalid @enderror " value="{{ old('duration') }}" required autocomplete="duration" >
                    <select id="duration_type" name="duration_type" class="form-control col-3">
                        <option value="Days">Days</option>
                        <option value="Months">Months</option>
                        <option value="year">Year</option>
                    </select>

                    @error('fees')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('fees') }}</strong>
                    </span>
                    @enderror
                </div>

{{--                <div class="row">--}}
{{--                    <label for="image" class="col-md-4 col-form-label">Upload Document</label>--}}
{{--                    <input type="file", class="form-control-file" id="image" name="image">--}}
{{--                    @error('image')--}}
{{--                        <strong>{{ $errors->first('image') }}</strong>--}}
{{--                    @enderror--}}
{{--                </div>--}}

                <div class="row pt-4">
                    <button class="btn btn-primary ">Add new Course</button>
                </div>

            </div>
        </div>

    </form>
</div>
@endsection
