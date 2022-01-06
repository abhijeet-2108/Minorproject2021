@extends('layouts.app')

@section('content')

    <div class="container border border-primary rounded">
{{--        <strong>test</strong>--}}
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>
                            Edit Profile
                        </h1>
                    </div>
                    <div class="form-group row">
                        <label for="university_name" class="col-md-4 col-form-label">University Name</label>

                        {{--                <div class="col-md-6">--}}
                        <input id="university_name"
                               type="text"
                               name="university_name"
                               class="form-control @error('university_name') is-invalid @enderror" value="{{ old('university_name') ?? $user->universityprofile->university_name}}" required autocomplete="university_name" autofocus>

                        @error('university_name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('university_name') }}</strong>
                    </span>
                        @enderror
                        {{--                </div>--}}
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">Description</label>

                        {{--                <div class="col-md-6">--}}
                        <input id="description"
                               type="text"
                               name="description"
                               class="form-control @error('description') is-invalid @enderror" value="{{ old('description') ?? $user->universityprofile->description}}" required autocomplete="description" autofocus>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                        @enderror
                        {{--                </div>--}}
                    </div>
                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label">Url</label>

                        {{--                <div class="col-md-6">--}}
                        <input id="url"
                               type="text"
                               name="url"
                               class="form-control @error('url') is-invalid @enderror" value="{{ old('url') ?? $user->universityprofile->url}}"  autocomplete="url" autofocus>

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('url') }}</strong>
                    </span>
                        @enderror
                    </div>
                        <div class="row">

                            <div class="form-group col-6">
                                <label for="image" class=" col-form-label">Poster Image</label>
                                <input type="file", class="form-control-file" id="bgimage" name="bgimage">
                                @error('image')
                                <strong>{{ $errors->first('bgimage') }}</strong>
                                @enderror
                            </div>


                            <div class="form-group col-6">
                                <label for="image" class=" col-form-label">Profile Image</label>
                                <input type="file", class="form-control-file" id="image" name="image">
                                @error('image')
                                <strong>{{ $errors->first('image') }}</strong>
                                @enderror
                            </div>
                        </div>



                    <div class="row pt-4">
                        <button class="btn btn-primary ">Save Profile</button>
                    </div>

                </div>
            </div>

        </form>
    </div>

@endsection
