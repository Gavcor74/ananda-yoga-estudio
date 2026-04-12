<?php
/**
 * Theme setup for Ananda Yoga Estudio.
 *
 * @package AnandaYogaEstudio
 */

if (! defined('ABSPATH')) {
    exit;
}

function ananda_yoga_get_default_content(): array
{
    return [
        'hero_eyebrow' => 'Yoga presencial en Benacazón',
        'hero_title' => 'Un espacio para parar, respirar y volver a ti con calma.',
        'hero_text' => 'Nieves acompaña clases de yoga pensadas para personas reales: sin prisas, sin exigencia y con una atención cercana que te ayude a crear una rutina de bienestar sostenible.',
        'primary_cta_label' => 'Quiero información',
        'primary_cta_url' => '#contacto',
        'secondary_cta_label' => 'Descubrir el estudio',
        'secondary_cta_url' => '#metodo',
        'contact_email' => 'hola@anandayogaestudio.com',
        'contact_phone' => '+34 600 000 000',
        'contact_location' => 'Benacazón, Sevilla',
        'contact_whatsapp_url' => '',
    ];
}

function ananda_yoga_theme_mod(string $key): string
{
    $defaults = ananda_yoga_get_default_content();

    return (string) get_theme_mod($key, $defaults[$key] ?? '');
}

function ananda_yoga_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 320,
        'width'       => 320,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('woocommerce');

    register_nav_menus([
        'primary' => __('Menú principal', 'ananda-yoga-estudio'),
    ]);
}
add_action('after_setup_theme', 'ananda_yoga_setup');

function ananda_yoga_enqueue_assets(): void
{
    wp_enqueue_style(
        'ananda-yoga-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Manrope:wght@400;500;600;700&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'ananda-yoga-style',
        get_stylesheet_uri(),
        ['ananda-yoga-fonts'],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'ananda-yoga-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'ananda_yoga_enqueue_assets');

function ananda_yoga_customize_register(WP_Customize_Manager $wp_customize): void
{
    $defaults = ananda_yoga_get_default_content();

    $wp_customize->add_section('ananda_yoga_landing', [
        'title'       => __('Landing principal', 'ananda-yoga-estudio'),
        'priority'    => 30,
        'description' => __('Edita los textos y datos clave de la landing.', 'ananda-yoga-estudio'),
    ]);

    $fields = [
        'hero_eyebrow' => __('Etiqueta superior', 'ananda-yoga-estudio'),
        'hero_title' => __('Titular principal', 'ananda-yoga-estudio'),
        'hero_text' => __('Texto principal', 'ananda-yoga-estudio'),
        'primary_cta_label' => __('Texto CTA principal', 'ananda-yoga-estudio'),
        'primary_cta_url' => __('Enlace CTA principal', 'ananda-yoga-estudio'),
        'secondary_cta_label' => __('Texto CTA secundario', 'ananda-yoga-estudio'),
        'secondary_cta_url' => __('Enlace CTA secundario', 'ananda-yoga-estudio'),
        'contact_email' => __('Correo de contacto', 'ananda-yoga-estudio'),
        'contact_phone' => __('Teléfono de contacto', 'ananda-yoga-estudio'),
        'contact_location' => __('Ubicación', 'ananda-yoga-estudio'),
        'contact_whatsapp_url' => __('Enlace de WhatsApp', 'ananda-yoga-estudio'),
    ];

    $priority = 10;

    foreach ($fields as $field => $label) {
        $wp_customize->add_setting($field, [
            'default'           => $defaults[$field] ?? '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);

        if (str_contains($field, '_url')) {
            $wp_customize->get_setting($field)->sanitize_callback = 'esc_url_raw';
        }

        if (in_array($field, ['hero_title', 'hero_text'], true)) {
            $wp_customize->get_setting($field)->sanitize_callback = 'sanitize_textarea_field';
        }

        $wp_customize->add_control($field, [
            'label'    => $label,
            'section'  => 'ananda_yoga_landing',
            'type'     => in_array($field, ['hero_title', 'hero_text'], true) ? 'textarea' : 'text',
            'priority' => $priority,
        ]);

        $priority += 10;
    }
}
add_action('customize_register', 'ananda_yoga_customize_register');
