<?php get_header(); ?>
<?php $primary_cta_url = flordloto_primary_cta_url(); ?>
<?php $primary_cta_new_tab = $primary_cta_url !== flordloto_page_url("contacto"); ?>
<main class="fld-section">
  <div class="fld-shell">
    <?php flordloto_breadcrumbs(); ?>
    <?php $image = flordloto_post_image_url(get_the_ID()); ?>
    <section class="fld-page-hero">
      <div class="fld-page-hero__inner fld-surface">
        <span class="fld-pill">Catalogo</span>
        <h1><?php the_title(); ?></h1>
        <p class="fld-meta" style="margin-top:1rem;"><?php echo esc_html(get_the_excerpt()); ?></p>
      </div>
    </section>

    <section class="fld-section">
      <div class="fld-page-wrap fld-page-wrap--split">
        <div class="fld-page-block fld-surface">
          <div class="fld-richtext">
            <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
          </div>
          <div class="fld-button-row">
            <?php echo flordloto_button("Solicitar esta coleccion", $primary_cta_url, "primary", $primary_cta_new_tab); ?>
            <?php echo flordloto_button("Volver al catalogo", get_post_type_archive_link("floral_collection"), "outline"); ?>
          </div>
        </div>
        <?php if ($image) : ?>
          <div class="fld-page-media fld-surface">
            <?php echo flordloto_image($image, get_the_title()); ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
