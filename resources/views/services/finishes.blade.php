@include('layouts.master')
<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Finishes</h2>
    <ol class="breadcrumb">
	<li><a href="{{route('home')}}">Home</a></li>
	<li><a href="{{route('finishes')}}" class="active">Finishes</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- Building Construction Area -->
<section class="building_construction_area">
    <div class="container">
	<div class="row building_construction_row">
	    <div class="col-sm-8 constructing_laft">
		<h2>Constructing</h2>
		<img src="{{asset('assets/web/4.PNG')}}" alt="">
		<a href="#">Building Construction</a>
		<p>Finishes & facade work include complete drywall and floor covering likewise: </p>
		<div class="col-md-6 ipsum">
		    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo-do consequat.</p>-->
		    <ul class="excavator">
			<li><i class="fa fa-chevron-circle-right"></i>Wall Covering</li>
			<li><i class="fa fa-chevron-circle-right"></i>Wallpaper</li>
			<li><i class="fa fa-chevron-circle-right"></i>Vinyl Covering</li>
			<li><i class="fa fa-chevron-circle-right"></i>Skirting/ Base</li>
			<li><i class="fa fa-chevron-circle-right"></i>Floor Covering (Tiles Or Carpet Covering Etc.)</li>
			<li><i class="fa fa-chevron-circle-right"></i>Cornice/ Crown Molding</li>
			<li><i class="fa fa-chevron-circle-right"></i>Ceiling Finishes</li>
			<li><i class="fa fa-chevron-circle-right"></i>Trims</li>
			<li><i class="fa fa-chevron-circle-right"></i>Fascia & Gutter</li>
			<li><i class="fa fa-chevron-circle-right"></i>Fascia Board</li>
			<li><i class="fa fa-chevron-circle-right"></i>Roof Covering With Insulation And Under Coverings</li>
			<li><i class="fa fa-chevron-circle-right"></i>Ridges And Hip </li>
			<li><i class="fa fa-chevron-circle-right"></i>Downspout Etc.</li>
		    </ul>
		</div>
		<div class="col-md-6 ipsum_img"><img src="{{asset('assets/images/finishes.jpg')}}" alt=""></div>
	    </div>
	    <div class="col-sm-4 constructing_right">
		<h2>Quick Links</h2>
		<ul class="painting">
		    <li>
			<a href="{{route('full-material-takeoff')}}">
			    <i class="fa fa-home" aria-hidden="true"></i>
			    FULL MATERIAL TAKE-OFF
			</a>
		    </li>
		    <li>
			<a href="{{route('finishes')}}" style="color: #f6b60b">
			    <i class="fa fa-home" aria-hidden="true"></i>
			    FINISHES
			</a>
		    </li>
		    <li>
			<a href="{{route('drywall')}}">
			    <i class="fa fa-home" aria-hidden="true"></i>
			    DRYWALLS
			</a>
		    </li>
		    <li>
			<a href="{{route('mechanical')}}">
			    <i class="fa fa-home" aria-hidden="true"></i>
			    MECHANICAL
			</a>
		    </li>
		    <li>
			<a href="{{route('electrical')}}">
			    <i class="fa fa-home" aria-hidden="true"></i>
			    ELECTRICAL
			</a>
		    </li>
		    <li>
			<a href="{{route('plumbing')}}">
			    <i class="fa fa-home" aria-hidden="true"></i>
			    PLUMBING
			</a>
		    </li>
		    <li>
			<a href="{{route('landscaping')}}">
			    <i class="fa fa-home" aria-hidden="true"></i>
			    LANDSCAPING
			</a>
		    </li>
		    <li>
			<a href="{{route('bridge')}}">
			    <i class="fa fa-home" aria-hidden="true"></i>
			    BRIDGE
			</a>
		    </li>
		    <li>
			<a href="{{route('pricing')}}">
			    <i class="fa fa-home" aria-hidden="true"></i>
			    PRICING
			</a>
		    </li>
		</ul>
	    </div>
	</div>
    </div>
</section>
<!-- End Building Construction Area -->

@include('layouts.footer')