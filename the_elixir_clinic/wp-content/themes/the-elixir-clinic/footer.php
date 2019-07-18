<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Elixir_Clinic
 */

?>

	</div><!-- #content -->

	<footer>
        <div class="container">
            <div class="row footer-first-row">
                <div class="col-1"></div>
                <div class="col-lg-3 col-sm-12">
                    <div class="logo-footer"><img  class="img-fluid" src="<?php echo get_template_directory_uri()?>/dist/img/logo.png" width="160"></div>
                    <div class="social-icons">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/theelixirclinic" target="_blank"> <i class="fa fa-facebook-f"></i> </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/theelixirclinic/?hl=en" target="_blank"> <i class="fa fa-instagram"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="clinics-flag">
                        <img  class="img-fluid" src="<?php echo get_template_directory_uri()?>/dist/img/uae-flag.png">
                    </div>
                    <div class="clinics-location">
                        <h5>OUR CLINICS</h5>
                        <ul>
                            <li>THE ELIXIR CLINIC - DUBAI</li>
                            <li>THE ELIXIR CLINIC - ABU DHABI</li>
                            <li>FIVE PALM JUMEIRAH DUBAI - CONCIERGE SERVICE</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="clinics-flag">
                        <img  class="img-fluid" src="<?php echo get_template_directory_uri()?>/dist/img/uk-flag.png">
                    </div>
                    <div class="clinics-location">
                        <h5>OUR CLINICS</h5>
                        <ul>
                            <li>THE ELIXIR CLINIC - LONDON</li>
                            <li>HARRODS - THE WELLNESS CLINIC</li>
                            <li>THE NED LONDON</li>
                            <li>JOHN SAGARIS CLINIC</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row footer-second-row">
                <div class="col-1"></div>
                <div class="col-lg-2 col-sm-3">
                    <ul>
                        <li>
                            <a href="#">REQUEST BOOKING</a>
                        </li>
                        <li>
                            <a href="#">LOCATIONS</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-3">
                    <ul>
                        <li>
                            <a href="#">CONTACT US</a>
                        </li>
                        <li>
                            <a href="#">FRANCHISE</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-3 last-col">
                    <ul class="">
                        <li>
                            <a href="#">TAKE OUR SURVEY</a>
                        </li>
                        <li>
                            <a href="#">PRIVACY POLICY</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-12 subscription">
                    <h5>SUBSCRIBE TO OUR NEWSLETTER</h5>
                    <?php echo do_shortcode('[contact-form-7 id="69" title="Subscription Form"]')?>
                </div>
            </div>

        </div>
        <div class="copyright ">
            <div class="container ">
                <div class="row ">
                    <div class="col-12 ">
                        <div> ©
                            <script>
                                var d = new Date();
                                document.write(d.getFullYear());
                            </script> ELIXIR - All right reserved</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/dist/js/app.bundle.js"></script>
</body>
</html>
