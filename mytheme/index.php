<?php 
get_header();
?>

<div class="container">
    <div class="row">
        <section class="main col-md-8">
            <div class="row titulo-section">
                <div class="col-md-12">
                    <h3>Lo mas reciente</h3>
                </div>
            </div>
            <div class="row posts">
                <?php 
                if(have_posts()): while(have_posts()): the_post();
                ?>
                    <article class="col-md-6 post">
                        <div class="contenedor">
                            <div class="thumb">
                                <a href="<?= the_permalink(); ?>">
                                    <?php if(has_post_thumbnail()){ the_post_thumbnail('homepage-thumb'); } ?>
                                </a>
                            </div>
                            <div class="info">
                                <h2 class="titulo">
                                    <a href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
                                </h2>
                                <p class="fecha"><?= get_the_date(); ?></p>
                                <div class="extracto"><?= the_excerpt(); ?></div>
                                <div class="categorias">
                                    <?php the_category(); ?>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php 
                endwhile; else: 
                ?>
                    <article class="col-md-6 post">
                        <div class="contenedor">
                            <div class="info">
                                <h2 class="titulo">
                                    El Post que buscas no existe
                                </h2>
                                <div class="extracto">Revisa la url de nuevo.</div>
                            </div>
                        </div>
                    </article>
                <?php
                endif;
                ?>
            </div>
            <section class="row paginacion">
                <div class="col-md-12">
                    <div class="paginacion">
                        <?php wp_pagenavi(); ?>
                    </div>
                </div>
            </section>
        </section>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php 
get_footer();
?>