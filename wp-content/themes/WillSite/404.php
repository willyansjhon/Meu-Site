<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="page-404"> 
                        <div class="container">
                            <h1 class="page-not-found-title">Página não encontrada</h1>
                            <p>Tente procurar o seu conteúdo: <?php get_search_form(); ?></p>
                        </div>
                    </section>
                    <?php get_template_part('parts/content','slider'); ?>
                    <?php get_template_part('parts/content','ending'); ?>
                </main>

            </div>
        </div> 
<?php get_footer(); ?>