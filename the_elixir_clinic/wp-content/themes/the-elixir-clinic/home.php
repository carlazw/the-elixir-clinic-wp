<?php 
/**
 *  Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Elixir_Clinic
 */

get_header();

//get acf values
$video = get_field_object('video');
$first_title = get_field_object('first_title');
$first_subtitle = get_field_object('first_subtitle');
$first_text = get_field_object('first_text');
$first_recommendation = get_field_object('first_recommendation');
$first_purposes = get_field_object('first_purposes');
$second_title = get_field_object('second_title');
$second_subtitle = get_field_object('second_subtitle');
$second_text = get_field_object('second_text');
$second_recommendation = get_field_object('second_recommendation');
$second_purposes = get_field_object('second_purposes');
$services = get_field_object('services');
$testimonials = get_field_object('testimonials');
?>

	 <!--video -->
	 <div class="banner-container container">
        <div class="row">
            <div class="col-12">
                <div class="banner">
                <iframe src="<?php echo $video["value"]?>?autoplay=1&autopause=0&muted=1&background=1" width="637" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!--Treatments Menu-->
    <div class="nav-container container">
        <div class="row">
            <div class="col-12">
                <nav>
                    <ul>
                        <li><a href="#">VITADRIP®</a></li>
                        <li><a href="#">Intravenous<br>Therapy</a></li>
                        <li><a href="#">Intramuscular<br>Injections</a></li>
                        <li><a href="#">Diagnostic<br>Testing</a></li>
                        <li><a href="#">Rejuvenation<br>Therapy</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!--ELIXIR BODY REJUVENATION Section-->
    <div class="rejuvenation-container container">
        <div class="row">
            <div class="col-12">
                <h3>ELIXIR BODY REJUVENATION</h3>
                <blockquote>
                    <div class="quote">
                        <h5><i>REFINE YOUR SKIN<br> AND DEFINE YOUR BODY</i></h5>
                    </div>
                </blockquote>
                <div class="before-after">
                    <img  class="img-fluid" src="<?php echo get_template_directory_uri()?>/dist/img/before-after.jpg">
                </div>
            </div>
        </div>
    </div>

    <!--xwave therapy-->
    <div class="xwave-container container">
        <div class="row">
            <div class="col-lg-1 hide-mobile"></div>
            <div class="col-lg-10 col-sm-12">
                <div>
                    <h3><?php echo $first_title["value"]?></h3>
                    <h5><?php echo $first_subtitle["value"]?></h5>
                    
                </div>
                <?php echo $first_text["value"]?>
                <div class="row img-text">
                    <div class="col-lg-8 col-sm-12">
                        <img  class="img-fluid" src="<?php echo get_template_directory_uri()?>/dist/img/cellulite.jpg">
                    </div>
                    <div class="col-lg-4 col-sm-12 white-bg">
                        <img  class="img-fluid" src="<?php echo get_template_directory_uri()?>/dist/img/recommendation.png">
                        <div>
                            <h5>Recommended</h5>
                            <?php echo $first_recommendation["value"]?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 hide-mobile"></div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="yellow-bg">Why should you do it?</div>
                <div class="row large-services">
                    <?php 
                    foreach($first_purposes["value"] as $purpose){
                        $featured_img_url = get_the_post_thumbnail_url($purpose->ID, 'full'); 
                    ?>
                    <div class="col-lg-3 col-sm-12 services-list">
                        <div class="services-header"></div>
                        <div class="services-body">
                            <img  class="img-fluid" src="<?php echo $featured_img_url ?>">
                            <h5><?php echo $purpose->post_title?></h5>
                            <p><?php echo $purpose->post_content?></p>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>

        <!--Ultra body tightening-->
        <div class="row">
            <div class="col-lg-1 hide-mobile"></div>
            <div class="col-lg-10 col-sm-12">
                <div>
                    <h3><?php echo $second_title["value"]?></h3>
                    <h5><?php echo $second_subtitle["value"]?></h5>
                    <?php echo $second_text["value"]?>
                </div>

                <div class="row img-text">
                    <div class="col-lg-8 col-sm-12">
                        <img  class="img-fluid" src="<?php echo get_template_directory_uri()?>/dist/img/better-ever.png">
                    </div>
                    <div class="col-lg-4 col-sm-12 white-bg">
                        <img  class="img-fluid" src="<?php echo get_template_directory_uri()?>/dist/img/recommendation.png">
                        <div>
                            <h5>Recommended</h5>
                            <?php echo $second_recommendation["value"]?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 hide-mobile"></div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="yellow-bg">Why should you do it?</div>
                <div class="row small-services">
                <?php 
                    foreach($second_purposes["value"] as $purpose){
                        $featured_img_url = get_the_post_thumbnail_url($purpose->ID, 'full'); 
                    ?>
                    <div class="col-lg-3 col-sm-12 services-list">
                        <div class="services-header"></div>
                        <div class="services-body">
                            <img  class="img-fluid" src="<?php echo $featured_img_url ?>">
                            <h5><?php echo $purpose->post_title?></h5>
                            <p><?php echo $purpose->post_content?></p>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

    <!--Laser Body rejuvenation-->
    <div class="container laser-container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Laser Body Rejuvenation</h3>
            </div>
            <div class="container">
                <div class="row">
                    <?php 
                    foreach($services["value"] as $service){
                        $featured_img_url = get_the_post_thumbnail_url($service->ID, 'full'); 
                    ?>
                    <div class="col-lg-3 col-sm-12">
                        <img  class="img-fluid" src="<?php echo $featured_img_url ?>">
                        <h5><?php echo $service->post_title?></h5>
                        <p><?php echo $service->post_content?></p>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

    <!--Booking-->
    <div class="container booking-container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-lg-6 col-sm-12">
                <h3>REQUEST A BOOKING</h3>
                <?php echo do_shortcode('[contact-form-7 id="68" title="Booking Form"]')?>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <!--Testimonials-->
    <div class="container testimonials-container">
        <div class="row">
            <div class="col-7">
                <div class="testimonials">
                    <h3>TESTIMONIALS</h3>
                    <div class="slick-wrapper">
                    <?php 
                    foreach($testimonials["value"] as $testimonial){ 
                        $author = get_field_object('author', $testimonial->ID);
                        $clinic = get_field_object('clinic', $testimonial->ID);    
                    ?>
                        <div class="testimonial-item">
                            <div class="description">
                                <?php echo $testimonial->post_content?>
                            </div>
                            <div class="author"><?php echo $author["value"]?></div>
                            <div class="clinic"><?php echo $clinic["value"]?></div>
                        </div>
                    <?php }?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
