<?php get_header(); ?>
<main class="fld-section">
  <div class="fld-shell">
    <?php flordloto_breadcrumbs(); ?>
    <section class="fld-page-hero">
      <div class="fld-page-hero__inner fld-surface">
        <span class="fld-pill"><?php echo is_page("faqs") ? "Ayuda" : "Pagina"; ?></span>
        <h1><?php the_title(); ?></h1>
        <?php if (has_excerpt()) : ?>
          <p class="fld-meta" style="margin-top:1rem;"><?php echo esc_html(get_the_excerpt()); ?></p>
        <?php endif; ?>
      </div>
    </section>
    <section class="fld-section">
      <div class="fld-page-block fld-surface">
        <?php flordloto_render_page_content(); ?>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
