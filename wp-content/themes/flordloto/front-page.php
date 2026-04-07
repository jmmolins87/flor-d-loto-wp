<?php
get_header();
$settings = flordloto_site_settings();
$home = flordloto_home_settings();
$services = $home["services"];
$collections = flordloto_get_entries("floral_collection", 3);
$occasions = flordloto_get_entries("floral_occasion", 3);
$contact_url = flordloto_page_url("contacto");
$primary_cta_url = flordloto_primary_cta_url();
$primary_cta_new_tab = $primary_cta_url !== $contact_url;
$schedule_now = flordloto_now_schedule_summary();
$catalog_url = get_post_type_archive_link("floral_collection") ?: home_url("/catalogo/");
$occasions_url = get_post_type_archive_link("floral_occasion") ?: home_url("/ocasiones/");
?>
<main>
  <section class="fld-shell fld-section fld-section--hero">
    <div class="fld-home-grid">
      <div class="fld-home-copy">
        <span class="fld-pill"><?php echo esc_html($home["hero"]["eyebrow"]); ?></span>
        <h1 class="fld-display"><?php echo esc_html($home["hero"]["title"]); ?></h1>
        <p class="fld-lead"><?php echo esc_html($home["hero"]["subtitle"]); ?></p>
        <div class="fld-badge-row">
          <span class="fld-tag">Flor fresca</span>
          <span class="fld-tag fld-tag--soft">Segovia</span>
          <span class="fld-tag fld-tag--outline">Encargos a medida</span>
        </div>
        <div class="fld-button-row">
          <?php echo flordloto_button("Ver colecciones", $catalog_url); ?>
          <?php echo flordloto_button("Hablar por WhatsApp", $primary_cta_url, "outline", $primary_cta_new_tab); ?>
        </div>
      </div>
      <div class="fld-hero-card">
        <div class="fld-hero-chip-row">
          <span>Flor fresca</span>
          <span>Entrega local</span>
        </div>
        <div class="fld-hero-glow fld-hero-glow--left"></div>
        <div class="fld-hero-glow fld-hero-glow--right"></div>
        <div class="fld-hero-frame">
          <?php echo flordloto_image($home["hero"]["image"], "Ramo premium sobre mesa de piedra"); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="fld-shell fld-section">
    <div class="fld-intro-grid">
      <div>
        <?php flordloto_section_heading("El arte de las flores", $home["intro"]["title"], $home["intro"]["description"]); ?>
      </div>
      <div class="fld-grid fld-grid--2 fld-grid-tight fld-intro-cards">
        <?php foreach ($home["intro"]["cards"] as $card) : ?>
          <div class="fld-surface fld-mini-card"><p><?php echo esc_html($card); ?></p></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="fld-shell fld-section">
    <?php flordloto_section_heading("Nuestros servicios", "Servicio floral completo para regalar, mantener y asesorar con criterio.", "Flor de Loto Segovia no se limita a vender flores. Tambien entrega, mantiene y acompaña cada decision floral para que el resultado se vea bien y funcione de verdad en el contexto donde va a vivir."); ?>
    <div class="fld-service-grid">
      <?php foreach ($services as $index => $service) : ?>
        <article class="fld-surface fld-service-card">
          <div class="fld-service-top">
            <div>
              <span class="fld-pill"><?php echo esc_html($service["badge"]); ?></span>
              <h3><?php echo esc_html($service["title"]); ?></h3>
            </div>
            <div class="fld-service-icon"><?php echo esc_html((string) ($index + 1)); ?></div>
          </div>
          <p class="fld-service-text"><?php echo esc_html($service["description"]); ?></p>
          <div class="fld-service-includes">
            <p>Incluye</p>
          </div>
          <div class="fld-bullet-grid">
            <?php foreach ($service["bullets"] as $bullet) : ?>
              <div class="fld-bullet-card">
                <span class="fld-bullet-dot"></span>
                <span><?php echo esc_html($bullet); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="fld-shell fld-section">
    <div class="fld-section-head-row">
      <?php flordloto_section_heading("Colecciones", "Ramos y arreglos pensados para vivir bien en casa o regalar mejor."); ?>
      <a class="fld-inline-link" href="<?php echo esc_url($catalog_url); ?>">Ver todo el catalogo</a>
    </div>
    <div class="fld-card-grid">
      <?php foreach ($collections as $collection) : ?>
        <article class="fld-surface fld-showcase-card">
          <a href="<?php echo esc_url(get_permalink($collection)); ?>">
            <div class="fld-showcase-media"><?php echo flordloto_image(flordloto_post_image_url($collection->ID), get_the_title($collection)); ?></div>
            <div class="fld-showcase-body">
              <div class="fld-showcase-badges">
                <span class="fld-tag fld-tag--soft">Destacada</span>
                <span class="fld-tag fld-tag--outline">Coleccion floral</span>
              </div>
              <h3><?php echo esc_html(get_the_title($collection)); ?></h3>
              <p><?php echo esc_html(get_the_excerpt($collection)); ?></p>
              <span class="fld-inline-link">Ver coleccion</span>
            </div>
          </a>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="fld-shell fld-section">
    <div class="fld-section-head-row">
      <?php flordloto_section_heading("Ocasiones", "Guias sutiles para regalar flores con sentido y sin duda."); ?>
      <a class="fld-inline-link" href="<?php echo esc_url($occasions_url); ?>">Ver ocasiones</a>
    </div>
    <div class="fld-occasion-grid">
      <?php foreach ($occasions as $occasion) : ?>
        <article class="fld-surface fld-showcase-card fld-showcase-card--occasion">
          <a href="<?php echo esc_url(get_permalink($occasion)); ?>">
            <div class="fld-showcase-media fld-showcase-media--wide"><?php echo flordloto_image(flordloto_post_image_url($occasion->ID), get_the_title($occasion)); ?></div>
            <div class="fld-showcase-body">
              <h3><?php echo esc_html(get_the_title($occasion)); ?></h3>
              <p><?php echo esc_html(get_the_excerpt($occasion)); ?></p>
              <span class="fld-inline-link">Explorar ocasion</span>
            </div>
          </a>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="fld-shell fld-section">
    <div class="fld-surface fld-banner-block">
      <div class="fld-banner-media">
        <?php echo flordloto_image($home["promo"]["image"], "Entrega y preparacion de encargos florales"); ?>
      </div>
      <div class="fld-banner-copy">
        <span class="fld-pill">Servicio destacado</span>
        <h2><?php echo esc_html($home["promo"]["title"]); ?></h2>
        <p><?php echo esc_html($home["promo"]["text"]); ?></p>
        <?php echo flordloto_button("Cuentanos tu idea", $contact_url); ?>
      </div>
    </div>
  </section>

  <section class="fld-shell fld-section">
    <div class="fld-surface fld-brand-panel">
      <div class="fld-brand-inner">
        <div>
          <?php flordloto_section_heading("Diferencial de marca", $home["brand"]["title"], $home["brand"]["text"]); ?>
        </div>
        <div class="fld-brand-media"><?php echo flordloto_image($home["brand"]["image"], "Interior de estudio floral"); ?></div>
      </div>
      <div class="fld-point-grid">
        <?php foreach ($home["brand"]["points"] as $point) : ?>
          <div class="fld-point-card"><?php echo esc_html($point); ?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="fld-shell fld-section fld-section--compact">
    <div class="fld-contact-overview-grid">
      <div class="fld-surface fld-contact-overview">
        <span class="fld-pill">Contacto resumido</span>
        <h2><?php echo esc_html($home["contact_summary"]["title"]); ?></h2>
        <p><?php echo esc_html($home["contact_summary"]["text"]); ?></p>
        <div class="fld-badge-row">
          <span class="fld-tag">Segovia</span>
          <span class="fld-tag fld-tag--soft">Pedido online</span>
          <span class="fld-tag fld-tag--outline">Entrega a domicilio</span>
        </div>
        <div class="fld-contact-box">
          <p class="fld-contact-box__title">Entregas a domicilio</p>
          <div class="fld-hours-grid">
            <?php foreach ($home["contact_summary"]["hours_rows"] as $row) : ?>
              <div class="fld-hours-card"><strong><?php echo esc_html($row["label"]); ?></strong><span><?php echo esc_html($row["value"]); ?></span></div>
            <?php endforeach; ?>
          </div>
        </div>
        <a class="fld-inline-link" href="<?php echo esc_url($contact_url); ?>">Ir a contacto</a>
      </div>
      <div class="fld-contact-side">
        <div class="fld-surface fld-side-card">
          <div class="fld-side-card__inner">
            <p class="fld-side-label">Ubicacion</p>
            <p><?php echo esc_html($home["contact_summary"]["location_text"]); ?></p>
          </div>
          <div class="fld-side-card__inner">
            <p class="fld-side-label">Encargos</p>
            <p><?php echo esc_html($home["contact_summary"]["orders_text"]); ?></p>
          </div>
        </div>
        <div class="fld-surface fld-side-card fld-side-card--schedule">
          <div class="fld-side-card__inner">
            <p class="fld-side-label">Horario en tiempo real</p>
            <p class="fld-live-status <?php echo $schedule_now["is_open"] ? "is-open" : "is-closed"; ?>">
              <?php echo esc_html($schedule_now["status_label"]); ?>
            </p>
          </div>
          <div class="fld-side-card__inner">
            <p class="fld-side-label"><?php echo esc_html($schedule_now["today_label"]); ?></p>
            <p><?php echo esc_html($schedule_now["today_value"]); ?></p>
          </div>
          <div class="fld-side-card__inner">
            <p class="fld-side-label">Estado</p>
            <p><?php echo esc_html($schedule_now["next_change"]); ?></p>
          </div>
          <div class="fld-side-card__inner">
            <p class="fld-side-label">Actualizacion</p>
            <p><?php echo esc_html($schedule_now["timestamp"]); ?></p>
          </div>
          <div class="fld-button-row">
            <?php echo flordloto_button("Confirmar por WhatsApp", $primary_cta_url, "outline", $primary_cta_new_tab); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="fld-shell fld-section">
    <div class="fld-surface fld-cta-block">
      <div class="fld-cta-copy">
        <span class="fld-pill">Encargo y contacto</span>
        <h2><?php echo esc_html($home["final_cta"]["title"]); ?></h2>
        <p><?php echo esc_html($home["final_cta"]["text"]); ?></p>
      </div>
      <div class="fld-button-row">
        <?php echo flordloto_button("Contactar", $contact_url); ?>
        <?php echo flordloto_button("Explorar ocasiones", $occasions_url, "outline"); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
