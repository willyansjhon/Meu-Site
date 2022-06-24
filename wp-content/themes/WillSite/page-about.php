<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <h2><?php the_title();?></h2>
                    <section class="page-content">
                        <div class="container">
                            <h1>About Will Team</h1>
                            <button class="btn-about-1"></button>
                            <button class="btn-about-2"></button>
                            <div class="about-content">
                                <div class="about-content-1">
                                    <h2>ME</h2>
                                    <div class="my-info">
                                    <?php 
                                        $image = get_field('img_me');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                    } ?>
                                    <h3>Willyans Jhonson</h3>
                                    </div>
                                </div>
                                <div  class="about-content-2">
                                    <h2>About Us</h2>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>

            </div>
        </div> 
<?php get_footer(); ?>