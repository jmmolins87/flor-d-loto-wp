<?php

require_once get_template_directory() . "/inc/data.php";
require_once get_template_directory() . "/inc/helpers.php";

function flordloto_setup(): void
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo", [
        "height" => 160,
        "width" => 160,
        "flex-height" => true,
        "flex-width" => true,
    ]);
    add_theme_support("html5", ["search-form", "comment-form", "comment-list", "gallery", "caption", "style", "script"]);

    register_nav_menus([
        "primary" => __("Menu principal", "flordloto"),
        "footer_legal" => __("Menu legal", "flordloto"),
    ]);
}
add_action("after_setup_theme", "flordloto_setup");

function flordloto_enqueue_assets(): void
{
    wp_enqueue_style("flordloto-style", get_stylesheet_uri(), [], "1.1.1");
}
add_action("wp_enqueue_scripts", "flordloto_enqueue_assets");

function flordloto_favicon_tags(): void
{
    if (has_site_icon()) {
        return;
    }

    $assets_url = get_template_directory_uri() . "/assets";
    echo '<link rel="icon" href="' . esc_url($assets_url . "/favicon.ico") . '" sizes="any">' . "\n";
    echo '<link rel="icon" href="' . esc_url($assets_url . "/favicon-512.png") . '" type="image/png">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url($assets_url . "/apple-touch-icon.png") . '">' . "\n";
}
add_action("wp_head", "flordloto_favicon_tags");

function flordloto_register_theme_settings(): void
{
    register_setting("flordloto_theme_options_group", "flordloto_theme_options", [
        "type" => "array",
        "sanitize_callback" => "flordloto_sanitize_theme_options",
        "default" => flordloto_default_theme_options(),
    ]);
}
add_action("admin_init", "flordloto_register_theme_settings");

function flordloto_sanitize_theme_options($input): array
{
    $defaults = flordloto_default_theme_options();
    $clean = [];

    foreach ($defaults as $key => $default) {
        $value = is_array($input) && array_key_exists($key, $input) ? $input[$key] : $default;

        if (preg_match("/(?:url|image|instagram|facebook|glovo|justeat|whatsapp)$/", $key)) {
            $clean[$key] = esc_url_raw((string) $value);
            continue;
        }

        $clean[$key] = sanitize_textarea_field((string) $value);
    }

    return $clean;
}

function flordloto_register_theme_menu(): void
{
    add_theme_page(
        __("Ajustes Flor de Loto", "flordloto"),
        __("Ajustes Flor de Loto", "flordloto"),
        "edit_theme_options",
        "flordloto-theme-options",
        "flordloto_render_theme_options_page"
    );
}
add_action("admin_menu", "flordloto_register_theme_menu");

function flordloto_render_theme_options_page(): void
{
    $options = flordloto_get_theme_options();
    $fields = [
        "General" => [
            "site_name" => "Nombre del sitio",
            "site_description" => "Descripcion del sitio",
            "phone" => "Telefono",
            "phone_label" => "Telefono visible",
            "email" => "Email",
            "whatsapp" => "URL WhatsApp",
            "address" => "Direccion",
            "instagram" => "Instagram",
            "facebook" => "Facebook",
            "glovo" => "Glovo",
            "justeat" => "Just Eat",
            "logo_url" => "URL logo",
        ],
        "Hero" => [
            "hero_eyebrow" => "Eyebrow hero",
            "hero_title" => "Titulo hero",
            "hero_subtitle" => "Subtitulo hero",
            "hero_image" => "URL imagen hero",
        ],
        "Intro" => [
            "intro_title" => "Titulo intro",
            "intro_description" => "Descripcion intro",
            "intro_cards" => "Tarjetas intro, una por linea",
        ],
        "Servicios" => [
            "service_1_badge" => "Servicio 1 badge",
            "service_1_title" => "Servicio 1 titulo",
            "service_1_description" => "Servicio 1 descripcion",
            "service_1_bullets" => "Servicio 1 bullets, uno por linea",
            "service_2_badge" => "Servicio 2 badge",
            "service_2_title" => "Servicio 2 titulo",
            "service_2_description" => "Servicio 2 descripcion",
            "service_2_bullets" => "Servicio 2 bullets, uno por linea",
            "service_3_badge" => "Servicio 3 badge",
            "service_3_title" => "Servicio 3 titulo",
            "service_3_description" => "Servicio 3 descripcion",
            "service_3_bullets" => "Servicio 3 bullets, uno por linea",
        ],
        "Promo y Marca" => [
            "promo_title" => "Titulo promo",
            "promo_text" => "Texto promo",
            "promo_image" => "URL imagen promo",
            "brand_title" => "Titulo marca",
            "brand_text" => "Texto marca",
            "brand_image" => "URL imagen marca",
            "brand_points" => "Puntos marca, uno por linea",
        ],
        "Contacto y CTA" => [
            "contact_summary_title" => "Titulo contacto resumen",
            "contact_summary_text" => "Texto contacto resumen",
            "contact_location_text" => "Texto ubicacion",
            "contact_orders_text" => "Texto encargos",
            "hours_rows" => "Horarios, formato Dia|Horario una linea por fila",
            "final_cta_title" => "Titulo CTA final",
            "final_cta_text" => "Texto CTA final",
            "about_image" => "URL imagen Sobre nosotros",
        ],
        "Catalogo" => [
            "catalog_copy_left" => "Texto catalogo, separa parrafos con una linea en blanco",
        ],
    ];
    ?>
    <div class="wrap">
      <h1>Ajustes Flor de Loto</h1>
      <p>Edita desde aqui la mayor parte del contenido estructurado de la portada y los datos globales del theme.</p>
      <form method="post" action="options.php">
        <?php settings_fields("flordloto_theme_options_group"); ?>
        <?php foreach ($fields as $section => $section_fields) : ?>
          <h2 style="margin-top:32px;"><?php echo esc_html($section); ?></h2>
          <table class="form-table" role="presentation">
            <tbody>
              <?php foreach ($section_fields as $key => $label) : ?>
                <tr>
                  <th scope="row"><label for="<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></label></th>
                  <td>
                    <?php $value = (string) ($options[$key] ?? ""); ?>
                    <?php if (str_contains($key, "description") || str_contains($key, "text") || str_contains($key, "bullets") || str_contains($key, "cards") || str_contains($key, "points") || $key === "hours_rows" || str_contains($key, "title") && strlen($value) > 90) : ?>
                      <textarea id="<?php echo esc_attr($key); ?>" name="flordloto_theme_options[<?php echo esc_attr($key); ?>]" rows="5" class="large-text"><?php echo esc_textarea($value); ?></textarea>
                    <?php else : ?>
                      <input id="<?php echo esc_attr($key); ?>" name="flordloto_theme_options[<?php echo esc_attr($key); ?>]" type="text" class="regular-text" value="<?php echo esc_attr($value); ?>">
                    <?php endif; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php endforeach; ?>
        <?php submit_button("Guardar ajustes"); ?>
      </form>
    </div>
    <?php
}

function flordloto_register_content_types(): void
{
    register_post_type("floral_collection", [
        "labels" => [
            "name" => __("Catálogo", "flordloto"),
            "singular_name" => __("Colección", "flordloto"),
        ],
        "public" => true,
        "has_archive" => "catalogo",
        "rewrite" => ["slug" => "catalogo"],
        "menu_icon" => "dashicons-store",
        "supports" => ["title", "editor", "excerpt", "thumbnail"],
        "show_in_rest" => true,
    ]);

    register_post_type("floral_occasion", [
        "labels" => [
            "name" => __("Ocasiones", "flordloto"),
            "singular_name" => __("Ocasión", "flordloto"),
        ],
        "public" => true,
        "has_archive" => "ocasiones",
        "rewrite" => ["slug" => "ocasiones"],
        "menu_icon" => "dashicons-heart",
        "supports" => ["title", "editor", "excerpt", "thumbnail"],
        "show_in_rest" => true,
    ]);
}
add_action("init", "flordloto_register_content_types");

function flordloto_seed_pages_and_content(): void
{
    flordloto_register_content_types();

    $pages = flordloto_theme_pages();
    $created = [];

    foreach ($pages as $page) {
        $existing = get_page_by_path($page["slug"]);

        if ($existing instanceof WP_Post) {
            $created[$page["slug"]] = (int) $existing->ID;
            if (!empty($page["template"]) && $page["template"] !== "default") {
                update_post_meta($existing->ID, "_wp_page_template", $page["template"]);
            }
            continue;
        }

        $page_id = wp_insert_post([
            "post_type" => "page",
            "post_status" => "publish",
            "post_title" => $page["title"],
            "post_name" => $page["slug"],
            "post_content" => $page["content"],
            "post_excerpt" => $page["excerpt"],
        ]);

        $created[$page["slug"]] = $page_id;

        if (!empty($page["template"]) && $page["template"] !== "default" && $page_id) {
            update_post_meta($page_id, "_wp_page_template", $page["template"]);
        }
    }

    if (!empty($created["inicio"])) {
        update_option("show_on_front", "page");
        update_option("page_on_front", (int) $created["inicio"]);
    }

    $primary_menu_id = flordloto_ensure_menu("Menu principal", "primary", [
        ["title" => "Inicio", "slug" => "inicio"],
        ["title" => "Catálogo", "archive" => home_url("/catalogo/")],
        ["title" => "Ocasiones", "archive" => home_url("/ocasiones/")],
        ["title" => "Sobre nosotros", "slug" => "sobre-nosotros"],
        ["title" => "Contacto", "slug" => "contacto"],
    ], $created);

    $legal_menu_id = flordloto_ensure_menu("Menu legal", "footer_legal", [
        ["title" => "Política de privacidad", "slug" => "politica-privacidad"],
        ["title" => "Política de cookies", "slug" => "politica-cookies"],
        ["title" => "Términos de uso", "slug" => "terminos-de-uso"],
        ["title" => "Seguridad", "slug" => "seguridad"],
    ], $created);

    $menu_locations = get_theme_mod("nav_menu_locations", []);

    if ($primary_menu_id) {
        $menu_locations["primary"] = $primary_menu_id;
    }

    if ($legal_menu_id) {
        $menu_locations["footer_legal"] = $legal_menu_id;
    }

    set_theme_mod("nav_menu_locations", $menu_locations);

    flordloto_seed_posts("floral_collection", flordloto_seed_collections());
    flordloto_seed_posts("floral_occasion", flordloto_seed_occasions());

    flush_rewrite_rules();
}
add_action("after_switch_theme", "flordloto_seed_pages_and_content");

function flordloto_ensure_menu(string $name, string $location, array $items, array $created): int
{
    $menu = wp_get_nav_menu_object($name);
    $menu_id = $menu ? (int) $menu->term_id : wp_create_nav_menu($name);

    if (!$menu_id) {
        return 0;
    }

    $existing_items = wp_get_nav_menu_items($menu_id) ?: [];
    $existing_urls = [];

    foreach ($existing_items as $item) {
        $existing_urls[] = untrailingslashit((string) $item->url);
    }

    foreach ($items as $item) {
        $url = isset($item["archive"]) ? $item["archive"] : get_permalink($created[$item["slug"]] ?? 0);

        if (!$url || in_array(untrailingslashit($url), $existing_urls, true)) {
            continue;
        }

        wp_update_nav_menu_item($menu_id, 0, [
            "menu-item-title" => $item["title"],
            "menu-item-url" => $url,
            "menu-item-status" => "publish",
        ]);
    }

    return $menu_id;
}

function flordloto_seed_posts(string $post_type, array $items): void
{
    foreach ($items as $item) {
        $existing = get_page_by_path($item["slug"], OBJECT, $post_type);

        if ($existing instanceof WP_Post) {
            continue;
        }

        wp_insert_post([
            "post_type" => $post_type,
            "post_status" => "publish",
            "post_title" => $item["title"],
            "post_name" => $item["slug"],
            "post_excerpt" => $item["excerpt"],
            "post_content" => $item["content"],
        ]);

        $inserted = get_page_by_path($item["slug"], OBJECT, $post_type);

        if ($inserted instanceof WP_Post && !empty($item["image"])) {
            update_post_meta($inserted->ID, "_flordloto_image", esc_url_raw($item["image"]));
        }
    }
}

function flordloto_handle_contact_submission(): void
{
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        return;
    }

    if (!isset($_POST["flordloto_contact_nonce"]) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["flordloto_contact_nonce"])), "flordloto_contact")) {
        return;
    }

    $payload = [
        "name" => sanitize_text_field(wp_unslash($_POST["name"] ?? "")),
        "email" => sanitize_email(wp_unslash($_POST["email"] ?? "")),
        "phone" => sanitize_text_field(wp_unslash($_POST["phone"] ?? "")),
        "occasion" => sanitize_text_field(wp_unslash($_POST["occasion"] ?? "")),
        "message" => sanitize_textarea_field(wp_unslash($_POST["message"] ?? "")),
        "privacy" => !empty($_POST["privacy"]),
    ];

    $errors = [];

    if (mb_strlen($payload["name"]) < 2) {
        $errors[] = "Indica tu nombre.";
    }

    if (!is_email($payload["email"])) {
        $errors[] = "Introduce un email válido.";
    }

    if (mb_strlen($payload["phone"]) < 9) {
        $errors[] = "Indica un teléfono válido.";
    }

    if (mb_strlen($payload["occasion"]) < 2) {
        $errors[] = "Cuéntanos la ocasión.";
    }

    if (mb_strlen($payload["message"]) < 20) {
        $errors[] = "Necesitamos algo más de contexto para ayudarte.";
    }

    if (!$payload["privacy"]) {
        $errors[] = "Debes aceptar la política de privacidad.";
    }

    $redirect = wp_get_referer() ?: home_url("/contacto/");

    if (!empty($errors)) {
        $redirect = add_query_arg("contact_error", rawurlencode(implode(" ", $errors)), $redirect);
        wp_safe_redirect($redirect);
        exit;
    }

    $to = get_option("admin_email");
    $subject = "Nuevo contacto desde Flor de Loto";
    $body = "Nombre: {$payload["name"]}\n";
    $body .= "Email: {$payload["email"]}\n";
    $body .= "Telefono: {$payload["phone"]}\n";
    $body .= "Ocasion: {$payload["occasion"]}\n\n";
    $body .= $payload["message"];
    $headers = ["Reply-To: {$payload["name"]} <{$payload["email"]}>"];

    wp_mail($to, $subject, $body, $headers);

    $redirect = add_query_arg("contact_success", "1", $redirect);
    wp_safe_redirect($redirect);
    exit;
}
add_action("template_redirect", "flordloto_handle_contact_submission");
