<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri();?>/img/favicon.ico" rel="icon">

    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <?php
                        $header_location = get_field('header_location', 'options');
                        if($header_location) {
                        ?>
                         <small class="fa fa-map-marker-alt text-primary me-2"></small>
                         <small><?php echo $header_location;?></small>
                        <?php
                        }
                        ?>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <?php
                        $header_phone = get_field('header_phone', 'options');
                        if($header_phone) {
                        ?>
                         <small class="far fa fa-phone-alt text-primary me-2"></small>
                         <small><?php echo $header_phone;?></small>
                         <?php
                        }
                        ?>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2 header_social_icons">

                    <?php
                    if($header_socials = get_field('header_social_icons', 'options')){
                    foreach($header_socials as $header_social) {
                    ?>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?php echo $header_social['social_url'];?>"><i class="<?php echo $header_social['social_icon'];?>"></i></a>
                    <?php
                    }}
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="<?php site_url();?>" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary"><?php echo the_field('header_logo', 'options');?></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <?php 
                wp_nav_menu( array(
                    'menu'              => 'Primary Menu', // match name to yours
                    'theme_location'    => 'primary-menu',
                    'container'         => 'div', // no need to wrap wp_nav_menu manually
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => false,
                    'walker'            => new WP_Bootstrap_Navwalker() // Use different Walker
                ));

                ?>

            <!-- <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="project.html" class="nav-item nav-link">Project</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div> -->


            <a href="<?php echo the_field('header_button_url', 'options');?>" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><?php echo the_field('header_button_text', 'options');?><i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

