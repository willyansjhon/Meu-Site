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
                    <?php get_template_part('parts/content','service'); ?>
                    <?php get_template_part('parts/content','latest'); ?>
                    <?php get_template_part('parts/content','slider'); ?>
                    <?php get_template_part('parts/content','ending'); ?>
                </main>

            </div>
        </div> 
<?php get_footer(); ?>