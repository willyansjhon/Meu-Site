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
                        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                        <?php the_post_thumbnail('full');?>
                        <div class="meta-info"></div>
                        <?php the_excerpt();?>
                    </article>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                        else: ?>
                    <p><?php esc_html_e('Nothing yet to show!');?></p>
                    <?php endif; ?>
            </div>
        </div>
</section>