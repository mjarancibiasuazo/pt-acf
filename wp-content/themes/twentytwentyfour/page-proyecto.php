<?php
/**
 * Template Name: Proyecto
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        // Start the loop.
        while ( have_posts() ) :
            the_post();

            // Output the post content.
            the_content();

            // Output ACF fields
            $nombre_proyecto = get_field('nombre_del_proyecto');
            $descripcion_proyecto = get_field('descripcion_del_proyecto');
            $imagen_proyecto = get_field('imagen_del_proyecto');
            $size = 'full'; // Image size

            // Display the custom fields
            if( $nombre_proyecto ) {
                echo '<h2>' . esc_html( $nombre_proyecto ) . '</h2>';
            }

            if( $descripcion_proyecto ) {
                echo '<h3>Descripción del Proyecto</h3>';
                echo wp_kses_post( $descripcion_proyecto );
            }

            if( $imagen_proyecto ) {
                echo wp_get_attachment_image( $imagen_proyecto, $size );
            }

            // End the loop.
        endwhile;
        ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
