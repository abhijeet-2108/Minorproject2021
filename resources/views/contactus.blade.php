@extends('layouts.app')

@section('content')
	<!-- Navigation bar -->
{{--	<nav class="navbar navbar-dark navbar-expand-sm fixed-top">--}}
{{--		<div class="container">--}}
{{--			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">--}}
{{--				<span class="navbar-toggler-icon"></span>--}}
{{--			</button>--}}
{{--			<a class="navbar-brand mr-auto" href="index.php"><img src="img/logo.png" height="30" width="41"></a>--}}
{{--			<div class="collapse navbar-collapse" id="Navbar">--}}
{{--				<ul class="navbar-nav mr-auto">--}}
{{--					<li class="nav-item"><a class="nav-link" href="/home"><span class="fa fa-home fa-lg"></span> Home</a></li>--}}
{{--					<li class="nav-item"><a class="nav-link" href="/aboutus"><span class="fa fa-info fa-lg"></span> About</a></li>--}}
{{--					<li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>--}}
{{--					<li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Dashboard</a></li>--}}
{{--					<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#reserveModal"><span class="fa fa-search fa-lg"></span> Search</a></li>--}}
{{--				</ul>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</nav>--}}

{{--	<div id="reserveModal" class="modal fade" role="dialog">--}}
{{--		<div class="modal-dialog modal-lg" role="content">--}}
{{--			<!-- Modal content-->--}}
{{--			<div class="modal-content">--}}
{{--				<div class="modal-header">--}}
{{--					<h4 class="modal-title">Search a University</h4>--}}
{{--					<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--				</div>--}}

{{--				<div class="modal-body">--}}

{{--					<form id="reserveModalForm">--}}
{{--						<div class="form-group row">--}}
{{--							<label for="numguest" class="col-12 col-sm-2 col-form-label">Number of Universities</label>--}}
{{--							<div class="col-12 col-sm-10">--}}
{{--								<input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest">1--}}
{{--								<input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest"> 2--}}
{{--								<input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest"> 3--}}
{{--								<input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest"> 4--}}
{{--								<input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest"> 5--}}
{{--								<input type="radio" class="radio-inline mr-2 ml-3" id="numguest" name="numguest">6--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="form-group row align-items-center">--}}
{{--							<label class="col-12 col-sm-2 col-form-label">Section</label>--}}
{{--							<div class="col-12 col-sm">--}}
{{--								<div class="btn-group" data-toggle="buttons" >--}}
{{--									<label class="btn btn-primary btn-sm active" id="option11">--}}
{{--										<input type="radio" style="display: none;" name="options" id="option1" autocomplete="off"  checked> Graduate--}}
{{--									</label>--}}
{{--									<label class="btn btn-secondary btn-sm" id="option12" >--}}
{{--										<input type="radio" style="display: none;" name="options" id="option2" autocomplete="off"> Post-Graduate--}}
{{--									</label>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<!--<div class="form-group row">--}}
{{--                            <label for="dtime" class="col-12 col-sm-2 col-form-label">Date and Time</label>--}}
{{--                            <div class="col-12 col-sm-4">--}}
{{--                                <input type="dtime" class="form-control" id="dtime" name="dtime" placeholder="Date">--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-sm-4">--}}
{{--                                <input type="dtime" class="form-control" id="dtime" name="dtime" placeholder="Time">--}}
{{--                            </div>--}}
{{--                        </div>-->--}}
{{--						<div class="form-group row">--}}
{{--							<div class="offset-sm-2 col-md-10">--}}
{{--								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>--}}
{{--								<button type="submit" class="btn btn-primary">Reserve</button>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</form>--}}
{{--				</div>--}}

{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}

	<!-- Jumbotron -->
	<header class="jumbotron">
		<div class="container">
			<div class="row row-header">
				<div class="col-12 col-sm-6">
				<h1 style="color: #f9f5fa"><i>UniVerse</i></h1>
				<p>We take inspiration from the World's best hotel searching app Trivago, and try to search best collage available for you across the sea</p>
			</div>

				<div class="col-12 col-sm align-self-center">
					<!-- <a type="button" class="btn btn-warning btn-sm btn-block" role="button" id="reserveButton" title="Or Call us at +852 12345678">Reserve a Table</a> -->
				</div>
				<div class="col-12 col-sm align-self-center">
{{--					<img src="img/logo.png" class="img-fluid">--}}
				</div>
			</div>
		</div>
	</header>

	<div class="container">

		<!-- Breadcrumb -->
		<div class="row">
			<ol class="col-12 breadcrumb">
				<li class="breadcrumb-item"><a href="/home">Home</a></li>
				<li class="breadcrumb-item active">Contact Us</li>
			</ol>
			<div class="col-12">
				<h3>Contact Us</h3>
				<hr>
			</div>
		</div>

		<!-- Location Information -->
		<div class="row row-content">
			<div class="col-12">
				<h3>Location Information</h3>
			</div>
			<div class="col-12 col-sm-4 offset-sm-1">
				<h5>Our Address</h5>
				<address style="font-size: 100%">
					123, ...<br>
					..., ...<br>
					India<br>
					<i class="fa fa-phone"></i>: +91----------<br>
					<i class="fa fa-fax"></i>: +91----------<br>
					<i class="fa fa-envelope"></i>: <a href="mailto:18bce093@nirmauni.ac.in">UniVerse@help.in</a>
				</address>
			</div>
			<div class="col-12 col-sm-6 offset-sm-1">
				<h5>Map of our Location</h5>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14676.578761240757!2d72.53609602928593!3d23.128385958391544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e832f45125167%3A0x876cb1cb23c25bdb!2sNirma%20University!5e0!3m2!1sen!2sin!4v1631431337924!5m2!1sen!2sin" width="100%" height="100%" style="border: thick;" allowfullscreen="" loading="lazy"></iframe>

			</div>
			<div class="col-12 col-sm-11 offset-sm-1">
				<div class="btn-group" role="group">
					<a role="button" class="btn btn-primary" href="tel:"><i class="fa fa-phone"></i> Call</a>
					<a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
					<a role="button" class="btn btn-success" href="mailto:18bce093@nirmauni.ac.in"><i class="fa fa-envelope-o"></i> Email</a>
				</div>
			</div>
		</div>

		<!-- Feedback -->
		<div class="row row-content">
			<div class="col-12">
			<h3>Send us your Feedback</h3>
			</div>
			<div class="col-12 col-md-9">
				<form>
					<div class="form-group row">
						<label for="firstname" class="col-md-2 col-form-label">First Name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
						</div>
					</div>
					<div class="form-group row">
						<label for="lastname" class="col-md-2 col-form-label">Last Name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
						</div>
					</div>
					<div class="form-group row">
						<label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
						<div class="col-5 col-sm-4 col-md-3">
							<div class="input-group">
								<div class="input-group-addon">(</div>
								<input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area code">
								<div class="input-group-addon">)</div>
							</div>
						</div>
						<div class="col-7 col-sm-6 col-md-7">
							<input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number">
						</div>
					</div>
					<div class="form-group row">
						<label for="emailid" class="col-md-2 col-form-label">Email</label>
						<div class="col-md-10">
							<input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<div class="form-check col-md-6 offset-md-2">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="approve" value="">
								<strong>May we contact you?</strong>
							</label>
						</div>
						<div class="col-md-3 offset-md-1">
							<select class="form-control">
								<option>Tel.</option>
								<option>Email</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
						<div class="col-md-10">
							<textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-md-2 col-md-10">
							<button type="submit" class="btn btn-primary">Send Feedback</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-12 col-md">
			</div>
		</div>

	</div>

{{--	<footer class="footer">--}}
{{--		<div class="container">--}}
{{--			<div class="row">--}}
{{--				<div class="col-5 offset-1 col-sm-2">--}}
{{--					<h5>Links</h5>--}}
{{--					<ul class="list-unstyled">--}}
{{--						<li><a href="/home">Home</a></li>--}}
{{--						<li><a href=/aboutus">About</a></li>--}}
{{--						<li><a href="#">Menu</a></li>--}}
{{--						<li><a href="#">Contact</a></li>--}}
{{--					</ul>--}}
{{--				</div>--}}
{{--				<div class="col-6 col-sm-5">--}}

{{--				</div>--}}
{{--				<div class="col-sm align-self-center">--}}
{{--					<div style="text-align:center">--}}
{{--						<a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>--}}
{{--						<a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>--}}
{{--						<a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>--}}
{{--						<a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>--}}
{{--						<a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>--}}
{{--						<a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--			<div class="row justify-content-center">--}}
{{--				<div class="col-auto">--}}
{{--					<p>This is just sample</p>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</footer>--}}

	<!-- build:js js/main.js -->
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/tether/dist/js/tether.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- endbuild -->

@endsection
