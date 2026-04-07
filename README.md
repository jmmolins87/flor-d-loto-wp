# Flor de Loto WordPress

Esta carpeta contiene una conversión funcional de la web actual a WordPress.

## Estructura

- `wp-content/themes/flordloto`: tema clásico listo para instalar.
- `local-wordpress`: entorno local con Docker para levantar WordPress y MySQL.

## Qué incluye

- Home equivalente a la portada actual.
- Tipos de contenido para `Catálogo` y `Ocasiones`.
- Páginas de `Sobre nosotros`, `Contacto`, `FAQ's`, `Legal`, `Política de privacidad`, `Política de cookies`, `Términos de uso` y `Seguridad`.
- Menú principal y menú legal.
- Alta automática de páginas y contenido inicial al activar el tema.
- Formulario de contacto con `wp_mail`.

## Instalación

1. Copia `wp-content/themes/flordloto` dentro de tu instalación WordPress.
2. Activa el tema desde `Apariencia > Temas`.
3. El tema creará la portada, los menús, las páginas base y los contenidos iniciales.
4. Revisa `Ajustes > Enlaces permanentes` y guarda una vez para refrescar reglas si hiciera falta.

## Entorno local con Docker

1. Entra en `flordLoto-wp/local-wordpress`.
2. Ejecuta `docker compose up -d`.
3. Abre `http://localhost:8090`.
4. Completa el instalador de WordPress.
5. Activa el tema `Flor de Loto` en `Apariencia > Temas`.

El contenedor monta directamente `../wp-content/themes/flordloto`, así que cualquier cambio en el tema se refleja al recargar la web local.

## Notas

- La migración está resuelta como tema WordPress nativo, sin Next.js ni Storyblok.
- El contenido inicial proviene de los fallbacks existentes en este repositorio.
- Si luego quieres administración más avanzada, lo siguiente lógico sería añadir ACF o Gutenberg blocks personalizados.

# flor-d-loto-wp
