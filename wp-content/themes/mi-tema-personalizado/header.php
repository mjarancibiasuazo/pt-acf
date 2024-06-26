<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
    <?php wp_head(); ?>
</head>

<nav class="navbar">
 <div class="nav-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/wp.png" alt="Logo" />
</div>
    <ul class="nav-menu">
            <li><a class="nav-link" href="http://localhost/wordpress/">Inicio</a></li>
            <li><a class="nav-link" href="http://localhost/wordpress/prueba-tecnica-wordpress/">Prueba Técnica</a></li>
    </ul>
 
</nav>



