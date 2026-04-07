<?php get_header(); ?>
<?php $catalog_copy = flordloto_catalog_copy(); ?>
<main class="fld-section">
  <div class="fld-shell">
    <?php flordloto_breadcrumbs(); ?>
    <section class="fld-page-hero">
      <div class="fld-page-hero__inner fld-surface">
        <span class="fld-pill">Catalogo</span>
        <h1>Colecciones para comprar con rapidez y seguir sintiendo que has elegido bien.</h1>
        <p class="fld-meta" style="margin-top:1rem;">Cada bloque responde a un uso real: regalo, casa, mesa o evento intimo. La lectura es clara y la estetica se mantiene serena.</p>
      </div>
    </section>

    <section class="fld-section">
      <div class="fld-card-grid fld-card-grid--intro">
        <div class="fld-surface fld-mini-card"><p>Ramos frescos y plantas para regalo inmediato o encargo.</p></div>
        <div class="fld-surface fld-mini-card"><p>Flores de boda, cestas y centros para momentos especiales.</p></div>
        <div class="fld-surface fld-mini-card"><p>Coronas y composiciones funerarias con trato rapido y respetuoso.</p></div>
      </div>

      <div class="fld-catalog-grid">
        <div class="fld-catalog-copy">
          <?php foreach ($catalog_copy as $paragraph) : ?>
            <p><?php echo esc_html(trim($paragraph)); ?></p>
          <?php endforeach; ?>
        </div>
        <div class="fld-grid fld-grid-tight">
          <div class="fld-surface fld-mini-panel"><span class="fld-pill">Compra con criterio</span><p>Cada coleccion responde a un uso concreto para que elegir sea mas rapido y con menos friccion.</p></div>
          <div class="fld-surface fld-mini-panel"><span class="fld-pill">Adaptacion real</span><p>Podemos ajustar formato, gama cromatica, presupuesto y nivel de presencia segun el encargo.</p></div>
          <div class="fld-surface fld-mini-panel"><span class="fld-pill">Entrega local</span><p>Preparamos propuestas pensadas para funcionar bien en Segovia y en encargos de proximidad.</p></div>
          <div class="fld-surface fld-mini-panel"><span class="fld-pill">Acompañamiento</span><p>Si el catalogo no resuelve del todo tu caso, usamos estas lineas como punto de partida para afinar.</p></div>
        </div>
      </div>

      <div class="fld-card-grid">
        <?php while (have_posts()) : the_post(); $image = flordloto_post_image_url(get_the_ID()); ?>
          <article class="fld-surface fld-showcase-card">
            <a href="<?php the_permalink(); ?>">
            <?php if ($image) : ?>
              <div class="fld-showcase-media"><?php echo flordloto_image($image, get_the_title()); ?></div>
            <?php endif; ?>
            <div class="fld-showcase-body">
              <div class="fld-showcase-badges">
                <span class="fld-tag fld-tag--outline">Coleccion floral</span>
              </div>
              <h3><?php the_title(); ?></h3>
              <p><?php echo esc_html(get_the_excerpt()); ?></p>
              <span class="fld-inline-link">Ver coleccion</span>
            </div>
            </a>
          </article>
        <?php endwhile; ?>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
