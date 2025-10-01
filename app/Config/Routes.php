<?php

use App\Models\Clientes;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index2', fn() => view('index2'));
$routes->get('catalogo', fn() => view('catalogo')); 
$routes->get('inicio', fn() => view('inicio'));
$routes->get('perfumes', 'perfumesController::verPerfumes');
$routes->get('generos', 'generoController::verGeneros');
$routes->get('clientes', 'clientesController::verClientes');
$routes->get('usuarios', 'usuariosController::verUsuarios');
$routes->get('ventas', 'ventasController::verVentas');
$routes->get('perfumeww', 'ventasController::mostrarPerfumes');

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

$routes->get('genero/localizar/(:num)', 'generoController::localizarGenero/$1');
$routes->post('genero/modificar', 'generoController::modificarGenero');

$routes->get('envy', fn() => view('envy'));
$routes->get('missdiorM', fn() => view('missdiorM'));
$routes->get('chanelcoco', fn() => view('chanelcoco'));
$routes->get('missdior', fn() => view('missdior'));
$routes->get('myburberry', fn() => view('myburberry'));
$routes->get('212forher', fn() => view('212forher'));

$routes->get('coach', fn() => view('coach'));
$routes->get('blooming', fn() => view('blooming'));
$routes->get('rose', fn() => view('rose'));
$routes->get('missdiorroses', fn() => view('missdiorroses'));
$routes->get('pasione', fn() => view('pasione'));
$routes->get('ardent', fn() => view('ardent'));


$routes->get('Sauvagecarrusel', fn() => view('Sauvagecarrusel'));
$routes->get('Pololbelcarrusel', fn() => view('Pololbelcarrusel'));
$routes->get('Hollistercarrusel', fn() => view('Hollistercarrusel'));
$routes->get('Ralphlaurenpolo', fn() => view('Ralphlaurenpolo'));
$routes->get('Ckbe', fn() => view('Ckbe'));
$routes->get('LouisVcarru', fn() => view('LouisVcarru'));

$routes->get('Hgbossunlimited', fn() => view('Hgbossunlimited'));
$routes->get('Hgbosssport', fn() => view('Hgbosssport'));
$routes->get('versacecarru', fn() => view('versacecarru'));
$routes->get('YvesSaint', fn() => view('YvesSaint'));
$routes->get('HgbossNight', fn() => view('HgbossNight'));
$routes->get('Versaceenergycarru', fn() => view('Versaceenergycarru'));
$routes->get('creditos', fn() => view('creditos'));
