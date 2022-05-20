<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

            <?php 
                $counter_sections = get_field('counter_section', 'options');
                foreach($counter_sections as $counter_section){
                ?>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="<?php echo $counter_section['counter_icon'];?> text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up"><?php echo $counter_section['counter_number'];?></h1>
                    </div>
                    <h5 class="mb-3"><?php echo $counter_section['counter_title'];?></h5>
                    <span><?php echo $counter_section['counter_details'];?></span>
                </div>
                <?php 
                }
                ?>
            </div>
        </div>
    </div>