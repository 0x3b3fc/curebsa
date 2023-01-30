<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Stay Up-To-Date With US.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ asset('assets/img/favicon.ico') }}"
                                                                       alt="Cure Logo"
                                                                       class="img-fluid"></a>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                        {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>--}}
                        {{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>--}}
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Full Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <a href="https://www.twitter.com/curebsa" target="_blank" class="twitter"><i
                                class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/curebsa" target="_blank" class="facebook"><i
                                class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/curebsa" target="_blank" class="instagram"><i
                                class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/curebsa" target="_blank" class="linkedin"><i
                                class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>CureBSA</span></strong>. All Rights Reserved
        </div>
        <div class="credits">Designed By Cure Technical Team</div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
