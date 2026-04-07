<?php get_header(); ?>
<main class="fld-section">
  <div class="fld-shell">
    <section class="fld-page-block fld-surface">
      <span class="fld-eyebrow">Contenido</span>
      <h1 style="margin-top:1rem;"><?php bloginfo("name"); ?></h1>
      <div class="fld-richtext" style="margin-top:1.5rem;">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article style="margin-bottom:2rem;">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
          </article>
        <?php endwhile; endif; ?>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
