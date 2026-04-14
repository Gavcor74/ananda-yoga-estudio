# Ananda Yoga Estudio

Repositorio de trabajo para la web de Nieves, profesora de yoga con negocio físico.

## Qué hay dentro

- `index.html`, `styles.css`, `script.js`
  Prototipo estático inicial de la landing.

- `wordpress-theme/ananda-yoga-estudio/`
  Tema WordPress clásico listo para copiar a `wp-content/themes/`.

- `preview-server.js`
  Servidor estático local para la vista previa.

- `run-preview.cmd`
  Lanzador para Windows con doble clic.

- `open-preview.cmd`
  Abre la landing directamente en el navegador, sin servidor.

## Estructura del tema WordPress

- `style.css`
  Cabecera del tema y carga de estilos.

- `functions.php`
  Soporte del tema, carga de assets, compatibilidad básica con WooCommerce y campos clave en el personalizador.

- `front-page.php`
  Landing principal de captación.

- `index.php`
  Plantilla de respaldo para páginas o entradas.

- `assets/css/main.css`
  Sistema visual completo.

- `assets/js/main.js`
  Animaciones suaves de entrada.

- `assets/images/logo-ananda.jpeg`
  Logo base incluido en el propio tema.

## Cómo usarlo en otro portátil o en otro Codex

1. Clona este repositorio.
2. Copia la carpeta `wordpress-theme/ananda-yoga-estudio/` dentro de `wp-content/themes/` de tu instalación WordPress.
3. Activa el tema desde WordPress.
4. Ve a `Ajustes > Lectura` y usa una página estática como portada si tu instalación lo necesita.
5. Ve a `Apariencia > Personalizar` para cambiar:
   - titular principal
   - texto del hero
   - CTAs
   - correo
   - teléfono
   - ubicación
   - enlace de WhatsApp
6. Sustituye el logo desde `Apariencia > Personalizar > Identidad del sitio` si quieres usar otra versión.
7. Si solo quieres ver la landing estática, ejecuta `run-preview.cmd` desde la carpeta del repositorio.
8. Si prefieres abrirla sin servidor, ejecuta `open-preview.cmd`.

## Recomendación de siguiente fase

Para dejarla lista para producción de verdad, lo siguiente sería:

1. Sustituir textos de ejemplo por los reales del negocio.
2. Conectar WhatsApp, formulario y datos reales.
3. Añadir horarios, testimonios y bloque de preguntas frecuentes.
4. Preparar plantilla interna de "Sobre Nieves".
5. Integrar WooCommerce cuando llegue la fase tienda.
