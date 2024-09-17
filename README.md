# Iniciar el Proyecto

Sigue estos pasos para instalar y configurar el proyecto en tu entorno local.

## 1. Clonar el repositorio

```bash
git clone https://github.com/tuusuario/tu-repositorio.git
cd tu-repositorio
```

## 2. Iniciar Composer

Asegúrate de tener instalado [Composer](https://getcomposer.org/).

```bash
composer install
```

## 3. Configurar las variables de entorno

Copia el archivo `.env.example` a `.env` y configura las variables necesarias.

```bash
cp .env.example .env
```

Luego, genera la clave de la aplicación (si estás usando un framework como Laravel).

```bash
php artisan key:generate
```

## 4. Ejecutar migraciones (opcional)

Si el proyecto incluye una base de datos, ejecuta las migraciones.

```bash
php artisan migrate
```

## Configuración necesaria

- `.htaccess`: modificar el `RewriteBase` con la ruta de tu proyecto (si usas Apache).
- `define('PROJECT_ROOT', '/my-mvc-project');`
- Configuración de `src/Core/Database.php`.

## TODO

- Rutas dinamicas sin query
- Creación tablas desde php

## 5. Levantar el servidor

Hemos usado XAMPP para todo el desarrollo. Fundamentalmente, el servidor web Apache y la BBDD MySQL.

Ahora deberías poder acceder a la aplicación en `http://localhost`.
