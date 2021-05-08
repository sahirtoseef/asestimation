@include('layouts.master')
    <!-- Slider area -->
    <section class="slider_area row m0">
        <div class="slider_inner">
            <div data-thumb="{{asset('assets/web/home1.jpg')}}" data-src="{{asset('assets/web/home1.jpg')}}">
                <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">Welcome, In</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">Contact us for free quote</h3>
                        <!--<p class=" wow fadeInUp animated" data-wow-delay="1s">Contact us for free quote</p>-->
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="contact-us">Contact us</a>
                   </div>
                </div>
            </div>
            <div data-thumb="{{asset('assets/web/s1.jpg')}}" data-src="{{asset('assets/web/s1.jpg')}}" style="width: 100%;height: auto;">
                <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">Welcome, In</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">Contact us for free quote</h3>
                        <!--<h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">AS Estimation</h3>-->
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="contact-us">Contact us</a>
                   </div>
                </div>
            </div>
            <div data-thumb="{{asset('assets/web/s2.jpg')}}" data-src="{{asset('assets/web/s2.jpg')}}" style="width: 100%;height: auto;">
                <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">Welcome, In</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">Contact us for free quote</h3>
                        <!--<p class=" wow fadeInUp animated" data-wow-delay="1s">AS Estimation</p>-->
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="contact-us">Contact us</a>
                   </div>
                </div>
            </div>
            <div data-thumb="{{asset('assets/web/s4.jpg')}}" data-src="{{asset('assets/web/s4.jpg')}}" style="width: 100%;height: auto;">
                <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">Welcome, In</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">Contact us for free quote</h3>
                        <!--<p class=" wow fadeInUp animated" data-wow-delay="1s"> AS Estimation</p>-->
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="contact-us">Contact us</a>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider area -->

    <!-- Professional Builde -->
    <section class="professional_builder row">
        <div class="container">
           <div class="row builder_all col-md-offset-1">
                <div class="col-md-2 col-sm-6 builder">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4>Professional Build</h4>
                    <p>We provide the best work & trusted Source </p>
                </div>
                <div class="col-md-2 col-sm-6 builder">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <h4>Deliver Quality</h4>
                    <p>We deliver accurate & quality take-offs</p>
                </div>
                <div class="col-md-2 col-sm-6 builder">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <h4>Always On Time</h4>
                    <p>We provide quick services without any delay, enabling you to timely prepare the bid</p>
                </div>
                <div class="col-md-2 col-sm-6 builder">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <h4>We Are Passionate</h4>
                    <p>Our team is passionate to provide the best services for the client’s satisfaction</p>
                </div>
                <div class="col-md-2 col-sm-6 builder">
                    <i class="fa fa-retweet" aria-hidden="true"></i>
                    <h4>Unlimited Revisions</h4>
                    <p>We provide unlimited revisions if there is an addendum for drawings</p>
                </div>
           </div>
        </div>
    </section>
    <!-- End Professional Builde -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>ABOUT US</h2>
                <!--<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>-->
            </div>
            <div class="row about_row">
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                        <h2>WHO WE ARE</h2>
                    </div>
                    <p>We are a team of professional quantity surveyors and specialize in preparing quantities take-off. Our team is expert in the quantity take-off of plumbing, electrical, roofing, interior, exterior elevation, and full houses trade. We also provide different construction material break down take-off to material suppliers. We are committed to our client's satisfaction with an 80% returning client ratio. Moreover, We have enabled our clients to bid more projects with an accuracy ratio of 95% in a short period. Our mission is to develop and maintain a long term successful business relationship with our clients by providing them satisfaction in regards to turnaround time, price and most importantly reliable accuracy.</p>
                    <a href="{{route('contact-us')}}" class="button_all">Contact Now</a>
                </div>
                <div class="col-md-4 col-sm-6 col-md-offset-1 about_client">
                    <img src="{{asset('assets/web/about-us.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
    <!-- What ew offer Area -->
    <section class="what_we_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>WHAT WE OFFER</h2>
                <h2 class="offer-types">We offer mainly following types of take-off: 
                <div class="col-md-12 offer-types-inner">
                    <p class="col-md-4 text-left areal-take-off">Areal Take-off</p> 
                    <p class="col-md-4 text-center areal-take-off">Assembly Take-off </p> 
                    <p class="col-md-4 text-right areal-take-off">Detailed Break-Down Take-off</p>
                </div>
                    </h2>
            </div>
            <div class="row construction_iner">
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{asset('assets/images/offer.jpg')}}" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="{{route('earthwork')}}">Earthwork/Sitework</a>
                        <!--<p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>-->
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{asset('assets/images/offer1.jpeg')}}" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="{{route('full-material-takeoff')}}">Full Material Take-off</a>
                        <!--<p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>-->
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{asset('assets/images/offer-2.jpg')}}" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">Finishes</a>
                        <!--<p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>-->
                   </div>
                </div>
            </div>
            <div class="row construction_iner">
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{asset('assets/images/offer-3.jpg')}}" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">Drywall</a>
                        <!--<p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>-->
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{asset('assets/images/offer-4.png')}}" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">Paint</a>
                        <!--<p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>-->
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{asset('assets/images/offer-5.webp')}}" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">Structural Concrete</a>
                        <!--<p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>-->
                   </div>
                </div>
            </div>
            <div class="row construction_iner">
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{asset('assets/images/offer-5.jpg')}}" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">Mechanical</a>
                        <!--<p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>-->
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{asset('assets/images/offer-7.jpg')}}" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">Electrical</a>
                        <!--<p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>-->
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{asset('assets/images/offer-8.jpg')}}" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">Plumbing</a>
                        <!--<p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>-->
                   </div>
                </div>
            </div>
            <div class="row construction_iner">
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{asset('assets/images/offer-9.jpg')}}" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">Landscaping</a>
                        <!--<p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>-->
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{asset('assets/images/offer-10.jpg')}}" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">Bridge Concrete & Rebars</a>
                        <!--<p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>-->
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="{{asset('assets/images/offer-11.jpg')}}" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">Pricing</a>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End What ew offer Area -->

    <!-- Our Features Area -->
    <section class="our_feature_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Features</h2>
                <h4>Providing Professional & Personalized services that geared towards helping you to achieve what you want</h4>
            </div>
            <div class="feature_row row">
                <div class="col-md-6 feature_img">
                    <img src="{{asset('assets/web/about1.jpg')}}" alt="">
                </div>
                <div class="col-md-6 feature_content">
                    <div class="subtittle">
                        <h2>WHY CHOOSE US</h2>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="javascript:void(0);">
                                <i class="fa fa-low-vision" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="javascript:void(0);">VISION</a>
                            <p>Our Vision & mission is to provide high quality estimation that satisfy project challenges.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="javascriptvoid(0);">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="javascript:void(0);">VALUES</a>
                            <p>We value taking responsibility that give us a determination to leave things better than we found them. </p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="javascript:void(0);">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="javascript:void(0);">Qualified Professionals</a>
                            <p>Our In-house engineers and support "staff are qualified & experienced"</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="javascript:void(0);">
                                <i class="fa fa-dollar" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="javascript:void(0);">Cost Effective</a>
                            <p>We strive to deliver the highest quality at the lowest prices</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="javascript:void(0);">
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="javascript:void(0);">Strong Communication</a>
                            <p>Our Technical support team is responsive and personable to keep you informed about project progress.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="javascript:void(0);">
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="javascript:void(0);">Terms of Payment</a>
                            <p>Pay us the full amount when you feel 110% satisfied with the project results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Features Area -->
    <!-- Our Featured Works Area -->
    <section class="featured_works row" data-stellar-background-ratio="0.3">
        <div class="tittle wow fadeInUp">
            <h2>Estimation Process</h2>
        </div>
        <div class="featured_gallery">
            <div class="col-md-3 col-sm-4 col-xs-6">
                <img src="{{asset('assets/web/Project.jfif')}}" alt="">
                <div>
                    <p style="color: #FFF;margin-top: 30px;font-size: 15px;font-weight: 500;">Our client sends us the plans with all the related details of their tasks in PDF format by means of email through connections or dropbox Links.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner">
                <img src="{{asset('assets/web/Reviewing.jpg')}}" alt="">
                <div>
                    <p style="color: #FFF;margin-top: 30px;font-size: 15px;font-weight: 500;">After receiving plans, we send it to our estimation department, where they review the drawings and specs thoroughly.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner">
                <img src="{{asset('assets/web/Quoting.png')}}" alt="">
                <div style="color: #FFF;margin-top: 30px;font-size: 15px;font-weight: 500;">
                    <p style="color: #FFF;margin-top: 30px;">After reviewing the plans and specs we quote the charges and turnaround time.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner">
                <img src="{{asset('assets/web/Estimating.jfif')}}" alt="">
                <div style="color: #FFF;margin-top: 30px;font-size: 15px;font-weight: 500;">
                    <p style="color: #FFF;margin-top: 30px;">After having go ahead from the client, we start working on the project and get back on the due date with completed project.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Estimation Proccess Area -->
    <section class="our_achievments_area" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Achievments</h2>
<!--                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>-->
            </div>
            <div class="achievments_row row">
                <div class="col-md-4 col-sm-6 p0 completed">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="counter">1456</span>
                    <h6>Full Trade Project</h6>
                </div>
                <div class="col-md-4 col-sm-6 p0 completed">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="counter">1129</span>
                    <h6>HOUSE RENOVATIONS project</h6>
                </div>
                <div class="col-md-4 col-sm-6 p0 completed">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="counter">2178</span>
                    <h6>small trade project</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End Estimation Proccess Area -->

    <!-- Our Featured Works Area -->
    <section class="featured_works row" data-stellar-background-ratio="0.3">
        <div class="tittle wow fadeInUp">
            <h2>Our Featured Works</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class="featured_gallery">
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="{{asset('assets/web/4.PNG')}}" alt="">
                <div class="gallery_hover">
                    <h4>As Estimation</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="{{asset('assets/web/6.PNG')}}" alt="">
                <div class="gallery_hover">
                    <h4>As Estimation</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="{{asset('assets/web/12.PNG')}}" alt="">
                <div class="gallery_hover">
                    <h4>As Estimation</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="{{asset('assets/web/13.PNG')}}" alt="">
                <div class="gallery_hover">
                    <h4>As Estimation</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="{{asset('assets/web/14.PNG')}}" alt="">
                <div class="gallery_hover">
                    <h4>As Estimation</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="{{asset('assets/web/11.png')}}" alt="">
                <div class="gallery_hover">
                    <h4>As Estimation</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="{{asset('assets/web/ggg.PNG')}}" alt="">
                <div class="gallery_hover">
                    <h4>As Estimation</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="{{asset('assets/web/ghfggdgf.PNG')}}" alt="">
                <div class="gallery_hover">
                    <h4>As Estimation</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Featured Works Area -->

    <!-- End Our Partners Area -->
@include('layouts.footer')
