@extends('layouts.app')

@section('content')
<div class="container border border-primary rounded pb-5 pt-5">
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf


        <div class="row py-4">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>
                        Add New Document
                    </h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">File Caption</label>

                    {{--                <div class="col-md-6">--}}
                    <input id="caption"
                           type="text"
                           name="caption"
                           class="form-control @error('caption') is-invalid @enderror" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('caption') }}</strong>
                    </span>
                    @enderror
                    {{--                </div>--}}
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Upload Document</label>
                    <input type="file", class="form-control-file" id="image" name="image">
                    @error('image')
                        <strong>{{ $errors->first('image') }}</strong>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary ">Add new Document</button>
                </div>

            </div>
        </div>

    </form>
</div>
@endsection
