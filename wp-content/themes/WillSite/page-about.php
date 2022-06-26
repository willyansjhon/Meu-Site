<?php get_header(); ?>
   <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt="" />
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
                                    <div class="text-about-me">
                                        <?php the_field('me_description'); ?>
                                    </div>
                                    <h3>Nossas linguagens</h3>
                                    <div class="me-linguagens">
                                        <?php 
                                            $image = get_field('linguagens_img_1');
                                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                            if( $image ) {
                                                echo wp_get_attachment_image( $image, $size );
                                        } ?>
                                        <?php 
                                        $image = get_field('linguagens_img_2');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                        } ?>
                                        <?php 
                                        $image = get_field('linguagens_img_3');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                        } ?>
                                        <?php 
                                            $image = get_field('linguagens_img_4');
                                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                            if( $image ) {
                                                echo wp_get_attachment_image( $image, $size );
                                        } ?>
                                        <?php 
                                        $image = get_field('linguagens_img_5');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                        } ?>
                                        <?php 
                                        $image = get_field('linguagens_img_6');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                        } ?>                                  
                                    </div>
                                    <h3>Contact</h2>
                                    <div class="contact">
                                        <ul>
                                            <a href="<?php the_field('url_contact_1'); ?>"> <?php 
                                        $image = get_field('contact_img_1');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                    } ?></a>
                                            <a href="<?php the_field('url_contact_2'); ?>"> <?php 
                                        $image = get_field('contact_img_2');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                    } ?></a>
                                            <a href="<?php the_field('url_contact_3'); ?>"> <?php 
                                        $image = get_field('contact_img_3');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                    } ?></a>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                <div  class="about-content-2">
                                    <h2>About Us</h2>
                                    <div class="about-us-content">
                                        <?php the_field('about_us'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>

            </div>
        </div> 
<?php get_footer(); ?>