<?php get_header();?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt="" />
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="index-blog">
                        <div class="container">
                            <div class="single-itens">
                               <article>
                                    <a class="title-blog-post-single" href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                    <div class="meta-info">
                                    </div>
                                    <?php the_content();?>
                                    <p>Posted <strong>in</strong> <?php echo esc_html(get_the_date());?> <strong>by</strong> <?php the_author_posts_link();?></p>
                                    <p>Categories: <?php the_category(' ')?></p>
                                    <p>Tags: <?php the_tags(' ', ',');?></p>
                                    <hr>
                                </article>
                                <div class="meusite-pagination-post">
                                    <div class="pages new"><?php previous_post_link();?></div>
                                    <div class="pages old"><?php next_post_link();?></div>
                                </div>
                                <?php
                                    if(comments_open() || get_comments_number()){
                                       comments_template();
                                    }
                                ?>
                            </div>
                            
                        </div>
                    </section>
                </main>
            </div>
        </div> 
<?php get_footer();?>