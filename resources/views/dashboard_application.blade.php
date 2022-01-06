@extends('layouts.app')

@section('content')
    @foreach(Auth::user()->applications as $application)
        {{--        <h1>{{ $application->id }}</h1>--}}
        @if($application->status == 'Accepted')
            <h1 class="text-center">Congratulations</h1>
            <h2 class="text-center pt-3"> Your Application for {{ $application->course->title }} course from {{ $application->course->user->universityprofile->university_name }} has been accepted</h2>
        @else

        @endif
    @endforeach

{{--    <div class="row">--}}
{{--        <div class="col-9 pt-5">--}}
{{--            <div class="d-flex justify-content-between align-items-baseline">--}}
{{--                <div class=" col-12"><h3 style="font-family: 'Comic Sans MS'"><strong>Available Universities</strong>--}}
{{--                    </h3></div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-3">--}}
{{--            @guest()--}}
{{--                @if(Route::has('login'))--}}
{{--                    <p class="">Login to visit the University Profile page</p>--}}
{{--                @endif--}}
{{--            @endguest--}}
{{--        </div>--}}
{{--    </div>--}}


{{--@if(Auth::user()->application)--}}
{{--    {{ dd($user,$universities) }}--}}

{{--@endif--}}

{{--    <div class="pl-5 pr-5 border-dark" style="padding-top: 20px; padding-bottom: 20px; font-family: 'Comic Sans MS'">--}}
{{--        <div class="row">--}}
{{--            --}}{{--                <div class="col-8" >--}}
{{--            --}}{{--                    <embed--}}
{{--            --}}{{--                        src="/storage/{{ $university->image }}"--}}
{{--            --}}{{--                        class="w-100"--}}
{{--            --}}{{--                        style="min-height: 300px;--}}
{{--            --}}{{--                                max-height: 600px;--}}
{{--            --}}{{--                                max-width: 400px;--}}
{{--            --}}{{--                                margin:auto;"--}}
{{--            --}}{{--                    >--}}
{{--            --}}{{--                </div>--}}

{{--            <div class="border rounded border-dark col-9 " style="height: auto ">--}}
{{--                @foreach($universities as $university)--}}
{{--                    <div class="d-flex align-items-center py-3">--}}
{{--                        <div class="pr-3">--}}
{{--                            <img src="{{ $university->user->universityprofile->profileImage() }}"--}}
{{--                                 class="rounded-circle w-100" style="max-width: 40px">--}}
{{--                        </div>--}}
{{--                        <div class="">--}}
{{--                            <div class="font-weight-bold">--}}
{{--                                @if(Auth::user())--}}
{{--                                    <a href="/profile/{{ $university->user->id }}">--}}
{{--                                        @endif--}}
{{--                                        <h2><span--}}
{{--                                                class="text-dark">{{ $university->user->universityprofile->university_name }}</span>--}}
{{--                                        </h2>--}}
{{--                                    </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <hr class="bg-dark">--}}

{{--                @endforeach--}}
{{--            </div>--}}


{{--            <div class="col-3 border-right border-top border-bottom border-success rounded">--}}
{{--                <div class=" col-12 my-2"><h3><strong> Upcoming Events </strong></h3>--}}
{{--                </div>--}}
{{--                <hr class="bg-dark ">--}}
{{--                @foreach($events as $event)--}}
{{--                    <div class="row align-items-center py-3 d-flex ">--}}
{{--                        <div class=" col-3">--}}
{{--                            <img src="{{ $event->user->universityprofile->profileImage() }}"--}}
{{--                                 class="rounded-circle w-100" style="max-width: 50px">--}}
{{--                        </div>--}}
{{--                        <div class="col-9">--}}
{{--                            <div class="font-weight-bold">--}}
{{--                                @if(Auth::user())--}}
{{--                                    <a href="/profile/{{ $event->user->id }}">--}}
{{--                                        @endif--}}
{{--                                        <h2><span--}}
{{--                                                class="text-dark">{{ $event->user->universityprofile->university_name }}</span>--}}
{{--                                        </h2>--}}
{{--                                    </a>--}}
{{--                            </div>--}}
{{--                            <strong>{{ $event->event_name }}</strong><br>--}}
{{--                            <small>{{ $event->date }}</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <hr class="bg-dark">--}}


{{--                @endforeach--}}

{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
    <div class="">
        <div class=" pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class=" col-9"><h3 style="font-family: 'Comic Sans MS'"><strong>Your Application Status</strong>
                    </h3></div>
                <div class="col-3">
                    <h3><strong> Status </strong></h3>
                </div>

            </div>
        </div>

    </div>
        {{--        <h1>{{ $application->id }}</h1>--}}
    <div class=" pl-5 pr-5 row pb-5">
        @foreach(Auth::user()->applications as $application)
        <div class="border rounded border-dark col-9 " style="height: auto ">
                <div class="d-flex align-items-center py-3">
                    <div class="pr-3">
                        <img src="{{ $application->course->user->universityprofile->profileImage() }}"
                             class="rounded-circle w-100" style="max-width: 40px">
                    </div>
                    <div class="">
                        <div class="font-weight-bold">
                            @if(Auth::user())
                                <a href="/profile/{{ $application->course->user->id }}">
                                    @endif
                                    <h2><span
                                            class="text-dark">{{ $application->course->title }}</span>
                                    </h2>
                                </a>
                        </div>
                    </div>
                </div>
                <hr class="bg-dark">

        </div>
{{--        @if($application->status == 'Accepted')--}}
{{--            <h1 class="text-center">Congratulations</h1>--}}
{{--            <h2 class="text-center pt-3"> Your Application for {{ $application->course->title }} course from {{ $application->course->user->universityprofile->university_name }} has been accepted</h2>--}}
{{--        @else--}}

{{--        @endif--}}
        <div class="col-3 border-right border-top border-bottom border-success rounded">
            <div class=" col-12 my-4"><h3><strong>
                        @if($application->status == "Accepted")
                            <span class="text-success">{{ $application->status }}</span>
                        @elseif($application->status == "Rejected")
                            <span class="text-danger">{{ $application->status }}</span>
                        @else
                            <span class="text-secondary">{{ $application->status }}</span>

                        @endif </strong></h3>
            </div>
            <hr class="bg-dark ">
        </div>
        @endforeach

    </div>





    {{--	<div class="container">--}}

    {{--		<!-- Breadcrumb -->--}}
    {{--		<div class="row">--}}
    {{--			<ol class="col-12 breadcrumb">--}}
    {{--				<li class="breadcrumb-item"><a href="/home">Home</a></li>--}}
    {{--				<li class="breadcrumb-item active">Contact Us</li>--}}
    {{--			</ol>--}}
    {{--			<div class="col-12">--}}
    {{--				<h3>Contact Us</h3>--}}
    {{--				<hr>--}}
    {{--			</div>--}}
    {{--		</div>--}}

    {{--		<!-- Location Information -->--}}
    {{--		<div class="row row-content">--}}
    {{--			<div class="col-12">--}}
    {{--				<h3>Location Information</h3>--}}
    {{--			</div>--}}
    {{--			<div class="col-12 col-sm-4 offset-sm-1">--}}
    {{--				<h5>Our Address</h5>--}}
    {{--				<address style="font-size: 100%">--}}
    {{--					123, ...<br>--}}
    {{--					..., ...<br>--}}
    {{--					India<br>--}}
    {{--					<i class="fa fa-phone"></i>: +91----------<br>--}}
    {{--					<i class="fa fa-fax"></i>: +91----------<br>--}}
    {{--					<i class="fa fa-envelope"></i>: <a href="mailto:UniVerse@help.in">UniVerse@help.in</a>--}}
    {{--				</address>--}}
    {{--			</div>--}}
    {{--			<div class="col-12 col-sm-6 offset-sm-1">--}}
    {{--				<h5>Map of our Location</h5>--}}
    {{--				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14676.578761240757!2d72.53609602928593!3d23.128385958391544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e832f45125167%3A0x876cb1cb23c25bdb!2sNirma%20University!5e0!3m2!1sen!2sin!4v1631431337924!5m2!1sen!2sin" width="100%" height="100%" style="border: thick;" allowfullscreen="" loading="lazy"></iframe>--}}

    {{--			</div>--}}
    {{--			<div class="col-12 col-sm-11 offset-sm-1">--}}
    {{--				<div class="btn-group" role="group">--}}
    {{--					<a role="button" class="btn btn-primary" href="tel:+85212345678"><i class="fa fa-phone"></i> Call</a>--}}
    {{--					<a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>--}}
    {{--					<a role="button" class="btn btn-success" href="mailto:confusion@food.net"><i class="fa fa-envelope-o"></i> Email</a>--}}
    {{--				</div>--}}
    {{--			</div>--}}
    {{--		</div>--}}

    {{--		<!-- Feedback -->--}}
    {{--		<div class="row row-content">--}}
    {{--			<div class="col-12">--}}
    {{--			<h3>Send us your Feedback</h3>--}}
    {{--			</div>--}}
    {{--			<div class="col-12 col-md-9">--}}
    {{--				<form>--}}
    {{--					<div class="form-group row">--}}
    {{--						<label for="firstname" class="col-md-2 col-form-label">First Name</label>--}}
    {{--						<div class="col-md-10">--}}
    {{--							<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--					<div class="form-group row">--}}
    {{--						<label for="lastname" class="col-md-2 col-form-label">Last Name</label>--}}
    {{--						<div class="col-md-10">--}}
    {{--							<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--					<div class="form-group row">--}}
    {{--						<label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>--}}
    {{--						<div class="col-5 col-sm-4 col-md-3">--}}
    {{--							<div class="input-group">--}}
    {{--								<div class="input-group-addon">(</div>--}}
    {{--								<input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area code">--}}
    {{--								<div class="input-group-addon">)</div>--}}
    {{--							</div>--}}
    {{--						</div>--}}
    {{--						<div class="col-7 col-sm-6 col-md-7">--}}
    {{--							<input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number">--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--					<div class="form-group row">--}}
    {{--						<label for="emailid" class="col-md-2 col-form-label">Email</label>--}}
    {{--						<div class="col-md-10">--}}
    {{--							<input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--					<div class="form-group row">--}}
    {{--						<div class="form-check col-md-6 offset-md-2">--}}
    {{--							<label class="form-check-label">--}}
    {{--								<input type="checkbox" class="form-check-input" name="approve" value="">--}}
    {{--								<strong>May we contact you?</strong>--}}
    {{--							</label>--}}
    {{--						</div>--}}
    {{--						<div class="col-md-3 offset-md-1">--}}
    {{--							<select class="form-control">--}}
    {{--								<option>Tel.</option>--}}
    {{--								<option>Email</option>--}}
    {{--							</select>--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--					<div class="form-group row">--}}
    {{--						<label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>--}}
    {{--						<div class="col-md-10">--}}
    {{--							<textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--					<div class="form-group row">--}}
    {{--						<div class="offset-md-2 col-md-10">--}}
    {{--							<button type="submit" class="btn btn-primary">Send Feedback</button>--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--				</form>--}}
    {{--			</div>--}}
    {{--			<div class="col-12 col-md">--}}
    {{--			</div>--}}
    {{--		</div>--}}

    {{--	</div>--}}

    {{--	<!-- build:js js/main.js -->--}}
    {{--	<script src="node_modules/jquery/dist/jquery.min.js"></script>--}}
    {{--	<script src="node_modules/tether/dist/js/tether.min.js"></script>--}}
    {{--	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>--}}
    {{--    <script src="js/scripts.js"></script>--}}
    {{--    <!-- endbuild -->--}}

@endsection
