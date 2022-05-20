<?php 
/**
 * Template Name: Feature 
 * 
 * @package One
 * 
 * @since 1.0.0
 */
?>
    <?php get_header();?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Features</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Features</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">3453</h1>
                    </div>
                    <h5 class="mb-3">Happy Customers</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">4234</h1>
                    </div>
                    <h5 class="mb-3">Project Done</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">3123</h1>
                    </div>
                    <h5 class="mb-3">Awards Win</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">1831</h1>
                    </div>
                    <h5 class="mb-3">Expert Workers</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->


    <!-- Feature Start -->
    <?php get_template_part( 'template-parts/features' );?>
    <!-- Feature End -->
        
<?php get_footer();?>