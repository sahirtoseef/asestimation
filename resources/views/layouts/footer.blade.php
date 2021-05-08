
<!-- Footer Area -->
<footer class="footer_area">
    <div class="container">
	<div class="footer_row row col-md-offset-3">
	    <div class="col-md-4 col-sm-6 footer_about">
		<h2>ABOUT OUR COMPANY</h2>
		<img src="{{asset('assets/images/footer-logo.png')}}" alt="">
		<p>Our trustworthiness, our considerable knowledge and our reliability will be with you at all the time</p>
		<ul class="socail_icon">
		    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		</ul>
	    </div>
	    <!--                <div class="col-md-3 col-sm-6 footer_about">
				<h2>Twitter Feed</h2>
				<a href="#" class="twitter">@colorlib: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</a>
				<a href="#" class="twitter">@colorlib: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</a>
			    </div>-->
	    <div class="col-md-4 col-sm-6 footer_about">
		<h2>CONTACT US</h2>
		<address>
		    <p>Hoping to listen from you:</p>
		    <ul class="my_address">
			<li><a href="email:asestimator786@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>asestimator786@gmail.com</a></li>
			<li><a href="tel:+923084607502"><i class="fa fa-whatsapp" aria-hidden="true"></i>+92-308-4607502</a></li>
			<!--<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Sector # 10, Road # 05, Plot # 31, Uttara, Dhaka 1230 </span></a></li>-->
		    </ul>
		</address>
	    </div>
	</div>
    </div>
    <!--        <div class="copyright_area">
		Copyright 2020 All rights reserved. Designed by <a href="https://colorlib.com">Colorlib.</a>
	    </div>-->
</footer>
<!-- End Footer Area -->

<!-- jQuery JS -->
<script src="{{asset('assets/js/jquery-1.12.0.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Animate JS -->
<script src="{{asset('assets/vendors/animate/wow.min.js')}}"></script>
<!-- Camera Slider -->
<script src="{{asset('assets/vendors/camera-slider/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/vendors/camera-slider/camera.min.js')}}"></script>
<!-- Isotope JS -->
<script src="{{asset('assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendors/isotope/isotope.pkgd.min.js')}}"></script>
<!-- Progress JS -->
<script src="{{asset('assets/vendors/Counter-Up/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/vendors/Counter-Up/waypoints.min.js')}}"></script>
<!-- Owlcarousel JS -->
<script src="{{asset('assets/vendors/owl_carousel/owl.carousel.min.js')}}"></script>
<!-- Stellar JS -->
<script src="{{asset('assets/vendors/stellar/jquery.stellar.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('assets/js/theme.js')}}"></script>

<script>
var modal = $( "#myModal" );
var image_src = $( ".cns-img" ).attr( "src" );
$( ".cns-img" ).on( "click", function () {
    var imgSrc = $( this ).find( "img" ).attr( "src" );
    modal.find( '.modal-content' ).attr( "src", imgSrc );
    modal.show();

} );

modal.find( ".close" ).on( "click", function () {
    modal.hide();
} );

</script>
</body>
</html>
