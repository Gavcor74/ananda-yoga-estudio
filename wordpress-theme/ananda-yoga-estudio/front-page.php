<?php
/**
 * Front page template.
 *
 * @package AnandaYogaEstudio
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();

$contact_email       = ananda_yoga_theme_mod('contact_email');
$contact_phone       = ananda_yoga_theme_mod('contact_phone');
$contact_location    = ananda_yoga_theme_mod('contact_location');
$whatsapp_url        = ananda_yoga_theme_mod('contact_whatsapp_url');
$primary_cta_url     = ananda_yoga_theme_mod('primary_cta_url');
$secondary_cta_url   = ananda_yoga_theme_mod('secondary_cta_url');
$default_logo        = get_template_directory_uri() . '/assets/images/logo-ananda.jpeg';
$primary_contact_url = $whatsapp_url ?: '#contacto';
?>

<div class="page-shell">
    <header class="hero" id="inicio">
        <nav class="topbar" aria-label="<?php esc_attr_e('Principal', 'ananda-yoga-estudio'); ?>">
            <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Ir al inicio', 'ananda-yoga-estudio'); ?>">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img
                        class="brand-logo"
                        src="<?php echo esc_url($default_logo); ?>"
                        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                    >
                <?php endif; ?>
            </a>

            <div class="nav-actions">
                <a class="nav-link" href="#clases"><?php esc_html_e('Clases', 'ananda-yoga-estudio'); ?></a>
                <a class="nav-link" href="#contacto"><?php esc_html_e('Reserva tu plaza', 'ananda-yoga-estudio'); ?></a>
            </div>
        </nav>

        <div class="hero-content">
            <p class="eyebrow"><?php echo esc_html(ananda_yoga_theme_mod('hero_eyebrow')); ?></p>
            <h1><?php echo esc_html(ananda_yoga_theme_mod('hero_title')); ?></h1>
            <p class="hero-copy"><?php echo esc_html(ananda_yoga_theme_mod('hero_text')); ?></p>

            <div class="hero-actions">
                <a class="button button-primary" href="<?php echo esc_url($primary_cta_url); ?>">
                    <?php echo esc_html(ananda_yoga_theme_mod('primary_cta_label')); ?>
                </a>
                <a class="button button-secondary" href="<?php echo esc_url($secondary_cta_url); ?>">
                    <?php echo esc_html(ananda_yoga_theme_mod('secondary_cta_label')); ?>
                </a>
            </div>

            <ul class="hero-highlights">
                <li><?php esc_html_e('Grupos reducidos', 'ananda-yoga-estudio'); ?></li>
                <li><?php esc_html_e('Clases para todos los niveles', 'ananda-yoga-estudio'); ?></li>
                <li><?php esc_html_e('Trato cercano y seguimiento', 'ananda-yoga-estudio'); ?></li>
            </ul>
        </div>

        <aside class="hero-card">
            <p class="card-label"><?php esc_html_e('Ahora captación, después tienda', 'ananda-yoga-estudio'); ?></p>
            <h2><?php esc_html_e('Una landing enfocada en convertir visitas en alumnas y alumnos.', 'ananda-yoga-estudio'); ?></h2>
            <p><?php esc_html_e('La web está planteada para transmitir confianza, explicar la propuesta de valor de Nieves y facilitar el primer contacto. La estructura también deja preparado el crecimiento futuro a una tienda online de productos propios.', 'ananda-yoga-estudio'); ?></p>
            <div class="hero-card-meta">
                <span><?php esc_html_e('Marca personal', 'ananda-yoga-estudio'); ?></span>
                <span><?php esc_html_e('Imagen serena', 'ananda-yoga-estudio'); ?></span>
                <span><?php esc_html_e('Escalable a WooCommerce', 'ananda-yoga-estudio'); ?></span>
            </div>
        </aside>
    </header>

    <main>
        <section class="section trust-strip">
            <div class="trust-item">
                <strong><?php esc_html_e('Objetivo principal', 'ananda-yoga-estudio'); ?></strong>
                <span><?php esc_html_e('Captar reservas e interesados desde el primer vistazo', 'ananda-yoga-estudio'); ?></span>
            </div>
            <div class="trust-item">
                <strong><?php esc_html_e('Formato ideal', 'ananda-yoga-estudio'); ?></strong>
                <span><?php esc_html_e('Landing corporativa clara, elegante y fácil de editar', 'ananda-yoga-estudio'); ?></span>
            </div>
            <div class="trust-item">
                <strong><?php esc_html_e('Evolución futura', 'ananda-yoga-estudio'); ?></strong>
                <span><?php esc_html_e('Tienda online con productos y recursos de la marca', 'ananda-yoga-estudio'); ?></span>
            </div>
        </section>

        <section class="section intro" id="metodo">
            <div class="section-heading">
                <p class="eyebrow"><?php esc_html_e('La experiencia', 'ananda-yoga-estudio'); ?></p>
                <h2><?php esc_html_e('Una práctica amable para sentirte mejor por dentro y por fuera.', 'ananda-yoga-estudio'); ?></h2>
                <p><?php esc_html_e('La propuesta de Ananda Yoga Estudio no se apoya en la exigencia, sino en la constancia, la escucha corporal y el acompañamiento cercano para que cada persona avance desde su punto de partida.', 'ananda-yoga-estudio'); ?></p>
            </div>

            <div class="cards">
                <article class="info-card">
                    <span class="card-number">01</span>
                    <h3><?php esc_html_e('Respiración y presencia', 'ananda-yoga-estudio'); ?></h3>
                    <p><?php esc_html_e('Cada sesión busca crear espacio mental y corporal para que salgas con más claridad, más calma y una sensación real de bienestar.', 'ananda-yoga-estudio'); ?></p>
                </article>

                <article class="info-card">
                    <span class="card-number">02</span>
                    <h3><?php esc_html_e('Movimiento adaptado', 'ananda-yoga-estudio'); ?></h3>
                    <p><?php esc_html_e('Las prácticas están guiadas con opciones y ajustes para distintos niveles, ideal para empezar yoga o retomar una rutina sin sentir presión.', 'ananda-yoga-estudio'); ?></p>
                </article>

                <article class="info-card">
                    <span class="card-number">03</span>
                    <h3><?php esc_html_e('Un espacio cercano', 'ananda-yoga-estudio'); ?></h3>
                    <p><?php esc_html_e('El valor diferencial está en el trato humano, los grupos reducidos y un ambiente donde cuidarse se siente accesible, bonito y sostenible.', 'ananda-yoga-estudio'); ?></p>
                </article>
            </div>
        </section>

        <section class="section quote-panel">
            <div class="quote-grid">
                <p class="quote"><?php esc_html_e('Cuidarte no tiene que sentirse como una meta más que cumplir, sino como un lugar al que poder volver.', 'ananda-yoga-estudio'); ?></p>
                <div class="quote-support">
                    <p class="eyebrow"><?php esc_html_e('Propuesta de valor', 'ananda-yoga-estudio'); ?></p>
                    <h2><?php esc_html_e('Yoga con identidad, cercanía y una estética serena que inspira confianza.', 'ananda-yoga-estudio'); ?></h2>
                    <p><?php esc_html_e('La referencia visual del proyecto funciona muy bien para una marca de yoga física: transmite calma, espiritualidad y un tono artesanal que ayuda a diferenciar el estudio.', 'ananda-yoga-estudio'); ?></p>
                </div>
            </div>
        </section>

        <section class="section classes" id="clases">
            <div class="section-heading">
                <p class="eyebrow"><?php esc_html_e('Clases y servicios', 'ananda-yoga-estudio'); ?></p>
                <h2><?php esc_html_e('Una oferta clara para ayudar a decidir rápido.', 'ananda-yoga-estudio'); ?></h2>
            </div>

            <div class="service-grid">
                <article class="service-card service-card-featured">
                    <p class="card-label"><?php esc_html_e('Servicio principal', 'ananda-yoga-estudio'); ?></p>
                    <h3><?php esc_html_e('Clases regulares presenciales', 'ananda-yoga-estudio'); ?></h3>
                    <p><?php esc_html_e('La opción principal de captación: clases guiadas por Nieves para crear continuidad, mejorar la movilidad y darte un espacio semanal de autocuidado.', 'ananda-yoga-estudio'); ?></p>
                    <ul>
                        <li><?php esc_html_e('Ideal para fidelización', 'ananda-yoga-estudio'); ?></li>
                        <li><?php esc_html_e('Base principal del negocio físico', 'ananda-yoga-estudio'); ?></li>
                        <li><?php esc_html_e('Enfoque en constancia y bienestar', 'ananda-yoga-estudio'); ?></li>
                    </ul>
                </article>

                <article class="service-card">
                    <p class="card-label"><?php esc_html_e('Iniciación', 'ananda-yoga-estudio'); ?></p>
                    <h3><?php esc_html_e('Yoga para empezar desde cero', 'ananda-yoga-estudio'); ?></h3>
                    <p><?php esc_html_e('Pensado para personas que sienten curiosidad por el yoga, pero necesitan una entrada amable, comprensible y sin sensación de ir por detrás.', 'ananda-yoga-estudio'); ?></p>
                </article>

                <article class="service-card">
                    <p class="card-label"><?php esc_html_e('Seguimiento', 'ananda-yoga-estudio'); ?></p>
                    <h3><?php esc_html_e('Acompañamiento cercano', 'ananda-yoga-estudio'); ?></h3>
                    <p><?php esc_html_e('La comunicación y la cercanía de Nieves se pueden convertir en un gran argumento comercial: no es solo una clase, es un espacio donde te sientes acompañada.', 'ananda-yoga-estudio'); ?></p>
                </article>
            </div>
        </section>

        <section class="section two-column">
            <div>
                <p class="eyebrow"><?php esc_html_e('Para quién es', 'ananda-yoga-estudio'); ?></p>
                <h2><?php esc_html_e('Una landing pensada para hablarle justo a la persona que necesita este espacio.', 'ananda-yoga-estudio'); ?></h2>
            </div>

            <div class="check-list">
                <p><?php esc_html_e('Si quieres empezar yoga y te frena pensar que necesitas experiencia previa.', 'ananda-yoga-estudio'); ?></p>
                <p><?php esc_html_e('Si buscas una actividad que te ayude a bajar el ritmo y sentirte mejor.', 'ananda-yoga-estudio'); ?></p>
                <p><?php esc_html_e('Si valoras un trato más humano y menos masificado que en otros centros.', 'ananda-yoga-estudio'); ?></p>
                <p><?php esc_html_e('Si te apetece sostener una rutina de autocuidado de forma realista.', 'ananda-yoga-estudio'); ?></p>
            </div>
        </section>

        <section class="section roadmap">
            <div class="section-heading">
                <p class="eyebrow"><?php esc_html_e('Crecimiento futuro', 'ananda-yoga-estudio'); ?></p>
                <h2><?php esc_html_e('La web puede nacer como landing y crecer después como tienda de marca.', 'ananda-yoga-estudio'); ?></h2>
            </div>

            <div class="timeline">
                <article class="timeline-item">
                    <span class="card-number"><?php esc_html_e('Fase 1', 'ananda-yoga-estudio'); ?></span>
                    <h3><?php esc_html_e('Captación de alumnas y alumnos', 'ananda-yoga-estudio'); ?></h3>
                    <p><?php esc_html_e('Hero potente, propuesta clara, beneficios, clases, preguntas frecuentes y llamada a la acción a WhatsApp o formulario.', 'ananda-yoga-estudio'); ?></p>
                </article>

                <article class="timeline-item">
                    <span class="card-number"><?php esc_html_e('Fase 2', 'ananda-yoga-estudio'); ?></span>
                    <h3><?php esc_html_e('Autoridad y contenido', 'ananda-yoga-estudio'); ?></h3>
                    <p><?php esc_html_e('Página sobre Nieves, testimonios, horarios, blog o recursos para reforzar confianza y posicionamiento local.', 'ananda-yoga-estudio'); ?></p>
                </article>

                <article class="timeline-item">
                    <span class="card-number"><?php esc_html_e('Fase 3', 'ananda-yoga-estudio'); ?></span>
                    <h3><?php esc_html_e('Tienda online integrada', 'ananda-yoga-estudio'); ?></h3>
                    <p><?php esc_html_e('WooCommerce para vender productos propios sin rehacer la web: misma identidad visual, mismo CMS y una evolución limpia.', 'ananda-yoga-estudio'); ?></p>
                </article>
            </div>
        </section>

        <section class="section contact" id="contacto">
            <div class="section-heading">
                <p class="eyebrow"><?php esc_html_e('Reserva tu plaza', 'ananda-yoga-estudio'); ?></p>
                <h2><?php esc_html_e('Una llamada a la acción directa, clara y preparada para convertir.', 'ananda-yoga-estudio'); ?></h2>
                <p><?php esc_html_e('He dejado textos de ejemplo para que puedas sustituir después los datos finales de contacto, horarios, enlaces de WhatsApp o formulario real sin rehacer la estructura.', 'ananda-yoga-estudio'); ?></p>
            </div>

            <div class="contact-layout">
                <div class="contact-box">
                    <?php if ($contact_email) : ?>
                        <a class="contact-link" href="mailto:<?php echo esc_attr(antispambot($contact_email)); ?>"><?php echo esc_html($contact_email); ?></a>
                    <?php endif; ?>

                    <?php if ($contact_phone) : ?>
                        <a class="contact-link" href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $contact_phone)); ?>"><?php echo esc_html($contact_phone); ?></a>
                    <?php endif; ?>

                    <?php if ($contact_location) : ?>
                        <p class="contact-note"><?php echo esc_html($contact_location); ?></p>
                    <?php endif; ?>

                    <?php if ($whatsapp_url) : ?>
                        <p class="contact-note">
                            <a class="button button-primary" href="<?php echo esc_url($primary_contact_url); ?>"><?php esc_html_e('Escribir por WhatsApp', 'ananda-yoga-estudio'); ?></a>
                        </p>
                    <?php endif; ?>
                </div>

                <div class="contact-panel">
                    <h3><?php esc_html_e('Qué conviene añadir en la versión final', 'ananda-yoga-estudio'); ?></h3>
                    <ul>
                        <li><?php esc_html_e('Enlace directo a WhatsApp con mensaje precargado', 'ananda-yoga-estudio'); ?></li>
                        <li><?php esc_html_e('Horario real o próximos grupos', 'ananda-yoga-estudio'); ?></li>
                        <li><?php esc_html_e('Formulario breve de captación', 'ananda-yoga-estudio'); ?></li>
                        <li><?php esc_html_e('Instagram o red principal del estudio', 'ananda-yoga-estudio'); ?></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
