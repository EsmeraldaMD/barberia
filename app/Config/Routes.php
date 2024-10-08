<?php
// routes.php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/producto', 'Producto::index');
$routes->get('/producto/add', 'Producto::add');
$routes->post('/producto/insert','Producto::insert');
$routes->get('/producto/delete/(:num)','Producto::delete/$1');

$routes->get('/usuario','Usuario::index');
$routes->get('/usuario/salir','Usuario::salir');

$routes->post('/usuario/acceder','Usuario::acceder');
