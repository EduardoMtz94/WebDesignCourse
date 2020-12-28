<?php 

//Agregar el soporte para Thumbnails
add_theme_support('post-thumbnails');

//Agregamos un tamaño de imagen y se permite que la imagen se corte si no cabe
add_image_size('homepage-thumb', 745, 372, true);

//Registrar el nav
register_nav_menus([
    'primary' => 'Menu Principal',
    'footer' => 'Menu Footer'
]);

// Registramos la zona de widgets del Header
register_sidebar(array(
	'name' => 'Header',
	'before_widget' => '<div>',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
 ));

 // Registramos la zona de widgets del Sidebar
 register_sidebar(array(
     'name' => 'Sidebar',
     'before_widget' => '<div class="widget"><div class="titulo-section">',
     'after_widget' => '</div></div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>',
  ));
 
 // Registramos la zona de widgets del Header
 register_sidebar(array(
     'name' => 'Footer',
     'before_widget' => '<div>',
     'after_widget' => '</div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>',
  ));



