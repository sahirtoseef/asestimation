@include('layouts.master')
<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Portfolio</h2>
    <ol class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('portfolio')}}" class="active">Portfolio</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- blog-2 area -->
<section class="blog_tow_area portfolio">
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
    <div class="container" style="background-image: url('assets/web/home1.jpg');">
        <div class="row blog_tow_row">
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">1- Commercial Full GC Takeoff</h4>
                    <img src="{{asset('assets/PortfolioPics/1_CommercialFullGCTakeoff.jpg')}}" alt="">
                    <!--		    <div class="renovation_content">
                                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                                            <a class="tittle" href="#">Flooring</a>
                                            <div class="date_comment">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                                            </div>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        </div>-->
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">2- Commercial Renovation Takeoff</h4>
                    <img src="{{asset('assets/PortfolioPics/2_CommercialRenovationTakeoff.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row blog_tow_row">
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">3- Dual Dwelling Takeoff & Costing</h4>
                    <img src="{{asset('assets/PortfolioPics/3_DualDwellingTakeoff&Costing.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">4- Apartments Full GC Takeoff</h4>
                    <img src="{{asset('assets/PortfolioPics/4_ApartmentsFullGCTakeoff.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row blog_tow_row">
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">5- Structural Takeoff</h4>
                    <img src="{{asset('assets/PortfolioPics/5_Structural_Takeoff.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">6- Rough Carpentry Final Results</h4>
                    <img src="{{asset('assets/PortfolioPics/6_Rough_Carpentry_Final_Results.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row blog_tow_row">
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">7- Drywall Takeoff</h4>
                    <img src="{{asset('assets/PortfolioPics/7_DrywallTakeoff.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">8- Paint Finish Takeoff</h4>
                    <img src="{{asset('assets/PortfolioPics/8_PaintFinishTakeoff.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row blog_tow_row">
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">9- Flooring Takeoff</h4>
                    <img src="{{asset('assets/PortfolioPics/9_FlooringTakeoff.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">10- Exterior Finishes Takeoff</h4>
                    <img src="{{asset('assets/PortfolioPics/10_ExteriorFinishesTakeoff.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row blog_tow_row">
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">11- Cladding & Facade Takeoff</h4>
                    <img src="{{asset('assets/PortfolioPics/11_Cladding&FacadeTakeoff.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">12- Electrical Lighting,Power,Containment</h4>
                    <img src="{{asset('assets/PortfolioPics/12_ElectricalLighting_Power_Containment.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row blog_tow_row">
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">13- Plumbing Takeoff</h4>
                    <img src="{{asset('assets/PortfolioPics/13_PlumbingTakeoff.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">14- Landscaping & Hardscaping Takeoff</h4>
                    <img src="{{asset('assets/PortfolioPics/14_Landscaping&HardscapingTakeoff.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row blog_tow_row">
            <div class="col-md-5 col-md-offset-1 img-portfolio col-sm-12">
                <div class="cns-img renovation">
                    <h4 class="tittle" style="padding: 30px 0 20px 0;">Final Results</h4>
                    <img src="{{asset('assets/PortfolioPics/FinalResults.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End blog-2 area -->
@include('layouts.footer')