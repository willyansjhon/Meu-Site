<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                    
                    
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
                    <section class="home-blog">
                        <h2 class="latests-posts">Latests Posts</h2>
                        <div class="container">
                            <div class="home-items">
                            <?php
                            $args= array( 
                                   'post_type' => 'post',
                                   'posts_per_page' => 4,
                                   'category__in' => array( 1,4, 5, 6,),
                                   'category__not_in' => array(  )
                            );

                            $postlist = new WP_Query( $args );

                            if($postlist->have_posts()):
                                while($postlist->have_posts()) : $postlist->the_post();
                                ?>
                                   <article>
                                       <h2><?php the_title();?></h2>
                                       <?php the_post_thumbnail('full');?>
                                       <div class="meta-info">
                                       </div>
                                       <?php the_excerpt();?>
                                   </article>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            else: ?>
                                <p>Nothing yet to show!</p>
                            <?php endif; ?>
                            </div>
                        </div>
                    </section>
                    <section class="home-slider">
                    <div class="container">
                            <div class="slider">
                            <div class="slides">
                                    <input type="radio" name="radio-btn" id="radio1"></input>
                                    <input type="radio" name="radio-btn" id="radio2"></input>
                                    <input type="radio" name="radio-btn" id="radio3"></input>
                                    <input type="radio" name="radio-btn" id="radio4"></input>

                                    <div class="slide first">
                                        <a href="<?php the_permalink($post=1); ?>" title="<?php the_title_attribute(); ?>"><h3 class="h3-slide"><?php echo get_the_title(); ?></h3></a>
                                        <p class="card-text post-catgory"><small class="text-muted">Category:<?php the_category(','); ?></small></p>
                                        <p class="card-text post-tag"><small class="text-muted">Tags:<?php the_tags(' '); ?></small></p>
                                        <img src="
                                        <?php the_post_thumbnail(); ?>
                                        " alt="imagem 1">
                                    </div>

                                    <div class="slide">
                                        <a href="<?php the_permalink($post=62); ?>" title="<?php the_title_attribute(); ?>"><h3 class='h3-slide'><?php echo get_the_title(); ?></h3></a>
                                        <p class="card-text post-catgory"><small class="text-muted">Category:<?php the_category(','); ?></small></p>
                                        <p class="card-text post-tag"><small class="text-muted">Tags:<?php the_tags(' '); ?></small></p>
                                        <img src="
                                        <?php
                                        the_post_thumbnail(); ?>
                                        " alt="imagem 2">
                                    </div>
                                    <div class="slide">
                                        <a href="<?php the_permalink($post=64); ?>" title="<?php the_title_attribute(); ?>"><h3 class="h3-slide"><?php echo get_the_title(); ?></h3></a>
                                        <p class="card-text post-catgory"><small class="text-muted">Category:<?php the_category(','); ?></small></p>
                                        <p class="card-text post-tag"><small class="text-muted">Tags:<?php the_tags(' '); ?></small></p>
                                        <img src="
                                        <?php
                                        the_post_thumbnail(); ?>
                                        "alt="imagem 3">
                                    </div>
                                    <div class="slide">
                                        <a href="<?php the_permalink($post=67); ?>" title="<?php the_title_attribute(); ?>"><h3 class="h3-slide"><?php echo get_the_title(); ?></h3></a>
                                        <p class="card-text post-catgory"><small class="text-muted">Category:<?php the_category(','); ?></small></p>
                                        <p class="card-text post-tag"><small class="text-muted">Tags:<?php the_tags(' '); ?></small></p>
                                        <img src="
                                        <?php
                                        the_post_thumbnail(); ?>
                                        " alt="imagem 4">
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
                    <section class="home-ending">
                        <div class="container">
                        <div class="home-ending-content-1">
                            <?php the_post_thumbnail($post=64);?>
                        </div>
                        <div class="home-ending-content-2">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3 class="h3-slide"><?php the_title(); ?></h3></a>
                        <h2>*Um post explicando nossa entrada no mercado da tecnologia</h2>
                        <h3>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                            The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', 
                            making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, 
                            and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                             Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</h3>
                        <p><strong>Written by:</strong> <?php the_author();?></p>
                        <p><strong>written in:</strong> <?php the_date();?></p>
                        </div>
                        </div>
                    </section>
                </main>

            </div>
        </div> 
<?php get_footer(); ?>