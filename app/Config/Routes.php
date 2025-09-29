<?php

use App\Models\Clientes;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('perfumes', 'perfumesController::verPerfumes');
