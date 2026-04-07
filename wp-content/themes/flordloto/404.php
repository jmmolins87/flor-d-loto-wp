<?php $catalog_url = get_post_type_archive_link("floral_collection") ?: home_url("/catalogo/"); ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class("fld-not-found-body"); ?>>
<?php wp_body_open(); ?>
<main class="fld-not-found">
  <div class="fld-not-found__media" aria-hidden="true">
    <video class="fld-not-found__video" autoplay muted playsinline webkit-playsinline preload="auto">
      <source src="<?php echo esc_url(get_template_directory_uri() . "/assets/not-found-bg.mp4"); ?>" type="video/mp4">
      <source src="<?php echo esc_url(get_template_directory_uri() . "/assets/not-found-bg.webm"); ?>" type="video/webm">
      <source src="<?php echo esc_url(get_template_directory_uri() . "/assets/not-found-bg.ogv"); ?>" type="video/ogg">
    </video>
    <div class="fld-not-found__overlay"></div>
  </div>
  <div class="fld-shell fld-not-found__shell">
    <section class="fld-not-found__panel fld-surface">
      <span class="fld-pill">404</span>
      <p class="fld-not-found__eyebrow">Ruta no encontrada</p>
      <h1>La pagina que buscas se ha perdido entre tallos, hojas y movimiento.</h1>
      <p class="fld-meta" style="margin-top:1rem;">Vuelve al inicio o entra al catalogo para seguir navegando desde una ruta valida.</p>
      <div class="fld-button-row">
        <?php echo flordloto_button("Volver al inicio", home_url("/")); ?>
        <?php echo flordloto_button("Ir al catalogo", $catalog_url, "outline"); ?>
      </div>
    </section>
  </div>
</main>
<?php wp_footer(); ?>
</body>
</html>
