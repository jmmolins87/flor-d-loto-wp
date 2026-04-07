<?php
get_header();
$settings = flordloto_site_settings();
$home = flordloto_home_settings();
?>
<main class="fld-section">
  <div class="fld-shell">
    <?php flordloto_breadcrumbs(); ?>
    <section class="fld-page-hero">
      <div class="fld-page-hero__inner fld-surface">
        <span class="fld-pill">Contacto</span>
        <h1>Hablemos de tu ramo, tu regalo o tu evento.</h1>
        <p class="fld-meta" style="margin-top:1rem;">Puedes escribirnos para un encargo puntual, una entrega especial o una propuesta floral adaptada a tu idea.</p>
      </div>
    </section>

    <section class="fld-section">
      <div class="fld-contact-info-grid">
          <article class="fld-contact-card fld-surface">
            <h3>Teléfono</h3>
            <p>Atención de lunes a sábado en horario comercial.</p>
            <a href="tel:+34691264112"><?php echo esc_html($settings["phone_label"]); ?></a>
          </article>
          <article class="fld-contact-card fld-surface">
            <h3>WhatsApp</h3>
            <p>La vía más rápida para resolver encargos y dudas.</p>
            <a href="<?php echo esc_url($settings["whatsapp"]); ?>" target="_blank" rel="noreferrer"><?php echo esc_html($settings["phone_label"]); ?></a>
          </article>
          <article class="fld-contact-card fld-surface">
            <h3>Email</h3>
            <p>Ideal para eventos, presupuestos y colaboraciones.</p>
            <a href="mailto:<?php echo esc_attr($settings["email"]); ?>"><?php echo esc_html($settings["email"]); ?></a>
          </article>
      </div>

      <div class="fld-contact-main-grid">
        <div class="fld-contact-side">
          <article class="fld-contact-card fld-surface">
            <h3>Ubicación</h3>
            <p>Estamos en <?php echo esc_html($settings["address"]); ?>, con atención local para recogidas, encargos y entregas en la zona.</p>
            <div class="fld-button-row fld-button-row--compact">
              <?php echo flordloto_button("Abrir en Google Maps", "https://www.google.de/maps/place/P.%C2%BA+Conde+de+Sep%C3%BAlveda,+24,+40006+Segovia/", "outline", true); ?>
              <?php echo flordloto_button("Pedir en Glovo", $settings["glovo"], "primary", true); ?>
              <?php echo flordloto_button("Pedir en Just Eat", $settings["justeat"], "outline", true); ?>
            </div>
          </article>

          <article class="fld-contact-card fld-surface">
            <div class="fld-contact-box">
              <p class="fld-contact-box__title">Horario y reparto</p>
              <div class="fld-hours-grid">
                <?php foreach ($home["contact_summary"]["hours_rows"] as $row) : ?>
                  <div class="fld-hours-card">
                    <strong><?php echo esc_html($row["label"]); ?></strong>
                    <span><?php echo esc_html($row["value"]); ?></span>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </article>
        </div>

        <article class="fld-form-wrap fld-surface">
          <span class="fld-pill">Formulario</span>
          <h2 style="margin-top:1rem;font-size:2.2rem;">Cuéntanos qué necesitas</h2>
          <p class="fld-contact-form__intro">Cuanto más contexto nos des, mejor podremos proponerte una solución floral ajustada.</p>
          <div style="margin-top:1rem;">
            <?php flordloto_contact_feedback(); ?>
          </div>
          <form class="fld-contact-form" method="post" action="<?php echo esc_url(get_permalink()); ?>">
            <?php wp_nonce_field("flordloto_contact", "flordloto_contact_nonce"); ?>
            <div class="fld-form-row">
              <label>Nombre
                <input type="text" name="name" required>
              </label>
              <label>Email
                <input type="email" name="email" required>
              </label>
            </div>
            <div class="fld-form-row">
              <label>Teléfono
                <input type="text" name="phone" required>
              </label>
              <label>Ocasión
                <input type="text" name="occasion" required>
              </label>
            </div>
            <label>Mensaje
              <textarea name="message" required></textarea>
            </label>
            <label class="fld-checkbox">
              <input type="checkbox" name="privacy" value="1" required>
              <span>Acepto la política de privacidad y el tratamiento de mis datos para responder a esta solicitud.</span>
            </label>
            <button class="fld-button fld-button--primary" type="submit">Enviar solicitud</button>
          </form>
        </article>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
