<?php
/**
 * Fallback template.
 *
 * @package AnandaYogaEstudio
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="page-shell fallback-shell">
    <section class="section fallback-content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h1 class="fallback-title"><?php the_title(); ?></h1>
                    <div class="fallback-entry">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <article>
                <h1 class="fallback-title"><?php esc_html_e('Contenido no disponible', 'ananda-yoga-estudio'); ?></h1>
                <p><?php esc_html_e('Aún no hay contenido publicado en esta sección.', 'ananda-yoga-estudio'); ?></p>
            </article>
        <?php endif; ?>
    </section>
</main>
<?php
get_footer();
