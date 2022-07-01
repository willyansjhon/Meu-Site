<?php get_header(); ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt="" />
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="index-blog">
                        <div class="container">
                            <div class="blog-items">
                                <h1 class="blog-title"><?php esc_html_e('Blog');?></h1>
                            <?php
                            if(have_posts()):
                                while(have_posts()) : the_post();
                                    
                                get_template_part('parts/content','blog');
                                   endwhile; ?>
                                <div class="meusite-pagination">
                                    <div class="pages new"><?php previous_posts_link('<< Newer posts');?></div>
                                    <div class="pages old"><?php next_posts_link('Older posts >>');?></div>
                                </div>
                                <?php
                            else: ?>
                                <p><?php esc_html_e('Nothing yet to show!');?></p>
                            <?php endif; ?>
                            </div>
                            <?php get_sidebar(); ?>
                        </div>
                    </section>
                </main>
            </div>
        </div> 
<?php get_footer(); ?>