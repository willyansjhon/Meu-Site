<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                    <?php 
                        $image = get_field('img_init');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                    </section>
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
                                   }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                if(is_active_sidebar('service-2')){
                                    dynamic_sidebar('service-2');
                                   }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                if(is_active_sidebar('service-3')){
                                    dynamic_sidebar('service-3');
                                   }
                                ?>
                            </div>
                        </div>
                    </section>
                    <section class="home-blog">
                        <div class="container">
                            <div class="home-items">
                            <?php
                            if(have_posts()):
                                while(have_posts()) : the_post();
                                ?>
                                   <article>
                                       <h2><?php the_title();?></h2>
                                       <div class="meta-info">
                                       </div>
                                       <?php the_content();?>
                                   </article>
                                <?php
                                endwhile;
                            else: ?>
                                <p>Nothing yet to show!</p>
                            <?php endif; ?>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div> 
<?php get_footer(); ?>