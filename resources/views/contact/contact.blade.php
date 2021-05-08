@include('layouts.master')
<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Contact Us</h2>
    <ol class="breadcrumb">
	<li><a href="index.html">Home</a></li>
	<li><a href="#" class="active">Contact Us</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- Map -->
<div class="contact_map">
    <iframe width="1080" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=model%20town&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
<!-- End Map -->

<!-- All contact Info -->
<section class="all_contact_info">
    <div class="container">
	<div class="row contact_row">
	    <div class="col-sm-6 contact_info">
		<h2>Get In Touch</h2>
		<div class="location">
		    <div class="col-md-8">
			<i class="fa fa-whatsapp" aria-hidden="true" style="float: left;margin-right: 15px;font-size: 32px;"></i>
			<a href="javascript:void(0);" style="font-size: 20px;font-weight: 600;padding: 4px;">Contact</a>
			<a href="tel:+923084607502" style="margin-left: 28px;padding: 10px;font-size: 20px;font-weight: 400;">+92-308-4607502</a>
		    </div>
		</div>
		<div class="location">
		    <div class="col-md-8">
			<i class="fa fa-envelope" aria-hidden="true" style="float: left;margin-right: 15px;font-size: 30px;"></i>
			<a href="javascript:void(0);" style="font-size: 20px;font-weight: 600;padding: 4px;">Email</a>
			<a href="javascript:void(0);" style="margin-left: 28px;padding: 10px;font-size: 20px;font-weight: 400;">asestimator786@gmail.com</a>
		    </div>
		</div>
	    </div>
	    <div class="col-sm-6 contact_info send_message">
		<h2>Send an online enquiry</h2>
		<form class="form-inline contact_box">
		    <div class="col-md-6">
			<input type="text" class="form-control input_box" placeholder="Name">
		    </div>
		    <div class="col-md-6">
			<input type="text" class="form-control input_box" placeholder="Company">
		    </div>
		    <div class="col-md-6">
			<input type="email" class="form-control input_box" placeholder="Email">
		    </div>
		    <div class="col-md-6">
			<input type="email" class="form-control input_box" placeholder="Telephone">
		    </div>
		    <div class="col-md-12">
			<input type="text" class="form-control input_box" placeholder="Project Type">
		    </div>
		    <div class="col-md-12">
			<textarea class="form-control input_box" placeholder="Message"></textarea>
		    </div>
		    <div class="col-md-12">
			<button type="submit" class="btn btn-default">Submit Enquiry</button>
		    </div>
		</form>
	    </div>
	</div>
    </div>
</section>
<!-- End All contact Info -->
@include('layouts.footer')
