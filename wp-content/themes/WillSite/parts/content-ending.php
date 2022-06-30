<section class="home-ending">
    <div class="container">
        <div class="home-ending-content-1">
            <?php the_post_thumbnail($post=64);?>
        </div>
        <div class="home-ending-content-2">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3 class="h3-slide"><?php the_title(); ?></h3></a>
            <h2>*Um post explicando nossa entrada no mercado da tecnologia</h2>
            <h3>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', 
                making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, 
                and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</h3>
            <p><strong>Written by:</strong> <?php the_author();?></p>
            <p><strong>written in:</strong> <?php the_date();?></p>
        </div>
    </div>
</section>