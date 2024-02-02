<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//$routes->get('empleados', 'Empleados::index');
//$routes->get('empleados/new', 'Empleados::new');


$routes->resource('empleados', ['placeholder' => '(:num)', 'except' => 'show']);