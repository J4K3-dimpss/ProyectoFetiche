<?php
namespace App\Controllers;

class VendedorController extends BaseController
{
    public function inicio() {
        return view('creditos'); // Vista principal del admin
    }

    public function perfumes() {
        return view('Registro_de_perfumes');
    }

    public function clientes() {
        return view('Registro_de_clientes');
    }

    public function generos() {
        return view('Registro_de_generos');
    }

    public function usuarios() {
        return view('Registro_de_usuarios');
    }

    public function ventas() {
        return view('Registro_de_ventas'); // Admin también puede ver esto
    }
}