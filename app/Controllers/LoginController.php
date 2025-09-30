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
    return redirect()->to('perfumes');

        }
    }
    public function logout()
{
    session()->destroy();
    return redirect()->to('login');
    if (!session()->get('usuario')) {
    return redirect()->to('login');
}
}
}