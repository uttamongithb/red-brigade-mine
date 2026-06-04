
<!-- footer area start -->
<footer class="footer-area ">
    <div class="footer-modern">
        <div class="container-fluid footer-modern-shell">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="footer-about">
                        <div class="footer-brand-wrap">
                            <img src="<?php echo URL::asset('uploads/img/logo.png')?>" alt="Red Brigade Logo" class="footer-brand-logo">
                            <h3 class="footer-brand-title">Red Brigade Lucknow</h3>
                        </div>
                        <p class="footer-about-text">
                            Red Brigade Lucknow is dedicated to providing a safe, empowering, and action-focused
                            learning environment where girls and women can build confidence through self-defence training.
                        </p>
                        <ul class="footer-social">
                            <li><a href="https://www.facebook.com/official.redbrigade.lucknow" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://mobile.twitter.com/redbrigadel?lang=en" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://youtube.com/channel/UCI0YBR8fmF25aw_io3sHecA" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/redbrigadelucknow/?hl=en" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-links">
                        <h4 class="footer-heading">Quick Links</h4>
                        <ul>
                            <li><a href="<?php echo action('MainController@about')?>">About</a></li>
                            <li><a href="<?php echo action('MainController@about')?>">Our Mission</a></li>
                            <li><a href="<?php echo action('MainController@gallery')?>">Gallery</a></li>
                            <li><a href="<?php echo action('MainController@index')?>">Home</a></li>
                            <li><a href="<?php echo action('MainController@contact')?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-contact">
                        <h4 class="footer-heading">Contact</h4>
                        <ul>
                            <li>
                                <a href="https://www.google.com/maps/search/?api=1&query=P-16+Nehru+Enclave+Gomti+Nagar+Lucknow+226010" target="_blank" rel="noopener" aria-label="Open Red Brigade Lucknow address on map">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>P-16 Nehru Enclave Gomti Nagar Lucknow (226010), Uttar Pradesh (India)</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+919455025746" target="_self" aria-label="Call 9455025746">
                                    <i class="fas fa-phone"></i>
                                    <span>+91-9455025746</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+917985463006" target="_self" aria-label="Call 7985463006">
                                    <i class="fas fa-phone"></i>
                                    <span>+91-7985463006</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:redbrigade.lucknow@gmail.com" target="_self" aria-label="Email Red Brigade Lucknow">
                                    <i class="fas fa-envelope"></i>
                                    <span>redbrigade.lucknow@gmail.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="row footer-bottom-row">
                <div class="col-md-6 col-sm-6">
                    <p class="footer-copyright">&copy; <?php echo date('Y')?> Red Brigade Lucknow. All rights reserved.</p>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <p class="footer-credit" style="color:#ffffff;margin:0;">website develop and designed by uttam and anubhav</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

       

<!-- back to top start -->
<div class="back-to-top" >
    <!-- back to top start -->
    <i class="fas fa-rocket"></i>
</div>
<!-- back to top end -->

<!-- preloader area start -->
<!--<div class="preloader" id="preloader">
    <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>
</div>-->
<!-- preloader area end -->

@include('includes.self-defense-modal')


    <!-- jquery -->
    <script src="<?php echo URL::asset('js/front/jquery.js')?>"></script>
    <!-- popper -->
    <script src="<?php echo URL::asset('js/front/popper.min.js')?>"></script>
	<!-- bootstrap -->
    <script src="<?php echo URL::asset('js/front/bootstrap.min.js')?>"></script>
    <!-- owl carousel -->
    <script src="<?php echo URL::asset('js/front/owl.carousel.min.js')?>"></script>
    <!-- wow js-->
    <script src="<?php echo URL::asset('js/front/wow.min.js')?>"></script>
    <!-- jquery imagloaded js-->
    <script src="<?php echo URL::asset('js/front/imagesloaded.pkgd.min.js')?>"></script>
    <!-- filterizr js-->
    <script src="<?php echo URL::asset('js/front/jquery.filterizr.min.js')?>"></script>
    <!-- magnific popup js -->
    <script src="<?php echo URL::asset('js/front/jquery.magnific-popup.js')?>"></script>
    <!-- main -->
    <script src="<?php echo URL::asset('js/front/main.js')?>"></script>
</body>


<!-- Mirrored from rexbd.net/html/Nirvana/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jan 2019 07:51:05 GMT -->
</html>
