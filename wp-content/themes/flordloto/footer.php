<?php $settings = flordloto_site_settings(); ?>
<footer class="fld-site-footer">
  <div class="fld-shell">
    <div class="fld-site-footer__inner fld-surface">
      <div class="fld-footer-grid">
        <div class="fld-footer-brand">
          <div class="fld-footer-brand-row">
            <span class="fld-footer-logo"><?php echo flordloto_brand_markup(); ?></span>
            <h2><?php echo esc_html($settings["site_name"]); ?></h2>
          </div>
          <p class="fld-meta"><?php echo esc_html($settings["description"]); ?></p>
        </div>
        <div class="fld-footer-col">
          <h3>Contacto</h3>
          <p><?php echo esc_html($settings["phone_label"]); ?></p>
          <p><?php echo esc_html($settings["email"]); ?></p>
          <p><?php echo esc_html($settings["address"]); ?></p>
        </div>
        <div class="fld-footer-col">
          <h3>Compañia</h3>
          <a href="<?php echo esc_url(get_post_type_archive_link("floral_collection") ?: home_url("/catalogo/")); ?>">Catalogo</a>
          <a href="<?php echo esc_url(get_post_type_archive_link("floral_occasion") ?: home_url("/ocasiones/")); ?>">Ocasiones</a>
          <a href="<?php echo esc_url(flordloto_page_url("sobre-nosotros")); ?>">Sobre nosotros</a>
          <a href="<?php echo esc_url(flordloto_page_url("faqs")); ?>">FAQ's</a>
        </div>
        <div class="fld-footer-col">
          <h3>Legal</h3>
          <a href="<?php echo esc_url(flordloto_page_url("legal")); ?>">Legal</a>
          <a href="<?php echo esc_url(flordloto_page_url("politica-privacidad")); ?>">Privacidad</a>
          <a href="<?php echo esc_url(flordloto_page_url("politica-cookies")); ?>">Cookies</a>
          <a href="<?php echo esc_url(flordloto_page_url("terminos-de-uso")); ?>">Términos</a>
          <a href="<?php echo esc_url(flordloto_page_url("seguridad")); ?>">Seguridad</a>
        </div>
      </div>
      <div class="fld-footer-bottom">
        <p>© <?php echo esc_html(wp_date("Y")); ?> <?php echo esc_html($settings["site_name"]); ?>. Todos los derechos reservados.</p>
        <div class="fld-footer-bottom-links">
          <a href="<?php echo esc_url(flordloto_page_url("contacto")); ?>">Contacto</a>
          <a href="<?php echo esc_url($settings["instagram"]); ?>" target="_blank" rel="noreferrer">Instagram</a>
          <a href="<?php echo esc_url($settings["facebook"]); ?>" target="_blank" rel="noreferrer">Facebook</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
