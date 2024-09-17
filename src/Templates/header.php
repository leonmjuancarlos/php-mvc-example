<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>

    <header>
        <h1>Mi Sitio Web</h1>
        <nav>
            <ul>
                <li><a href="<?php echo PROJECT_ROOT ?>/users">Lista de Usuarios</a></li>
                <li><a href="<?php echo PROJECT_ROOT ?>/users/create">Crear usuario</a></li>
            </ul>
        </nav>
    </header>