    <footer>

        <?php 
        if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')): endif; 
        ?>

        <nav class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <?php wp_nav_menu([
                        'container' => false,
                        'menu_class' => '',
                        'items_wrap' => '<ul class="col-md-12">%3$s</ul>',
                        'theme_location' => 'footer'
                    ]); ?>
                    </div>
                </div>
            </div>
        </nav>
	
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Sitio creado por Carlos Arturo - FalconMasters</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>