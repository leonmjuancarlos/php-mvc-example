<?php

use App\Routes\Router;

require_once __DIR__ . '/../../vendor/autoload.php';

$router = new Router();

$router->add('GET', '/users', 'UserController@list');

$router->add('GET', '/users/create', 'UserController@create');
$router->add('POST', '/users/create', 'UserController@create');

$router->add('POST', '/users/delete', 'UserController@delete');

$router->add('GET', '/users/edit', 'UserController@edit');
$router->add('POST', '/users/edit', 'UserController@edit');

$router->handleRequest();
