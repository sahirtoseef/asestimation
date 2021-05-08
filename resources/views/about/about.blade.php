@include('layouts.master')
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>About Us</h2>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route("about-us")}}" class="active">About Us</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- About Us Area -->
    <section class="about_us_area about_us_2 row">
        <div class="container">
            <div class="row about_row about_us2_pages">
                <div class="who_we_area col-md-7 col-md-offset-2">
                    <div class="subtittle">
                        <h2>WHO WE ARE</h2>
                    </div>
                    <p>We are a team of professional quantity surveyors and specialize in preparing quantities take-off. Our team is an expert in the quantity takeoff of plumbing, electrical, roofing, interior, exterior elevation, and full houses trade. We also provide different construction material break down takeoff to material suppliers. We are committed to our client's satisfaction with an 80% returning client ratio. Moreover, We have enabled our clients to bid more projects with an accuracy ratio of 98 to 100% in a short period. Our mission is to develop and maintain a long term successful business relationship with our clients by providing them satisfaction in regards to turnaround time, Price and most importantly reliable Accuracy.</p>
                    <a href="#" class="button_all">Contact Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->

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
                            <p>Our In-house engineers and support staff are all and qualified & experienced</p>
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
@include('layouts.footer')