<?php
/*
Template Name: General template
*/
?>

<?php get_header(); ?>
        <-- --> 
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                    <section class="home-general">
                        <div class="container">
                            <div class="blog-items">
                            <?php
                            if(have_posts()):
                                while(have_posts()) : the_post();
                                ?>
                                   <article>
                                       <h2><?php the_title();?></h2>
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
        <-- --> 
<?php get_footer(); ?>