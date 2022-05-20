
<?php 
/**
 * Template Name: HomePage 
 * 
 * @package One
 * 
 * @since 1.0.0
 */
?>
    <?php get_header();?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
        
        <?php 
            $slider_options = get_field('sliders', 'options');
            foreach( $slider_options as $slider_option ){
            ?>

            <div class="owl-carousel-item position-relative" data-dot="<img src='<?php echo $slider_option['slider_image'] ['url'];?>'>">
                <img class="img-fluid" src="<?php echo $slider_option['slider_image'] ['url'];?>" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown"><?php echo $slider_option['slider_title'];?></h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3"><?php echo $slider_option['slider_sub_title'];?></p>
                                <a href="<?php echo $slider_option['slider_button_url'];?>" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft"><?php echo $slider_option['slider_button_text'];?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            }
            ?>

        </div>
    </div>
    <!-- Feature Start -->
    <?php get_template_part( 'template-parts/features' );?>
    <!-- Feature Start -->


    <!-- About Start -->
    <?php get_template_part( 'template-parts/about' );?>
    <!-- About End -->


    <!-- Service Start -->
    <?php get_template_part( 'template-parts/service' );?>
    <!-- Service End -->


    <!-- Why Us Start -->
    <?php get_template_part( 'template-parts/whyus' );?>
    <!-- Why US End -->


    <!-- Projects Start -->
    <?php get_template_part( 'template-parts/projects' );?>
    <!-- Projects End -->


    <!-- Quote Start -->
    <?php get_template_part( 'template-parts/quote' );?>
    <!-- Quote End -->


    <!-- Team Start -->
    <?php get_template_part( 'template-parts/team' );?>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <?php get_template_part( 'template-parts/testimonial' );?>
    <!-- Testimonial End -->
    <?php get_footer();?>
