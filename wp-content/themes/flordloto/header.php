<?php
$settings = flordloto_site_settings();
$primary_nav_items = flordloto_primary_navigation_items();
$order_links = [];

if (!empty($settings["glovo"])) {
    $order_links[] = ["label" => "Glovo", "url" => $settings["glovo"]];
}

if (!empty($settings["justeat"])) {
    $order_links[] = ["label" => "Just Eat", "url" => $settings["justeat"]];
}

if (!empty($settings["whatsapp"])) {
    $order_links[] = ["label" => "WhatsApp", "url" => $settings["whatsapp"]];
}

if (empty($order_links)) {
    $order_links[] = ["label" => "Contacto", "url" => flordloto_page_url("contacto")];
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="fld-site-header">
  <div class="fld-shell">
    <div class="fld-site-header__inner">
      <a class="fld-brand-mark" href="<?php echo esc_url(home_url("/")); ?>" aria-label="<?php echo esc_attr($settings["site_name"]); ?>">
        <?php echo flordloto_brand_markup(); ?>
      </a>
      <nav class="fld-nav" aria-label="Principal">
        <ul>
          <?php foreach ($primary_nav_items as $item) : ?>
            <li><a href="<?php echo esc_url($item["url"]); ?>"><?php echo esc_html($item["title"]); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>
      <div class="fld-header-actions">
        <details class="fld-order-menu">
          <summary class="fld-order-button" aria-label="Hacer pedido">Hacer pedido</summary>
          <div class="fld-order-menu__panel">
            <?php foreach ($order_links as $link) : ?>
              <a href="<?php echo esc_url($link["url"]); ?>" target="_blank" rel="noreferrer"><?php echo esc_html($link["label"]); ?></a>
            <?php endforeach; ?>
          </div>
        </details>
        <details class="fld-mobile-nav">
          <summary aria-label="Abrir navegacion">Menu</summary>
          <nav aria-label="Principal movil">
            <ul>
              <?php foreach ($primary_nav_items as $item) : ?>
                <li><a href="<?php echo esc_url($item["url"]); ?>"><?php echo esc_html($item["title"]); ?></a></li>
              <?php endforeach; ?>
            </ul>
          </nav>
        </details>
      </div>
    </div>
  </div>
</header>
