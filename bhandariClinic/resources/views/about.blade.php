
@extends('layouts.app')


@section('content')
<!--================About  Area =================-->

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>About Us</h2>
                    <p>Belding years moveth earth green behold wherein</p>
                </div>
{{--                <div class="page_link">--}}
{{--                    <a href="index.html">Home</a>--}}
{{--                    <a href="contact.html">About Us</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</section>

<section class="about-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-6 offset-xl-7 col-xl-5">
                <div class="about-content">
                    <h4>Second Abundantly<br>
                        Move That Cattle Perform<br>
                    Appen Land</h4>
                    <h6>Give their their without moving were stars called so divide in female be moving night may fish him</h6>
                    <p>Give their their without moving were stars called so divide female be moving night may fish him own male vreated great Give their their without moving were. Stars called so divide female moving night may fish him own male created great opportunity deal.</p>

                    <a class="link_one" href="#">learn more</a>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================About Area End =================-->
<!--================ appointment Area Starts =================-->
<section class="appointment-area area-padding-top">
    <div class="container">

        <div class="appointment-inner">
            <div class="row">
                <div class="col-sm-12 col-lg-5 offset-lg-1">
                    <h3>Have Some Questions?</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                                <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        God male gathering them it female which green cattle?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Moving creepeth moved upon man grass two days?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        God male gathering them it female which green cattle?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Saw isn't likeness beginning yielding land days she?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Saw isn't likeness beginning yielding land days she?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    Great day without sixth a lesser beginning. Their thing abundantly air moving saw fruitful lesser god. Sea abundantly blessed life set. Land. Lights divided man in deep in open upon.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="appointment-form">
                        <h3>Make an Appointment</h3>
                        <form action="#">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email'" required>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" cols="20" rows="7"  placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                            </div>
                            <a href="#" class="main_btn">Make an Appointment</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>
<!--================ appointment Area End =================-->


<!-- ================ testimonial section start ================= -->
<section class="testimonial">
    <div class="container">
        <div class="testi_slider owl-carousel owl-theme">
            <div class="item">
                <div class="testi_item">
                    <div class="testimonial_image">
                        <img src="{{ asset('images/elements/tes1.jpg') }}" alt="">
                    </div>
                    <div class="testi_item_content">
                        <p>
                            “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That, the saw very years created for seed have without. Can't him fowl his can not ready for game”
                        </p>
                        <h4>- Dr. Suzanne Holroyd -</h4>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testi_item">
                    <div class="testimonial_image">
                        <img src="{{ asset('images/elements/tes1.jpg') }}" alt="">
                    </div>
                    <div class="testi_item_content">
                        <p>
                            “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That, the saw very years created for seed have without. Can't him fowl his can not ready for game”
                        </p>
                        <h4>- Dr. Suzanne Holroyd -</h4>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testi_item">
                    <div class="testimonial_image">
                        <img src="img/elements/tes1.jpg" alt="">
                    </div>
                    <div class="testi_item_content">
                        <p>
                            “ Saw kind fruitful itself in man. All in life good wherein beginning their he air That, the saw very years created for seed have without. Can't him fowl his can not ready for game”
                        </p>
                        <h4>- Dr. Suzanne Holroyd -</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ testimonial section end ================= -->



<!--================ Start Brands Area =================-->
<section class="brands-area border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="owl-carousel brand-carousel">
                    <!-- single-brand -->
                    <div class="single-brand-item d-table">
                        <div class="d-table-cell">
                            <img src="img/brand/1.png" alt="">
                        </div>
                    </div>
                    <!-- single-brand -->
                    <div class="single-brand-item d-table">
                        <div class="d-table-cell">
                            <img src="img/brand/2.png" alt="">
                        </div>
                    </div>
                    <!-- single-brand -->
                    <div class="single-brand-item d-table">
                        <div class="d-table-cell">
                            <img src="img/brand/3.png" alt="">
                        </div>
                    </div>
                    <!-- single-brand -->
                    <div class="single-brand-item d-table">
                        <div class="d-table-cell">
                            <img src="img/brand/4.png" alt="">
                        </div>
                    </div>
                    <!-- single-brand -->
                    <div class="single-brand-item d-table">
                        <div class="d-table-cell">
                            <img src="img/brand/5.png" alt="">
                        </div>
                    </div>
                    <!-- single-brand -->
                    <div class="single-brand-item d-table">
                        <div class="d-table-cell">
                            <img src="img/brand/3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Brands Area =================-->

{{--<!-- start footer Area -->--}}
{{--<footer class="footer-area area-padding-top">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-2 col-sm-6 single-footer-widget">--}}
{{--                <h4>Top Products</h4>--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Managed Website</a></li>--}}
{{--                    <li><a href="#">Manage Reputation</a></li>--}}
{{--                    <li><a href="#">Power Tools</a></li>--}}
{{--                    <li><a href="#">Marketing Service</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-sm-6 single-footer-widget">--}}
{{--                <h4>Quick Links</h4>--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Jobs</a></li>--}}
{{--                    <li><a href="#">Brand Assets</a></li>--}}
{{--                    <li><a href="#">Investor Relations</a></li>--}}
{{--                    <li><a href="#">Terms of Service</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-sm-6 single-footer-widget">--}}
{{--                <h4>Features</h4>--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Jobs</a></li>--}}
{{--                    <li><a href="#">Brand Assets</a></li>--}}
{{--                    <li><a href="#">Investor Relations</a></li>--}}
{{--                    <li><a href="#">Terms of Service</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-sm-6 single-footer-widget">--}}
{{--                <h4>Resources</h4>--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Guides</a></li>--}}
{{--                    <li><a href="#">Research</a></li>--}}
{{--                    <li><a href="#">Experts</a></li>--}}
{{--                    <li><a href="#">Agencies</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 single-footer-widget">--}}
{{--                <h4>Newsletter</h4>--}}
{{--                <p>You can trust us. we only send promo offers,</p>--}}
{{--                <div class="form-wrap" id="mc_embed_signup">--}}
{{--                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"--}}
{{--                    method="get" class="form-inline">--}}
{{--                    <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'"--}}
{{--                    required="" type="email" />--}}
{{--                    <button class="click-btn btn btn-default">--}}
{{--                        <i class="ti-arrow-right"></i>--}}
{{--                    </button>--}}
{{--                    <div style="position: absolute; left: -5000px;">--}}
{{--                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text" />--}}
{{--                    </div>--}}

{{--                    <div class="info"></div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row footer-bottom d-flex justify-content-between">--}}
{{--        <p class="col-lg-8 col-sm-12 footer-text m-0">--}}
{{--            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
{{--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
{{--<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
{{--        </p>--}}
{{--        <div class="col-lg-4 col-sm-12 footer-social">--}}
{{--            <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--            <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--            <a href="#"><i class="fab fa-dribbble"></i></a>--}}
{{--            <a href="#"><i class="fab fa-linkedin"></i></a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</footer>--}}
{{--<!-- End footer Area -->--}}






{{--<!-- Optional JavaScript -->--}}
{{--<!-- jQuery first, then Popper.js, then Bootstrap JS -->--}}
{{--<script src="js/jquery-2.2.4.min.js"></script>--}}
{{--<script src="js/popper.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<script src="js/stellar.js"></script>--}}
{{--<script src="vendors/owl-carousel/owl.carousel.min.js"></script>--}}
{{--<script src="js/jquery.ajaxchimp.min.js"></script>--}}
{{--<script src="js/waypoints.min.js"></script>--}}
{{--<script src="js/mail-script.js"></script>--}}
{{--<script src="js/contact.js"></script>--}}
{{--<script src="js/jquery.form.js"></script>--}}
{{--<script src="js/jquery.validate.min.js"></script>--}}
{{--<script src="js/mail-script.js"></script>--}}
{{--<script src="js/theme.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
@endsection