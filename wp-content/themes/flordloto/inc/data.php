<?php

function flordloto_default_theme_options(): array
{
    return [
        "site_name" => "Flor de Loto Segovia",
        "site_description" => "Floristeria en Segovia con ramos a domicilio, flores frescas, arreglos para bodas, eventos y detalles cuidados para regalar, celebrar y decorar.",
        "phone" => "+34 691 26 41 12",
        "phone_label" => "691 26 41 12",
        "email" => "flordelotosegovia@gmail.com",
        "whatsapp" => "https://wa.me/34691264112",
        "address" => "P.º Conde de Sepulveda, 24, 40006 Segovia, Segovia",
        "instagram" => "https://www.instagram.com/flordelotosegovia/",
        "facebook" => "https://www.facebook.com/profile.php?id=100093329264769",
        "glovo" => "https://glovoapp.com/es/es/segovia/stores/flor-de-loto-segovia?utm_source=google&utm_medium=organic&utm_campaign=google_reserve_place_order_action",
        "justeat" => "https://www.just-eat.es/restaurants-flor-de-loto-segovia/menu?utm_source=google&utm_medium=organic&utm_campaign=orderaction",
        "logo_url" => get_template_directory_uri() . "/assets/logo.png",
        "hero_eyebrow" => "Floristeria contemporanea en Segovia",
        "hero_title" => "Flores con gesto sereno, composicion cuidada y compra facil.",
        "hero_subtitle" => "Diseñamos ramos y arreglos con una mirada actual: frescos, elegantes y listos para regalar o llenar de vida cualquier espacio.",
        "hero_image" => "https://images.unsplash.com/photo-1525310072745-f49212b5ac6d?auto=format&fit=crop&w=1400&q=80",
        "intro_title" => "Las flores son nuestras mejores aliadas para sorprender, emocionar y transmitir emociones.",
        "intro_description" => "Siempre trabajamos con total atencion al detalle y al acabado para que cada ramo, centro o composicion se sienta especial desde el primer vistazo.",
        "intro_cards" => implode("\n", [
            "Flores frescas seleccionadas con criterio de temporada.",
            "Colecciones claras para decidir rapido sin sacrificar gusto.",
            "Contacto directo para resolver encargos personalizados.",
            "Entrega local y experiencia editorial coherente de punta a punta.",
        ]),
        "service_1_badge" => "Entrega cuidada",
        "service_1_title" => "Servicio a domicilio Premium",
        "service_1_description" => "Quieres sorprender a alguien especial o decorar tu hogar sin moverte del sofa. En Flor de Loto Segovia llevamos tus flores donde nos digas, con una entrega cuidada y una experiencia clara desde el pedido hasta la recepcion.",
        "service_1_bullets" => implode("\n", [
            "Ramos personalizados",
            "Entregas en el mismo dia segun disponibilidad",
            "Servicio en Segovia y alrededores",
            "Tarjeta dedicatoria y envoltorios especiales",
        ]),
        "service_2_badge" => "Cuidado recurrente",
        "service_2_title" => "Servicio de Mantenimiento",
        "service_2_description" => "No solo creamos arreglos florales: tambien los cuidamos para que luzcan siempre perfectos. Es una solucion pensada para negocios, eventos y espacios que quieren verse vivos, cuidados y coherentes cada semana.",
        "service_2_bullets" => implode("\n", [
            "Oficinas, despachos, hoteles y restaurantes",
            "Visitas periodicas para renovar y mantener arreglos",
            "Riego, limpieza y sustitucion segun necesidad",
            "Frecuencia semanal, quincenal o mensual",
        ]),
        "service_3_badge" => "Guia floral",
        "service_3_title" => "Asesoramiento Personalizado",
        "service_3_description" => "Te ayudamos a elegir las flores adecuadas para cada ocasion, espacio o persona. Nuestro asesoramiento floral esta pensado para quienes quieren transmitir emociones, decorar con sentido o construir un momento inolvidable.",
        "service_3_bullets" => implode("\n", [
            "Decoracion floral para bodas, eventos y celebraciones",
            "Ideas para hogar o negocio con flores y plantas",
            "Combinaciones de color, flor y estilo adaptadas a ti",
            "Consejos de cuidado, mantenimiento y duracion",
        ]),
        "promo_title" => "Entregas locales y encargos personalizados",
        "promo_text" => "Ramos de novia, centros de mesa, plantas, cestas, rosas preservadas y encargos funerarios con compra online o atencion directa.",
        "promo_image" => "https://images.unsplash.com/photo-1526047932273-341f2a7631f9?auto=format&fit=crop&w=1200&q=80",
        "brand_title" => "Trabajamos con ritmo editorial, no con catalogo rigido.",
        "brand_text" => "La marca vive entre la naturalidad de la flor fresca y una direccion estetica contemporanea. Por eso cada seccion se siente limpia, premium y facil de recorrer.",
        "brand_image" => "https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=1200&q=80",
        "brand_points" => implode("\n", [
            "Ramos, plantas y detalles florales para el dia a dia",
            "Flor para bodas, ceremonias y celebraciones especiales",
            "Coronas y arreglos funerarios preparados con rapidez y sensibilidad",
        ]),
        "contact_summary_title" => "Compra facil, trato cercano.",
        "contact_summary_text" => "Escribenos para encargos express, regalos con entrega local o propuestas para eventos pequeños.",
        "contact_location_text" => "Paseo Conde de Sepulveda, 24. Atendemos tienda, encargos locales y recogidas.",
        "contact_orders_text" => "Si necesitas preparar un regalo o confirmar una entrega, lo mas agil es escribirnos antes.",
        "final_cta_title" => "Cuentanos que necesitas y te ayudamos a prepararlo.",
        "final_cta_text" => "Escribe, cuentanos la ocasion y te proponemos una solucion floral afinada, clara y lista para producir.",
        "about_image" => "https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=1200&q=80",
        "hours_rows" => implode("\n", [
            "Lunes|Cerrado",
            "Martes|10:00 - 20:00",
            "Miercoles|10:00 - 20:00",
            "Jueves|10:00 - 20:00",
            "Viernes|10:00 - 20:00",
            "Sabado|10:00 - 14:00",
        ]),
        "catalog_copy_left" => implode("\n\n", [
            "El catalogo esta pensado para que puedas entender rapido que tipo de solucion floral necesitas sin revisar opciones redundantes. Cada coleccion agrupa encargos reales: regalo, casa, evento, boda, condolencia o detalle duradero.",
            "No trabajamos el catalogo como una lista cerrada de productos rigidos, sino como una base clara para orientar la compra. Eso nos permite adaptar tamaño, paleta, flor disponible y nivel de gesto sin perder coherencia visual.",
            "Si dudas entre varias lineas, lo mas util suele ser pensar en el contexto: a quien va dirigido, donde se va a colocar, cuanto debe durar y si buscas una presencia discreta o una pieza con mas impacto.",
        ]),
    ];
}

function flordloto_get_theme_options(): array
{
    $defaults = flordloto_default_theme_options();
    $saved = get_option("flordloto_theme_options", []);

    if (!is_array($saved)) {
        $saved = [];
    }

    return wp_parse_args($saved, $defaults);
}

function flordloto_theme_option(string $key, $default = "")
{
    $options = flordloto_get_theme_options();
    return $options[$key] ?? $default;
}

function flordloto_split_lines(string $value): array
{
    $parts = preg_split("/\r\n|\r|\n/", trim($value));
    $parts = is_array($parts) ? $parts : [];

    return array_values(array_filter(array_map("trim", $parts), static fn($item) => $item !== ""));
}

function flordloto_site_settings(): array
{
    $options = flordloto_get_theme_options();

    return [
        "site_name" => $options["site_name"],
        "description" => $options["site_description"],
        "phone" => $options["phone"],
        "phone_label" => $options["phone_label"],
        "email" => $options["email"],
        "whatsapp" => $options["whatsapp"],
        "address" => $options["address"],
        "instagram" => $options["instagram"],
        "facebook" => $options["facebook"],
        "glovo" => $options["glovo"],
        "justeat" => $options["justeat"],
        "logo_url" => $options["logo_url"],
    ];
}

function flordloto_home_settings(): array
{
    $options = flordloto_get_theme_options();

    return [
        "hero" => [
            "eyebrow" => $options["hero_eyebrow"],
            "title" => $options["hero_title"],
            "subtitle" => $options["hero_subtitle"],
            "image" => $options["hero_image"],
        ],
        "intro" => [
            "title" => $options["intro_title"],
            "description" => $options["intro_description"],
            "cards" => flordloto_split_lines($options["intro_cards"]),
        ],
        "services" => [
            flordloto_service_from_options(1, $options),
            flordloto_service_from_options(2, $options),
            flordloto_service_from_options(3, $options),
        ],
        "promo" => [
            "title" => $options["promo_title"],
            "text" => $options["promo_text"],
            "image" => $options["promo_image"],
        ],
        "brand" => [
            "title" => $options["brand_title"],
            "text" => $options["brand_text"],
            "image" => $options["brand_image"],
            "points" => flordloto_split_lines($options["brand_points"]),
        ],
        "contact_summary" => [
            "title" => $options["contact_summary_title"],
            "text" => $options["contact_summary_text"],
            "location_text" => $options["contact_location_text"],
            "orders_text" => $options["contact_orders_text"],
            "hours_rows" => array_map(static function ($row) {
                $parts = array_map("trim", explode("|", $row, 2));

                return [
                    "label" => $parts[0] ?? "",
                    "value" => $parts[1] ?? "",
                ];
            }, flordloto_split_lines($options["hours_rows"])),
        ],
        "final_cta" => [
            "title" => $options["final_cta_title"],
            "text" => $options["final_cta_text"],
        ],
    ];
}

function flordloto_service_from_options(int $index, array $options): array
{
    return [
        "badge" => $options["service_{$index}_badge"] ?? "",
        "title" => $options["service_{$index}_title"] ?? "",
        "description" => $options["service_{$index}_description"] ?? "",
        "bullets" => flordloto_split_lines((string) ($options["service_{$index}_bullets"] ?? "")),
    ];
}

function flordloto_seed_collections(): array
{
    $defaults = flordloto_default_theme_options();

    return [
        [
            "slug" => "ramos-de-temporada",
            "title" => "Ramos de temporada",
            "excerpt" => "Selecciones frescas y ligeras con flor cambiante cada semana.",
            "image" => "https://images.unsplash.com/photo-1468327768560-75b778cbb551?auto=format&fit=crop&w=1200&q=80",
            "content" => flordloto_rich_content([
                "Ramos pensados para regalar con naturalidad, usando texturas suaves y una paleta refinada.",
                "Funcionan bien cuando buscas flor fresca con un resultado natural, actual y facil de regalar.",
            ], [
                "Ideal para" => "Cumpleaños, detalles de agradecimiento y regalos de ultima hora con buen gusto.",
                "Formato" => "Ramo de mano con envoltura cuidada y tamaño adaptado al presupuesto.",
            ]),
        ],
        [
            "slug" => "ramos-de-novia",
            "title" => "Ramos de novia",
            "excerpt" => "Diseños delicados para bodas con lectura romantica, limpia y actual.",
            "image" => "https://images.unsplash.com/photo-1522673607200-164d1b6ce486?auto=format&fit=crop&w=1200&q=80",
            "content" => flordloto_rich_content([
                "Ajustamos escala, caida, color y textura al vestido, a la ceremonia y a la forma en que quieres recordar ese dia.",
                "Tambien podemos extender el lenguaje floral a prendidos, tocados y pequeños centros.",
            ]),
        ],
        [
            "slug" => "flores-para-casa",
            "title" => "Flores para casa",
            "excerpt" => "Arreglos limpios para vestir salones, mesas y rincones con calma.",
            "image" => "https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=1200&q=80",
            "content" => flordloto_rich_content([
                "Composiciones comodas de colocar en mesa, recibidor, cocina o salon.",
                "Decoracion floral sobria y facil de integrar en interiores calidos o contemporaneos.",
            ]),
        ],
        [
            "slug" => "eventos-intimistas",
            "title" => "Eventos intimistas",
            "excerpt" => "Piezas para cenas, pedidas, firmas y celebraciones de aforo pequeño.",
            "image" => "https://images.unsplash.com/photo-1519378058457-4c29a0a2efac?auto=format&fit=crop&w=1200&q=80",
            "content" => flordloto_rich_content([
                "Arreglos para mesas, puntos de bienvenida y celebraciones privadas donde el ambiente necesita un apoyo floral elegante.",
                "Menos volumen innecesario y mas atencion al tono, a la escala y a la luz del espacio.",
            ]),
        ],
        [
            "slug" => "rosas-preservadas",
            "title" => "Rosas preservadas",
            "excerpt" => "Detalles de larga duracion para regalo, escritorio o rincon especial.",
            "image" => "https://images.unsplash.com/photo-1518895949257-7621c3c786d7?auto=format&fit=crop&w=1200&q=80",
            "content" => flordloto_rich_content([
                "Una coleccion pensada para regalos con vocacion de permanencia y presentacion premium.",
                "Funcionan especialmente bien en cajas, cupulas y piezas compactas listas para entregar.",
            ]),
        ],
        [
            "slug" => "cestas-y-centros-florales",
            "title" => "Cestas y centros florales",
            "excerpt" => "Formatos generosos para regalar en empresa, familia o celebracion.",
            "image" => "https://images.unsplash.com/photo-1508610048659-a06b669e3321?auto=format&fit=crop&w=1200&q=80",
            "content" => flordloto_rich_content([
                "Formatos con mayor cuerpo y lectura de regalo importante.",
                "Permiten trabajar mejor volumen, gesto y estabilidad visual para hogares y negocios.",
            ]),
        ],
        [
            "slug" => "plantas-para-hogar-y-regalo",
            "title" => "Plantas para hogar y regalo",
            "excerpt" => "Seleccion de plantas para interior y exterior con asesoramiento sencillo.",
            "image" => "https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&fit=crop&w=1200&q=80",
            "content" => flordloto_rich_content([
                "Plantas decorativas, asumibles de cuidar y utiles tanto para hogar como para oficina.",
                "Encajan muy bien en regalos de casa nueva, escritorio, terraza o detalles duraderos.",
            ]),
        ],
        [
            "slug" => "coronas-y-flor-funeral",
            "title" => "Coronas y flor funeral",
            "excerpt" => "Arreglos sobrios y respetuosos para despedidas y homenajes.",
            "image" => "https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=1200&q=80",
            "content" => flordloto_rich_content([
                "Preparamos coronas, centros y composiciones de condolencia con lenguaje contenido y presencia serena.",
                "Priorizamos sensibilidad, claridad y rapidez de respuesta en encargos urgentes.",
            ]),
        ],
    ];
}

function flordloto_seed_occasions(): array
{
    return [
        [
            "slug" => "cumpleanos-con-color",
            "title" => "Cumpleaños con color",
            "excerpt" => "Ramos alegres con gesto generoso y lectura actual.",
            "image" => "https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=1200&q=80",
            "content" => flordloto_rich_content([
                "Una opcion fresca para regalar sin caer en composiciones previsibles.",
                "Trabajamos gamas vivas, flor de temporada y formatos festivos sin resultar estridentes.",
            ]),
        ],
        [
            "slug" => "aniversarios-serenos",
            "title" => "Aniversarios serenos",
            "excerpt" => "Texturas suaves y una paleta elegante para celebrar con intimidad.",
            "image" => "https://images.unsplash.com/photo-1468327768560-75b778cbb551?auto=format&fit=crop&w=1200&q=80",
            "content" => flordloto_rich_content([
                "Pensado para regalos con tono sensible y duradero.",
                "La idea es construir una pieza refinada, intima y facil de leer como un regalo importante.",
            ]),
        ],
        [
            "slug" => "gracias-con-estilo",
            "title" => "Gracias con estilo",
            "excerpt" => "Detalles florales faciles de regalar a equipos, clientes o anfitriones.",
            "image" => "https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=1200&q=80",
            "content" => flordloto_rich_content([
                "Una linea sobria, actual y muy facil de recibir para agradecimientos profesionales o personales.",
                "Priorizamos formatos limpios, transportables y listos para entregar.",
            ]),
        ],
    ];
}

function flordloto_theme_pages(): array
{
    return [
        [
            "slug" => "inicio",
            "title" => "Inicio",
            "template" => "default",
            "excerpt" => "Portada principal",
            "content" => "Portada de Flor de Loto Segovia.",
        ],
        [
            "slug" => "sobre-nosotros",
            "title" => "Sobre nosotros",
            "template" => "page-sobre-nosotros.php",
            "excerpt" => "Conoce Flor de Loto Segovia.",
            "content" => flordloto_page_sections([
                [
                    "title" => "Nuestra mirada",
                    "text" => "Creemos en composiciones con aire, materiales frescos y una elegancia que no necesita exceso. La web traslada esa misma idea: limpieza visual, buen ritmo y decisiones claras.",
                ],
                [
                    "title" => "Como trabajamos",
                    "text" => "Escuchamos la ocasion, proponemos opciones concretas y afinamos el pedido contigo. El objetivo es que la compra sea fluida y el resultado se vea realmente cuidado.",
                ],
            ]),
        ],
        [
            "slug" => "contacto",
            "title" => "Contacto",
            "template" => "page-contacto.php",
            "excerpt" => "Contacta con Flor de Loto Segovia.",
            "content" => "Pagina de contacto.",
        ],
        [
            "slug" => "faqs",
            "title" => "FAQ's",
            "template" => "default",
            "excerpt" => "Preguntas frecuentes.",
            "content" => flordloto_page_sections([
                [
                    "title" => "Encargos y disponibilidad",
                    "text" => "Trabajamos con flor fresca y colecciones estacionales, asi que la disponibilidad puede variar segun la semana y el tipo de encargo.",
                ],
                [
                    "title" => "Entregas y recogidas",
                    "text" => "Gestionamos entregas locales y tambien puedes recoger tu pedido en tienda cuando te resulte mas comodo.",
                ],
                [
                    "title" => "Personalizacion",
                    "text" => "Podemos adaptar paleta, volumen, estilo y mensaje segun ocasion, presupuesto y destino del arreglo floral.",
                ],
            ]),
        ],
        [
            "slug" => "legal",
            "title" => "Legal",
            "template" => "default",
            "excerpt" => "Informacion general.",
            "content" => flordloto_page_sections([
                [
                    "title" => "Titularidad del sitio",
                    "text" => "Esta pagina reune la informacion general de caracter legal relativa al uso del sitio web de Flor de Loto Segovia.",
                ],
                [
                    "title" => "Uso de la web",
                    "text" => "El acceso a esta web implica un uso adecuado de sus contenidos, formularios y recursos, evitando cualquier actuacion contraria a la ley o que perjudique al servicio.",
                ],
            ]),
        ],
        [
            "slug" => "politica-privacidad",
            "title" => "Politica de privacidad",
            "template" => "default",
            "excerpt" => "Tratamiento de datos personales.",
            "content" => flordloto_page_sections([
                [
                    "title" => "Tratamiento de datos",
                    "text" => "Los datos enviados por formulario o correo se utilizan unicamente para responder a tu consulta, gestionar presupuestos y mantener la comunicacion relacionada con el encargo.",
                ],
                [
                    "title" => "Conservacion y contacto",
                    "text" => "Puedes escribirnos para ejercer tus derechos de acceso, rectificacion o supresion.",
                ],
            ]),
        ],
        [
            "slug" => "politica-cookies",
            "title" => "Politica de cookies",
            "template" => "default",
            "excerpt" => "Uso de cookies en la web.",
            "content" => flordloto_page_sections([
                [
                    "title" => "Que usamos",
                    "text" => "La web puede utilizar cookies tecnicas necesarias y, con consentimiento, cookies analiticas y de marketing.",
                ],
                [
                    "title" => "Categorias",
                    "text" => "Necesarias para el funcionamiento basico y analiticas para entender el uso del sitio.",
                ],
            ]),
        ],
        [
            "slug" => "terminos-de-uso",
            "title" => "Terminos de uso",
            "template" => "default",
            "excerpt" => "Condiciones basicas de navegacion.",
            "content" => flordloto_page_sections([
                [
                    "title" => "Condiciones generales",
                    "text" => "El contenido del sitio tiene finalidad informativa y comercial vinculada a los servicios y productos de Flor de Loto Segovia.",
                ],
                [
                    "title" => "Propiedad intelectual",
                    "text" => "Textos, imagenes, marca y diseño del sitio estan protegidos cuando resulte exigible.",
                ],
            ]),
        ],
        [
            "slug" => "seguridad",
            "title" => "Seguridad",
            "template" => "default",
            "excerpt" => "Buenas practicas de seguridad.",
            "content" => flordloto_page_sections([
                [
                    "title" => "Proteccion del sitio",
                    "text" => "Aplicamos medidas razonables para proteger el sitio, reducir accesos no autorizados y mantener la continuidad del servicio.",
                ],
                [
                    "title" => "Comunicacion de incidencias",
                    "text" => "Si detectas un problema de seguridad o un comportamiento anomalo, puedes escribirnos por los canales de contacto del sitio para revisarlo con la mayor rapidez posible.",
                ],
            ]),
        ],
    ];
}

function flordloto_page_sections(array $sections): string
{
    $html = "";

    foreach ($sections as $section) {
        $html .= "<h2>" . esc_html($section["title"]) . "</h2>";
        $html .= "<p>" . esc_html($section["text"]) . "</p>";
    }

    return $html;
}

function flordloto_rich_content(array $paragraphs, array $highlights = []): string
{
    $html = "";

    foreach ($paragraphs as $paragraph) {
        $html .= "<p>" . esc_html($paragraph) . "</p>";
    }

    if (!empty($highlights)) {
        $html .= "<h3>Claves</h3><ul>";
        foreach ($highlights as $label => $text) {
            $html .= "<li><strong>" . esc_html($label) . ":</strong> " . esc_html($text) . "</li>";
        }
        $html .= "</ul>";
    }

    return $html;
}
