@include('layouts.master')
<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Plumbing</h2>
    <ol class="breadcrumb">
	<li><a href="{{route('home')}}">Home</a></li>
	<li><a href="{{route('plumbing')}}" class="active">Plumbing</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- Building Construction Area -->
<section class="building_construction_area">
    <div class="container">
	<div class="row building_construction_row">
	    <div class="col-sm-8 constructing_laft">
		<h2>Constructing</h2>
		<img src="{{asset('assets/web/plumbing-1.jpg')}}" alt="">
		<a href="#">Building Construction</a>
		<p>We generally cover the following line items in Electrical take-off:</p>
		<div class="col-md-6 ipsum">
		    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo-do consequat.</p>-->
		    <ul class="excavator">
			<li><i class="fa fa-chevron-circle-right"></i>LED Lighting & Fixtures</li>
			<li><i class="fa fa-chevron-circle-right"></i>Power</li>
			<li><i class="fa fa-chevron-circle-right"></i>Fire Accessories</li>
		    </ul>
		</div>
		<div class="col-md-6 ipsum_img"><img src="{{asset('assets/images/offer-7.jpg')}}" alt=""></div>
		<div class="col-md-12 p0 doc-sec">
		    <p>Sample Excel Sheet & Markups</p>
		    <a class="col-md-2" href="{{asset('assets/documents/electrical/Takeoff-Electrical.xlsx')}}" download>
			<img src="{{asset('assets/documents/xls.png')}}">
		    </a>
		    <a class="col-md-2" href="{{asset('assets/documents/electrical/electrical.pdf')}}" target="_blank">
			<img src="{{asset('assets/documents/pdf.png')}}">
		    </a>
		</div>
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
			<a href="{{route('finishes')}}">
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
			<a href="{{route('plumbing')}}" style="color: #f6b60b">
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