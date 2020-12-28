<?php 
get_header();
?>

<div class="container">
    <div class="row">
        <section class="main col-md-8">
            <div class="row single-post">
                <?php 
                if(have_posts()): while(have_posts()): the_post();
                ?>
                    <article class="col-md-12 post">
                        <div class="contenedor">
                            <div class="thumb">
                                    <?php if(has_post_thumbnail()){ the_post_thumbnail('homepage-thumb'); } ?>
                            </div>
                            <div class="info">
                                <h2 class="titulo">
                                    <?= the_title(); ?>
                                </h2>
                                <p class="fecha"><?= get_the_date(); ?></p>
                                <div class="categorias">
                                    <?php the_category(); ?>
                                </div>
                                <div class="texto"><?= the_content(); ?></div>
                            </div>
                        </div>
                    </article>
                    <section class="col-sm-12">
                        <div class="comentarios">
                            <?php comments_template(); ?>
                        </div>
                    </section>
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
        </section>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php 
get_footer();
?>