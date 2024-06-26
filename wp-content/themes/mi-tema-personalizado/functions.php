<?php
// Cargar el archivo de estilo principal
function mi_tema_personalizado_estilos() {
    wp_enqueue_style( 'mi-tema-personalizado-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mi_tema_personalizado_estilos' );


function mi_tema_personalizado_registrar_menus() {
    register_nav_menus(
        array(
            'menu-principal' => __( 'Menú Principal' )
        )
    );
}
add_action( 'init', 'mi_tema_personalizado_registrar_menus' );

// Encolar estilos y scripts
function mi_tema_personalizado_scripts() {
    // Encolar Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2' );

    // Encolar estilos del tema
    wp_enqueue_style( 'mi-tema-personalizado-style', get_stylesheet_uri() );

    // Encolar estilos personalizados compilados desde SASS
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css' );

    // Encolar jQuery (incluido con WordPress)
    wp_enqueue_script( 'jquery' );

    // Encolar Bootstrap JS
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), '4.5.2', true );
}
add_action( 'wp_enqueue_scripts', 'mi_tema_personalizado_scripts' );

// Registrar menús
function mi_tema_personalizado_setup() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'mi-tema-personalizado' ),
        )
    );
}
add_action( 'after_setup_theme', 'mi_tema_personalizado_setup' );

// Enqueue styles
function enqueue_custom_styles() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style('custom-template-acf-styles', get_template_directory_uri() . '/CSS/template-acf.css');
    wp_enqueue_style('custom-footer-styles', get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style('custom-index-styles', get_template_directory_uri() . '/css/index.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );

function custom_hide_page_title($content) {
    if (is_page('prueba-tecnica-wordpress')) {
        return '';
    }
    return $content;
}
add_filter('the_title', 'custom_hide_page_title');



?>




 
