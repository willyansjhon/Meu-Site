<article>
    <a class="title-blog-post" href="<?php the_permalink(); ?>"><?php the_title();?></a>
        <?php the_post_thumbnail('medium'); ?>
            <div class="meta-info">
                <p>Posted <strong>in</strong> <?php echo esc_html(get_the_date());?> <strong>by</strong> <?php the_author_posts_link();?></p>
                <p>Categories: <?php the_category(' ')?></p>
                <p>Tags: <?php the_tags(' ', ',');?></p>
            </div>
        <?php the_content();?>
        <hr>
</article>