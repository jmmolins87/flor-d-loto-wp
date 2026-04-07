<?php get_header(); ?>
<main class="fld-section">
  <div class="fld-shell">
    <?php flordloto_breadcrumbs(); ?>
    <section class="fld-page-hero">
      <div class="fld-page-hero__inner fld-surface">
        <span class="fld-pill">Ocasiones</span>
        <h1>Regalar flores tambien puede ser una decision tranquila.</h1>
        <p class="fld-meta" style="margin-top:1rem;">Agrupamos propuestas por tipo de momento para ayudar a encontrar el tono adecuado sin caer en lo generico.</p>
      </div>
    </section>

    <section class="fld-section">
      <div class="fld-card-grid fld-card-grid--intro">
        <div class="fld-surface fld-mini-card"><p>Cumpleaños, aniversarios y agradecimientos con una lectura actual.</p></div>
        <div class="fld-surface fld-mini-card"><p>Opciones faciles de adaptar a presupuesto, tono y formato de entrega.</p></div>
        <div class="fld-surface fld-mini-card"><p>Atencion directa para resolver rapido cuando necesitas regalar bien.</p></div>
      </div>

      <div class="fld-occasion-grid">
        <?php while (have_posts()) : the_post(); $image = flordloto_post_image_url(get_the_ID()); ?>
          <article class="fld-surface fld-showcase-card fld-showcase-card--occasion">
            <a href="<?php the_permalink(); ?>">
            <?php if ($image) : ?>
              <div class="fld-showcase-media fld-showcase-media--wide"><?php echo flordloto_image($image, get_the_title()); ?></div>
            <?php endif; ?>
            <div class="fld-showcase-body">
              <h3><?php the_title(); ?></h3>
              <p><?php echo esc_html(get_the_excerpt()); ?></p>
              <span class="fld-inline-link">Explorar ocasion</span>
            </div>
            </a>
          </article>
        <?php endwhile; ?>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
