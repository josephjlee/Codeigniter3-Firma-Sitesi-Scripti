<!-- #Info -->
<?php $settings = get_settings(); ?>
<!-- Start Footer
    ============================================= -->

<footer class="bg-dark">

    <div class="footer-bottom bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p> © 2019  <a href="<?php echo base_url("hakkimizda");?>"><?php echo $settings->company_name; ?></a></p>
                </div>
                <div class="col-md-6 text-right link">
                            <div class="social">
                                <ul>
                                    <li><a href="<?php echo $settings->facebook; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo $settings->twitter; ?> "><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $settings->instagram; ?>"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="<?php echo $settings->linkedin; ?>"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->

<!-- jQuery Frameworks
============================================= -->
<script src="<?php echo base_url("assets");?>/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url("assets");?>/js/bootstrap.min.js"></script>
<script src="<?php echo base_url("assets");?>/js/equal-height.min.js"></script>
<script src="<?php echo base_url("assets");?>/js/jquery.appear.js"></script>
<script src="<?php echo base_url("assets");?>/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url("assets");?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url("assets");?>/js/modernizr.custom.13711.js"></script>
<script src="<?php echo base_url("assets");?>/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url("assets");?>/js/wow.min.js"></script>
<script src="<?php echo base_url("assets");?>/js/progress-bar.min.js"></script>
<script src="<?php echo base_url("assets");?>/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url("assets");?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url("assets");?>/js/count-to.js"></script>
<script src="<?php echo base_url("assets");?>/js/bootsnav.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets");?>/js/jquery.fancybox.js"></script>
<script language="javascript" type="text/javascript">
    window.LAT = '41.29657427386537';
    window.LNG = '36.26638412475586';

    $(document).ready(
        function() {
            $('.fancybox').fancybox();
            $('.mb-switch > a, .mb-right').click(
                function() {
                    var mb = $('.mobile-nav');

                    if (mb.hasClass('disable')) {
                        mb.removeClass('disable').addClass('enable');
                    } else {
                        mb.removeClass('enable').addClass('disable');
                    }

                    return false;
                }
            );

            $('.mobile-nav > a.close').click(
                function() {
                    var mb = $('.mobile-nav');
                    mb.removeClass('enable').addClass('disable');
                }
            );

        }
    );
</script>
<script
        type="text/javascript"
        async defer
        src="//assets.pinterest.com/js/pinit.js"
></script>
<script src="<?php echo base_url("assets");?>/js/main.js"></script>
<?php $this->load->view("includes/popup"); ?>
</body>
</html>