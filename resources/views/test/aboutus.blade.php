@extends('layouts.app')

@section('content')

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!---->

<!---->
<!--<body>-->
	<!-- Navigation bar -->
{{--	<nav class="navbar navbar-dark navbar-expand-sm fixed-top">--}}
{{--		<div class="container">--}}
{{--			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">--}}
{{--				<span class="navbar-toggler-icon"></span>--}}
{{--			</button>--}}
{{--			<a class="navbar-brand mr-auto" href="./index"><img src="img/logo.png" height="30" width="41"></a>--}}
{{--			<div class="collapse navbar-collapse" id="Navbar">--}}
{{--				<ul class="navbar-nav mr-auto">--}}
{{--					<li class="nav-item"><a class="nav-link" href="/home"><span class="fa fa-home fa-lg"></span> Home</a></li>--}}
{{--					<li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-info fa-lg"></span> About</a></li>--}}
{{--					<li class="nav-item"><a class="nav-link" href="/contactus"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>--}}
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
				<div class="col-12 col-sm-8">
					<h1><i>UniVerse</i></h1>
					<p>We take inspiration from the World's best hotel searching app Trivago, and try to search best collage available for you across the sea</p>
				</div>
				<div class="col col-sm align-self-center">
					<img src="" class="img-fluid">
				</div>
			</div>
		</div>
	</header>


	<div class="container">

		<!-- Breadcrumb -->
		<div class="row">
			<ol class="col-12 breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active">About Us</li>
			</ol>
			<div class="col-12">
				<h3>About Us</h3>
				<hr>
			</div>
		</div>

		<div class="row row-content">

			<!-- Our History -->
			<div class="col-12 col-sm-6">
				<h2>Our History</h2>
				<p>Started in 2021, ..........................................</p>
				<p>.................</p>
			</div>

			<!-- Facts at a Glance -->
			<div class="col-12 col-sm-6">
				<div class="card">
					<h3 class="card-header bg-primary text-white">Quick view</h3>
					<div class="card-block">
						<dl class="row">
							<dt class="col-6">Founding members</dt>
							<dd class="col-6">18BCE093, 18BCE099</dd>
							<dt class="col-6">Faculty Advisor</dt>
							<dd class="col-6">Anuja Nair</dd>
							<dt class="col-6">++++++</dt>
							<dd class="col-6">------</dd>
							<dt class="col-6">++++++</dt>
							<dd class="col-6">------</dd>
						</dl>
					</div>
				</div>
			</div>

			<!-- Blockquote -->
			<div class="col-12">
				<div class="card card-block bg-faded">
					<blockquote class="blockquote">
						<p class="mb-0">A place where you will find your future</p>
						<footer class="blockquote-footer">
							Anonymous,
						</footer>
					</blockquote>
				</div>
			</div>

		</div>

		<!-- Corporate Leadership -->
		<!-- Corporate Leadership <div class="row row-content">
			<div class="col">
				<h2>Corporate Leadership</h2>
				<div id="accordion" role="tablist">
					<div class="card">
						<div class="card-header" role="tab" id="peterhead">
							<h3 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#peter">
									Peter Pan <small>Chief Epicurious Officer</small>
								</a>
							</h3>
						</div>
						<div role="tabpanel" class="collapse show" id="peter">
							<div class="card-block">
								<p class="hidden-xs-down">
									Our CEO, Peter, credits his hardworking East Asian immigrant parents who undertook the arduous journey to the shores of America with the intention of giving their children the best future. His mother's wizardy in the kitchen whipping up the tastiest dishes with whatever is available inexpensively at the supermarket, was his first inspiration to create the fusion cuisines for which <em>The Frying Pan</em> became well known. He brings his zeal for fusion cuisines to this restaurant, pioneering cross-cultural culinary connections.
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="dhanasekaranhead">
							<h3 class="mb-0">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#dhanasekaran">
									Dhanasekaran Witherspoon <small>Chief Food Officer</small>
								</a>
							</h3>
						</div>
						<div role="tabpanel" class="collapse" id="dhanasekaran">
							<div class="card-block">
								<p class="hidden-xs-down">
									Our CFO, Danny, as he is affectionately referred to by his colleagues, comes from a long established family tradition in farming and produce. His experiences growing up on a farm in the Australian outback gave him great appreciation for varieties of food sources. As he puts it in his own words, <em>Everything that runs, wins, and everything that stays, pays!</em>
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="agumbehead">
							<h3 class="mb-0">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#agumbe">
									Agumbe Tang <small>Chief Taste Officer</small>
								</a>
							</h3>
						</div>
						<div role="tabpanel" class="collapse" id="agumbe">
							<div class="card-block">
								<p class="hidden-xs-down">
									Blessed with the most discerning gustatory sense, Agumbe, our CTO, personally ensures that every dish that we serve meets his exacting tastes. Our chefs dread the tongue lashing that ensues if their dish does not meet his exacting standards. He lives by his motto, <em>You click only if you survive my lick.</em>
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="albertohead">
							<h3 class="mb-0">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#alberto">
									Alberto Somayya <small>Executive Chef</small>
								</a>
							</h3>
						</div>
						<div role="tabpanel" class="collapse" id="alberto">
							<div class="card-block">
								<p class="hidden-xs-down">
									Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. He says, <em>Put together the cuisines from the two craziest cultures, and you get a winning hit! Amma Mia!</em>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row row-content">
			<div class="col-12 col-sm-9">
				<h2>Facts &amp; Figures</h2>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead class="thead-inverse">
							<tr>
								<th>&nbsp;</th>
								<th>2013</th>
								<th>2014</th>
								<th>2015</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Employees</th>
								<td>15</td>
								<td>30</td>
								<td>40</td>
							</tr>
							<tr>
								<th>Guests Served</th>
								<td>15000</td>
								<td>45000</td>
								<td>100,000</td>
							</tr>
							<tr>
								<th>Special Events</th>
								<td>3</td>
								<td>20</td>
								<td>45</td>
							</tr>
							<tr>
								<th>Annual Turnover</th>
								<td>$251,325</td>
								<td>$1,250,375</td>
								<td>~$3,000,000</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-12 col-sm-3">
			</div>
		</div> -->

	</div>

{{--	<footer class="footer">--}}
{{--		<div class="container">--}}
{{--			<div class="row">--}}
{{--				<div class="col-5 offset-1 col-sm-2">--}}
{{--					<h5>Links</h5>--}}
{{--					<ul class="list-unstyled">--}}
{{--						<li><a href="index.php">Home</a></li>--}}
{{--						<li><a href="#">About</a></li>--}}
{{--						<li><a href="#">Menu</a></li>--}}
{{--						<li><a href="contactus.php">Contact</a></li>--}}
{{--					</ul>--}}
{{--				</div>--}}

{{--				<div class="col-6 col-sm-5"></div>--}}
{{--				<div class="col-sm align-self-center">--}}
{{--					<div style="text-align:center">--}}
{{--						<a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>--}}
{{--						<a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>--}}
{{--						<a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>--}}
{{--						<a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>--}}
{{--						<a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>--}}
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
	<script src="../../../node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/tether/dist/js/tether.min.js"></script>
	<script src="../../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- endbuild -->
<!--</body>-->
<!---->
<!--</html>-->

@endsection
