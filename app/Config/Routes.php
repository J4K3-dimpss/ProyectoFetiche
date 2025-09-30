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
$routes->get('perfumes/buscar', 'perfumesController::buscarPerfume');
$routes->post('perfumes/guardar', 'perfumesController::guardarPerfume');
$routes->get('perfumes/eliminarPerfume/(:num)', 'perfumesController::eliminarPerfume/$1');
$routes->get('perfumes/editar/(:num)', 'perfumesController::localizarPerfume/$1');
$routes->post('perfumes/modificar', 'perfumesController::modificarPerfume');

$routes->get('usuarios/editar/(:num)', 'usuariosController::localizarUsuario/$1');
$routes->post('usuarios/modificar', 'usuariosController::modificarUsuario');
$routes->get('usuarios/agregar', 'usuariosController::formularioAgregar');
$routes->post('usuarios/guardar', 'usuariosController::guardarUsuario');
$routes->get('usuarios/eliminar/(:num)', 'usuariosController::eliminarUsuario/$1');

$routes->get('genero/eliminar/(:num)', 'GeneroController::eliminar/$1');
$routes->get('genero/editar/(:num)', 'GeneroController::editar/$1');

$routes->get('ventas/eliminar/(:num)', 'VentasController::eliminar/$1');
$routes->get('ventas/editar/(:num)', 'ventasController::localizarVenta/$1');
$routes->post('ventas/modificar', 'ventasController::modificarVenta');

$routes->get('ventas/buscar', 'ventasController::buscarVenta');

$routes->get('clientes/eliminar/(:num)', 'ClientesController::eliminar/$1');
$routes->get('clientes/editar/(:num)', 'ClientesController::editar/$1');

$routes->get('login', 'LoginController::index');
$routes->post('login/verificar', 'LoginController::verificar');
$routes->get('logout', 'LoginController::logout');