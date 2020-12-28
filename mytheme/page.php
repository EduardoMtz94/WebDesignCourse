<?php 
get_header();
?>

<div class="container">
    <div class="row">
        <section class="main col-md-12">
            <div class="row single-post">
                <?php 
                if(have_posts()): while(have_posts()): the_post();
                ?>
                    <article class="col-md-12 post">
                        <div class="contenedor">
                            <div class="info">
                                <h2 class="titulo">
                                    <?= the_title(); ?>
                                </h2>
                                <p class="fecha"><?= get_the_date(); ?></p>
                                <div class="texto"><?= the_content(); ?></div>
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
    </div>
</div>

<?php 
get_footer();
?>