@extends('layouts.app')

@section('content')

    <div class="container border border-primary rounded">
        <form action="/events" enctype="multipart/form-data" method="post">
            @csrf


            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>
                            Add Events
                        </h1>
                    </div>
                    <div class="form-group row">
                        <label for="event_name" class="col-md-4 col-form-label">Event Name</label>

                        {{--                <div class="col-md-6">--}}
                        <input id="event_name"
                               type="text"
                               name="event_name"
                               class="form-control @error('event_name') is-invalid @enderror" value="{{ old('event_name') }}" required autocomplete="title" autofocus>

                        @error('event_name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('event_name') }}</strong>
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
                               class="form-control @error('description') is-invalid @enderror" value="{{ old('description')}}" required autocomplete="description" autofocus>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                        @enderror
                        {{--                </div>--}}
                    </div>

                    <div class="form-group row">
                        <label for="date" class="col-md-4 col-form-label">Date & Time</label>

                        {{--                <div class="col-md-6">--}}
                        <input id="date"
                               type="datetime-local"
                               name="date"
                               class="form-control @error('description') is-invalid @enderror" value="{{ old('description')}}" required autocomplete="description" autofocus>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                        @enderror
                        {{--                </div>--}}
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary ">Save Event</button>
                    </div>

                </div>
            </div>

        </form>
    </div>

@endsection
