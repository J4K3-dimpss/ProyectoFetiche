<?php

use App\Models\Clientes;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('perfumes', 'perfumesController::verPerfumes');
$routes->get('generos', 'generoController::verGeneros');
$routes->get('clientes', 'clientesController::verClientes');
$routes->get('usuarios', 'usuariosController::verUsuarios');
$routes->get('ventas', 'ventasController::verVentas');
$routes->get('perfumes/nuevo', 'perfumesController::formularioNuevo');
$routes->post('perfumes/guardar', 'perfumesController::guardarPerfume');
