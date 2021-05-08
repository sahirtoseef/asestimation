@include('layouts.master')
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Terms & Conditions</h2>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route("terms")}}" class="active">Terms & Conditions</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Our Features Area -->
    <section class="our_feature_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Terms & Conditions</h2>
                <h4>Providing Professional & Personalized services that geared towards helping you to achieve what you want</h4>
            </div>
            <div class="feature_row row">
                <div class="col-md-6 feature_img">
                    <img src="{{asset('assets/web/about1.jpg')}}" alt="">
                </div>
                <div class="col-md-6 feature_content">
                    <div class="media">
                        <div class="media-left">
                            <a href="javascript:void(0);">
                                <i class="fa fa-vcard" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="javascript:void(0);">Services</a>
                            <p>The estimate will be based on information provided from the blueprints, specifications & scope defined by client.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="javascriptvoid(0);">
                                <i class="fa fa-server" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="javascript:void(0);">Schedule</a>
                            <p>The services will be completed and delivered in accordance with the schedule in estimate, or as decided by the client.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="javascript:void(0);">
                                <i class="fa fa-chain" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="javascript:void(0);">Changes</a>
                            <p>Any additional scope of work requested after the first price quotation in the estimate will incur additional charges according to the extension of work.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="javascript:void(0);">
                                <i class="fa fa-dollar" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="javascript:void(0);">Payment</a>
                            <p>Unless explicitly agreed prior to commencement of work, payment will be due and demanded upon completion & delivery of the estimate. </p>
                            <p>All invoices for services covered by the estimate are payable within ten days after invoice date.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="javascript:void(0);">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="javascript:void(0);">Estimate</a>
                            <p>Before each project, we will provide a quote so that you know exactly how much the work will cost. The total price of your project will also include:</p>
                            <p>A free quote</p>
                            <p>Minor revision in the estimate if necessary</p>
                            <p>Any minor amendments to your project</p>
                            <p>Advice and consultation by email or call as necessary</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Features Area -->
@include('layouts.footer')