<?php get_header(); ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt="" />
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="index-blog">
                        <div class="container">
                            <div class="blog-items">
                                <h1 class="blog-title"><?php echo get_the_date('M');?></h1>
                            <?php
                            if(have_posts()):
                                while(have_posts()) : the_post();
                                ?>
                                <?php if('post' == get_post_type()):?>
                                   <article>
                                        <a class="title-blog-post" href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                        <div class="meta-info">
                                        <p>Posted <strong>in</strong> <?php echo get_the_date();?> <strong>by</strong> <?php the_author_posts_link();?></p>
                                        <p>Categories: <?php the_category(' ')?></p>
                                        <p>Tags: <?php the_tags(' ', ',');?></p>
                                       </div>
                                       <?php the_excerpt();?>
                                       <hr>
                                   </article>
                                <?php endif;?>
                                <?php
                                endwhile;?>
                                <div class="meusite-pagination">
                                    <div class="pages new"><?php previous_posts_link('<< Newer posts');?></div>
                                    <div class="pages old"><?php next_posts_link('Older posts >>');?></div>
                                </div>
                                <?php
                            else: ?>
                                <p><?php esc_html_e('Nothing yet to show!');?></p>
                            <?php endif; ?>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div> 
<?php get_footer(); ?>