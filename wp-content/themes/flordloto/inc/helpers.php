<?php

function flordloto_get_menu(string $location): array
{
    $locations = get_nav_menu_locations();
    $menu_id = $locations[$location] ?? 0;

    if (!$menu_id) {
        return [];
    }

    return wp_get_nav_menu_items($menu_id) ?: [];
}

function flordloto_primary_navigation_items(): array
{
    return [
        [
            "title" => "Inicio",
            "url" => home_url("/"),
        ],
        [
            "title" => "Catalogo",
            "url" => get_post_type_archive_link("floral_collection") ?: home_url("/catalogo/"),
        ],
        [
            "title" => "Ocasiones",
            "url" => get_post_type_archive_link("floral_occasion") ?: home_url("/ocasiones/"),
        ],
        [
            "title" => "Sobre nosotros",
            "url" => flordloto_page_url("sobre-nosotros"),
        ],
        [
            "title" => "Contacto",
            "url" => flordloto_page_url("contacto"),
        ],
    ];
}

function flordloto_page_url(string $slug): string
{
    $page = get_page_by_path($slug);

    if ($page instanceof WP_Post) {
        $url = get_permalink($page);

        if (is_string($url) && $url !== "") {
            return $url;
        }
    }

    return home_url("/" . trim($slug, "/") . "/");
}

function flordloto_primary_cta_url(): string
{
    $settings = flordloto_site_settings();

    if (!empty($settings["whatsapp"])) {
        return $settings["whatsapp"];
    }

    return flordloto_page_url("contacto");
}

function flordloto_order_url(): string
{
    $settings = flordloto_site_settings();

    foreach (["glovo", "justeat", "whatsapp"] as $key) {
        if (!empty($settings[$key])) {
            return (string) $settings[$key];
        }
    }

    return flordloto_page_url("contacto");
}

function flordloto_brand_markup(): string
{
    if (function_exists("has_custom_logo") && has_custom_logo()) {
        return get_custom_logo() ?: "";
    }

    $settings = flordloto_site_settings();

    if (!empty($settings["logo_url"])) {
        return flordloto_image($settings["logo_url"], "Logo " . $settings["site_name"]);
    }

    return '<span class="fld-brand-fallback">' . esc_html($settings["site_name"]) . "</span>";
}

function flordloto_button(string $label, string $url, string $variant = "primary", bool $new_tab = false): string
{
    $target = $new_tab ? ' target="_blank" rel="noreferrer"' : "";

    return '<a class="fld-button fld-button--' . esc_attr($variant) . '" href="' . esc_url($url) . '"' . $target . '>' . esc_html($label) . "</a>";
}

function flordloto_image(string $url, string $alt, string $class = ""): string
{
    return '<img class="' . esc_attr($class) . '" src="' . esc_url($url) . '" alt="' . esc_attr($alt) . '" loading="lazy" decoding="async">';
}

function flordloto_post_image_url(int $post_id): string
{
    $featured = get_the_post_thumbnail_url($post_id, "large");

    if (is_string($featured) && $featured !== "") {
        return $featured;
    }

    $meta = get_post_meta($post_id, "_flordloto_image", true);

    return is_string($meta) ? $meta : "";
}

function flordloto_get_entries(string $post_type, int $limit = 3): array
{
    $query = new WP_Query([
        "post_type" => $post_type,
        "post_status" => "publish",
        "posts_per_page" => $limit,
        "orderby" => "menu_order date",
        "order" => "ASC",
    ]);

    return $query->posts;
}

function flordloto_catalog_copy(): array
{
    return preg_split("/\n\s*\n/", trim((string) flordloto_theme_option("catalog_copy_left", ""))) ?: [];
}

function flordloto_now_schedule_summary(): array
{
    $rows = flordloto_home_settings()["contact_summary"]["hours_rows"] ?? [];
    $today = new DateTimeImmutable("now", wp_timezone());
    $day_names = [
        1 => "Lunes",
        2 => "Martes",
        3 => "Miercoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sabado",
        7 => "Domingo",
    ];
    $today_label = $day_names[(int) $today->format("N")] ?? "";
    $today_value = "Horario no disponible";
    $is_open = false;
    $next_change = "";

    foreach ($rows as $row) {
        if (($row["label"] ?? "") !== $today_label) {
            continue;
        }

        $today_value = trim((string) ($row["value"] ?? ""));

        if ($today_value === "" || stripos($today_value, "cerrado") !== false) {
            $next_change = "Hoy no abrimos.";
            break;
        }

        $parts = preg_split("/\s*-\s*/", $today_value);

        if (!is_array($parts) || count($parts) !== 2) {
            break;
        }

        $opens_at = DateTimeImmutable::createFromFormat("Y-m-d H:i", $today->format("Y-m-d") . " " . trim($parts[0]), wp_timezone());
        $closes_at = DateTimeImmutable::createFromFormat("Y-m-d H:i", $today->format("Y-m-d") . " " . trim($parts[1]), wp_timezone());

        if (!$opens_at || !$closes_at) {
            break;
        }

        if ($today >= $opens_at && $today <= $closes_at) {
            $is_open = true;
            $next_change = "Abierto ahora hasta las " . $closes_at->format("H:i") . ".";
        } elseif ($today < $opens_at) {
            $next_change = "Hoy abrimos a las " . $opens_at->format("H:i") . ".";
        } else {
            $next_change = "La tienda ya ha cerrado por hoy.";
        }

        break;
    }

    if ($next_change === "") {
        $next_change = "Consulta por WhatsApp para confirmar disponibilidad y entregas.";
    }

    return [
        "is_open" => $is_open,
        "status_label" => $is_open ? "Abierto ahora" : "Cerrado ahora",
        "today_label" => $today_label,
        "today_value" => $today_value,
        "next_change" => $next_change,
        "timestamp" => sprintf(
            "Actualizado %s a las %s",
            wp_date("d/m/Y", $today->getTimestamp(), wp_timezone()),
            wp_date("H:i", $today->getTimestamp(), wp_timezone())
        ),
    ];
}

function flordloto_section_heading(string $eyebrow, string $title, string $description = "", string $tag = "h2"): void
{
    echo '<div class="fld-section-heading">';
    echo '<span class="fld-eyebrow">' . esc_html($eyebrow) . "</span>";
    echo "<{$tag}>" . esc_html($title) . "</{$tag}>";

    if ($description !== "") {
        echo "<p>" . esc_html($description) . "</p>";
    }

    echo "</div>";
}

function flordloto_breadcrumbs(): void
{
    echo '<nav class="fld-breadcrumbs" aria-label="Breadcrumbs">';
    echo '<a href="' . esc_url(home_url("/")) . '">Inicio</a>';

    if (is_post_type_archive("floral_collection")) {
        echo "<span>/</span><span>Catálogo</span>";
    } elseif (is_singular("floral_collection")) {
        echo '<span>/</span><a href="' . esc_url(get_post_type_archive_link("floral_collection")) . '">Catálogo</a>';
        echo "<span>/</span><span>" . esc_html(get_the_title()) . "</span>";
    } elseif (is_post_type_archive("floral_occasion")) {
        echo "<span>/</span><span>Ocasiones</span>";
    } elseif (is_singular("floral_occasion")) {
        echo '<span>/</span><a href="' . esc_url(get_post_type_archive_link("floral_occasion")) . '">Ocasiones</a>';
        echo "<span>/</span><span>" . esc_html(get_the_title()) . "</span>";
    } elseif (is_page()) {
        echo "<span>/</span><span>" . esc_html(get_the_title()) . "</span>";
    }

    echo "</nav>";
}

function flordloto_render_page_content(): void
{
    echo '<div class="fld-page-content fld-richtext">';

    while (have_posts()) {
        the_post();
        the_content();
    }

    echo "</div>";
}

function flordloto_contact_feedback(): void
{
    if (isset($_GET["contact_success"])) {
        echo '<div class="fld-alert fld-alert--success">Solicitud recibida correctamente.</div>';
    }

    if (isset($_GET["contact_error"])) {
        echo '<div class="fld-alert fld-alert--error">' . esc_html(wp_unslash($_GET["contact_error"])) . "</div>";
    }
}
