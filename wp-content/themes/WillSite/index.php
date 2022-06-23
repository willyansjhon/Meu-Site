<?php get_header(); ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt="" />
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="index-blog">
                        <div class="container">
                            <div class="blog-items">
                            <?php
                            if(have_posts()):
                                while(have_posts()) : the_post();
                                ?>
                                   <article>
                                       <h2><?php the_title();?></h2>
                                        <?php the_post_thumbnail('medium'); ?>
                                       <div class="meta-info">
                                        <p>Posted <strong>in</strong> <?php echo get_the_date();?> <strong>by</strong> <?php the_author_posts_link();?></p>
                                        <p>Categories: <?php the_category(' ')?></p>
                                        <p>Tags: <?php the_tags(' ', ',');?></p>
                                       </div>
                                       <?php the_content();?>
                                       <hr>
                                   </article>
                                <?php
                                endwhile;
                            else: ?>
                                <p>Nothing yet to show!</p>
                            <?php endif; ?>
                            </div>
                            <?php get_sidebar(); ?>
                        </div>
                    </section>
                </main>
            </div>
        </div> 
<?php get_footer(); ?>