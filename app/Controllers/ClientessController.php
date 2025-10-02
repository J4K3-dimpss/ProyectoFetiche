<?php
namespace App\Controllers;

class ClientessController extends BaseController
{
    public function inicio() {
        return view('inicio'); // Página principal del cliente
    }

    public function catalogoMujer() {
        return view('catalogo');
    }

    public function catalogoHombre() {
        return view('index2');
    }
}