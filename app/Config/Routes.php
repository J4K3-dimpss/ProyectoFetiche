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
$routes->get('perfumes/eliminarPerfume/(:num)', 'perfumesController::eliminarPerfume/$1');
$routes->get('perfumes/editar/(:num)', 'perfumesController::editar/$1');
$routes->get('usuarios/eliminar/(:num)', 'UsuariosController::eliminar/$1');
$routes->get('usuarios/editar/(:num)', 'UsuariosController::editar/$1');
$routes->get('genero/eliminar/(:num)', 'GeneroController::eliminar/$1');
$routes->get('genero/editar/(:num)', 'GeneroController::editar/$1');
$routes->get('ventas/eliminar/(:num)', 'VentasController::eliminar/$1');
$routes->get('ventas/editar/(:num)', 'VentasController::editar/$1');
$routes->get('clientes/eliminar/(:num)', 'ClientesController::eliminar/$1');
$routes->get('clientes/editar/(:num)', 'ClientesController::editar/$1');

