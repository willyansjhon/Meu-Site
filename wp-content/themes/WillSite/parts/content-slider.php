<section class="home-slider">
    <div class="container">
        <div class="slider">
            <div class="slides">
            <input type="radio" name="radio-btn" id="radio1"></input>
            <input type="radio" name="radio-btn" id="radio2"></input>
            <input type="radio" name="radio-btn" id="radio3"></input>
            <input type="radio" name="radio-btn" id="radio3"></input>   
            <div class="slide first">
                <a href="<?php the_permalink($post=1); ?>" title="<?php the_title_attribute(); ?>"><h3 class="h3-slide"><?php echo get_the_title(); ?></h3></a>
                <p class="card-text post-catgory"><small class="text-muted">Category:<?php the_category(','); ?></small></p>
                <p class="card-text post-tag"><small class="text-muted">Tags:<?php the_tags(' '); ?></small></p>
                <img src="<?php the_post_thumbnail(); ?>" alt="imagem 1">
            </div>

            <div class="slide">
                <a href="<?php the_permalink($post=62); ?>" title="<?php the_title_attribute(); ?>"><h3 class='h3-slide'><?php echo get_the_title(); ?></h3></a>
                <p class="card-text post-catgory"><small class="text-muted">Category:<?php the_category(','); ?></small></p>
                <p class="card-text post-tag"><small class="text-muted">Tags:<?php the_tags(' '); ?></small></p>
                <img src="<?php the_post_thumbnail(); ?>" alt="imagem 2">
             </div>
            <div class="slide">
                <a href="<?php the_permalink($post=64); ?>" title="<?php the_title_attribute(); ?>"><h3 class="h3-slide"><?php echo get_the_title(); ?></h3></a>
                <p class="card-text post-catgory"><small class="text-muted">Category:<?php the_category(','); ?></small></p>
                <p class="card-text post-tag"><small class="text-muted">Tags:<?php the_tags(' '); ?></small></p>
                <img src="<?php the_post_thumbnail(); ?>" alt="imagem 3">
            </div>
            <div class="slide">
                <a href="<?php the_permalink($post=67); ?>" title="<?php the_title_attribute(); ?>"><h3 class="h3-slide"><?php echo get_the_title(); ?></h3></a>
                <p class="card-text post-catgory"><small class="text-muted">Category:<?php the_category(','); ?></small></p>
                <p class="card-text post-tag"><small class="text-muted">Tags:<?php the_tags(' '); ?></small></p>
                <img src="<?php the_post_thumbnail(); ?>" alt="imagem 4">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
                </div>
            </div>
                                

            <div class="manual-navigation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>                                                      
        </div>
    </div>  
</section>