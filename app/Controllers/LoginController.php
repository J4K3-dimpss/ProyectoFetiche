<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login'); // Asegúrate de que la vista se llame login.php y esté en la carpeta Views
    }

    public function verificar()
{
    $correo = $this->request->getPost('nombre_usuario');
    $password = $this->request->getPost('contraseña');

    $usuarioModel = new UsuarioModel();
    $usuario = $usuarioModel->where('nombre_usuario', $correo)->first();

    if ($usuario && $usuario['contraseña'] === $password) {
        session()->set([
            'usuario' => $usuario['nombre_usuario'],
            'rol' => $usuario['rol']
        ]);

        // Redirigir según el rol
        switch ($usuario['rol']) {
            case 'admin':
                return redirect()->to('admin/inicio'); // créditos.php
            case 'vendedor':
                return redirect()->to('vendedor/ventas'); // Registro_de_ventas.php
            case 'cliente':
                return redirect()->to('cliente/inicio'); // inicio.php
            default:
                return redirect()->to('login')->with('mensaje', 'Rol no reconocido');
        }
    } else {
        return redirect()->to('login')->with('mensaje', 'Credenciales incorrectas');
    }
}
public function logout()
{
    session()->destroy();
    return redirect()->to('login');
}
}
