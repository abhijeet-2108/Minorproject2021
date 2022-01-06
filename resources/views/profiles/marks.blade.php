@extends('layouts.app')

@section('content')

    <div class="container border border-primary rounded py-4">
        <form action="/marks" enctype="multipart/form-data" method="post">
            @csrf


            <div class="row py-2">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>
                            Add Score
                        </h1>
                    </div>
                    <div class="form-group row">
                        <label for="exam" class="col-md-4 col-form-label">Exam</label>

                        {{--                <div class="col-md-6">--}}
                        <input id="exam"
                               type="text"
                               name="exam"
                               class="form-control @error('exam') is-invalid @enderror" value="{{ old('exam') }}" required autocomplete="title" autofocus>

                        @error('exam')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('exam') }}</strong>
                    </span>
                        @enderror
                        {{--                </div>--}}
                    </div>
                    <div class="form-group row">
                        <label for="marks" class="col-md-4 col-form-label">Score</label>

                        {{--                <div class="col-md-6">--}}
                        <input id="marks"
                               type="text"
                               name="marks"
                               class="form-control @error('marks') is-invalid @enderror" value="{{ old('marks') }}" required autocomplete="marks" autofocus>

                        @error('marks')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('marks') }}</strong>
                    </span>
                        @enderror
                        {{--                </div>--}}
                    </div>


                    <div class="row pt-4">
                        <button class="btn btn-primary ">Save Marks</button>
                    </div>

                </div>
            </div>

        </form>
    </div>

@endsection
