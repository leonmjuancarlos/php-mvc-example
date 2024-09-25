# Iniciar el Proyecto

Sigue estos pasos para instalar y configurar el proyecto en tu entorno local.

## 1. Clonar el repositorio

En nuestro caso usamos XAMPP y Windows.

```bash
cd C:/xampp/htdocs/
git clone https://github.com/leonmjuancarlos/php-mvc-example.git
cd php-mvc-example
```

## 2. Iniciar Composer

Asegúrate de tener instalado [Composer](https://getcomposer.org/).

```bash
composer install
```

## 3. Configuración

El proyecto esta configurado para trabajar directamente con XAMPP en el servidor Apache y MySQL.

Si quieres modificar el nombre del proyecto debes modificar lo siguiente:

- `.htaccess`: modificar el `RewriteBase` con la ruta de tu proyecto (si usas Apache).
- `src/Core/config.php`: En `define('PROJECT_ROOT', '/my-mvc-project');`, cambiar `php-mvc-example` con el nombre de tu proyecto.

Para la configuración de la base de datos tanto si usas MySQL como si no:

- `src/Core/Database.php`: Configura aquí las credenciales y los datos de conexión. No se usan variables de entorno para la conexión, aunque es imprescindible usarlas en producción.

## TODO

- Usamos _Query Params_ para el dinamismo en las rutas. Hay que implementar rutas dinámicas tipo `/users/{id}` en vez de `/users?id=userId`.
- La creación inicial de las tablas de la base de datos se debe hacer directamente desde consola o desde un gestor como _PhpMyAdmin_. Sería bueno implementarlo en el código para que se automatice.

## 5. Levantar el servidor

Hemos usado XAMPP para todo el desarrollo. Fundamentalmente, el servidor web Apache y la BBDD MySQL.

Ahora deberías poder acceder a la aplicación en `http://localhost/php-mvc-example/users/`.
