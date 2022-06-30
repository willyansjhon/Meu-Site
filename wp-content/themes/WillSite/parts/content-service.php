<section class="services">
    <div class="services-title">
        <h2>what are we?</h2>
        <button></button>
        </div>
            <div class="container">
                <div class="services-item">
                    <?php 
                        if(is_active_sidebar('service-1')){
                        dynamic_sidebar('service-1');
                        }?>
                        <a href="<?php the_permalink($post=70); ?>" title="<?php the_title_attribute(); ?>"><h3 class="h3-slide"><?php the_category(); ?></h3></a>
                </div>
                <div class="services-item">
                    <?php 
                        if(is_active_sidebar('service-2')){
                            dynamic_sidebar('service-2');
                            }
                            ?>
                            <a href="<?php the_permalink($post=67); ?>" title="<?php the_title_attribute(); ?>"><h3 class="h3-slide"><?php the_category(); ?></h3></a>
                </div>
                <div class="services-item">
                    <?php 
                        if(is_active_sidebar('service-3')){
                        dynamic_sidebar('service-3');
                        }
                    ?>
                    <a href="<?php the_permalink($post=64); ?>" title="<?php the_title_attribute(); ?>"><h3 class="h3-slide"><?php the_category(); ?></h3></a>
                </div>
    </div>
</section>