@include('layouts.master')
<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Landscaping</h2>
    <ol class="breadcrumb">
	<li><a href="{{route('home')}}">Home</a></li>
	<li><a href="{{route('landscaping')}}" class="active">Landscaping</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- Building Construction Area -->
<section class="building_construction_area">
    <div class="container">
	<div class="row building_construction_row">
	    <div class="col-sm-8 constructing_laft">
		<h2>Constructing</h2>
		<img src="{{asset('assets/web/ghfggdgf.PNG')}}" alt="">
		<a href="#">Building Construction</a>
		<p>We cover generally following line items in landscaping scope:</p>
		<div class="col-md-6 ipsum">
		    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo-do consequat.</p>-->
		    <ul class="excavator">
			<li><i class="fa fa-chevron-circle-right"></i>Trees W/. Complete Specs</li>
			<li><i class="fa fa-chevron-circle-right"></i>Planting</li>
			<li><i class="fa fa-chevron-circle-right"></i>Grass</li>
			<li><i class="fa fa-chevron-circle-right"></i>Fencing</li>
			<li><i class="fa fa-chevron-circle-right"></i>Earth Work etc</li>
		    </ul>
		</div>
		<div class="col-md-6 ipsum_img"><img src="{{asset('assets/images/offer-9.jpg')}}" alt=""></div>
		<div class="col-md-12 p0 doc-sec">
		    <p>Sample Excel Sheet & Markups</p>
		    <a class="col-md-2" href="{{asset('assets/documents/landscaping/Takeoff-Landscaping.xlsx')}}" download>
			<img src="{{asset('assets/documents/xls.png')}}">
		    </a>
		    <a class="col-md-2" href="{{asset('assets/documents/landscaping/landscaping.pdf')}}" target="_blank">
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
			<a href="{{route('plumbing')}}">
			    <i class="fa fa-home" aria-hidden="true"></i>
			    PLUMBING
			</a>
		    </li>
		    <li>
			<a href="{{route('landscaping')}}" style="color: #f6b60b">
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