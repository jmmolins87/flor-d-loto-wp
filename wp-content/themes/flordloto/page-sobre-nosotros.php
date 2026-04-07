<?php
get_header();
$options = flordloto_get_theme_options();
?>
<main class="fld-section">
  <div class="fld-shell">
    <?php flordloto_breadcrumbs(); ?>
    <section class="fld-page-wrap fld-page-wrap--split">
      <div class="fld-page-block fld-surface">
        <span class="fld-eyebrow">Sobre nosotros</span>
        <h1 style="margin-top:1rem;font-size:clamp(2.4rem,4.8vw,4.7rem);">Flores para momentos reales, sin artificio.</h1>
        <p class="fld-meta" style="margin-top:1rem;">Flor de Loto Segovia nace para acercar una floristería actual a personas que buscan belleza, calma y una experiencia sencilla al comprar flores.</p>
        <div style="margin-top:1.5rem;">
          <?php flordloto_render_page_content(); ?>
        </div>
      </div>
      <div class="fld-page-media fld-surface">
        <?php echo flordloto_image($options["about_image"], "Equipo floral preparando arreglos"); ?>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
