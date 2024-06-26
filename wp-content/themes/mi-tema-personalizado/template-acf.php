<?php
/*
 * Template Name: Plantilla ACF
 */

get_header(); // Incluye el encabezado que contiene los enlaces de estilos y scripts
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Comienza el bucle de WordPress
        while ( have_posts() ) :
            the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
                <?php
                // Muestra el contenido del artículo
                the_content();

                // Mostrar los campos personalizados de ACF
                if (function_exists('get_field')) {
                    $nombre_del_proyecto = get_field('nombre_del_proyecto');
                    $descripcion_del_proyecto = get_field('descripcion_del_proyecto');
                    $imagen_del_proyecto = get_field('imagen_del_proyecto');

                    if ($nombre_del_proyecto) {
                        echo '<h1>Nombre del Proyecto: ' . esc_html($nombre_del_proyecto) . '</h1>';
                    }

                    if ($descripcion_del_proyecto) {
                        echo '<p>Descripción del Proyecto: ' . esc_html($descripcion_del_proyecto) . '</p>';
                    }

                    if ($imagen_del_proyecto) {
                        // Si el campo imagen está configurado para devolver un array
                        if (is_array($imagen_del_proyecto)) {
                            $imagen_url = $imagen_del_proyecto['url'];
                        } else {
                            $imagen_url = $imagen_del_proyecto;
                        }

                        echo '<div class="acf-image-wrapper"><img src="' . esc_url($imagen_url) . '" alt="' . esc_attr($nombre_del_proyecto) . '"></div>';
                    }
                }
                ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

        <?php
        endwhile; // Fin del bucle de WordPress
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); // Incluye el pie de página que contiene los enlaces de scripts ?>


 