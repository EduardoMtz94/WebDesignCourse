<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/estilos.css">
	<title>
        <?php 
        $title = get_bloginfo('name');
        echo (is_single())?the_title():$title; 
        ?>
    </title>

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logo col-xs-12 col-sm-6">
                    <a href="<?= bloginfo('url'); ?>"><img src="<?= bloginfo('template_url'); ?>/img/logo.png" alt="Blog logo"></a>
                </div>
                <div class="redes-sociales col-xs-12 col-sm-6">
					<a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <nav class="menu">
            <div class="container">
                <div class="row">
                    <?php wp_nav_menu([
                        'container' => false,
                        'menu_class' => '',
                        'items_wrap' => '<ul class="col-md-12">%3$s</ul>',
                        'theme_location' => 'primary'
                    ]); ?>
                </div>
            </div>
        </nav>
        
        <?php 
        if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header')): endif; 
        ?>
    </header>