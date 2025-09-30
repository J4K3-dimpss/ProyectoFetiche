<?php
namespace App\Controllers;

use App\Models\Usuarios;
use CodeIgniter\Controller;

class usuariosController extends BaseController {

    // Mostrar todos los usuarios
    public function verUsuarios() {
        $usuario = new Usuarios();
        $datosBD['usuarios'] = $usuario->findAll();
        return view('Registro_de_usuarios', $datosBD);
    }

    // Guardar nuevo usuario
    public function guardarUsuario() {

        $nombre = $this->request->getVar('txt_nombre');
        $contraseña = $this->request->getVar('txt_contraseña');
        $rol = $this->request->getVar('txt_rol');

        $usuario = new Usuarios();
        $datos = [

            'nombre_usuario' => $nombre,
            'contraseña' => password_hash($contraseña, PASSWORD_DEFAULT), // Seguridad
            'rol' => $rol
        ];
        $usuario->insert($datos);
        return $this->verUsuarios();
    }
    // Formulario para agregar usuario
    public function formularioAgregar() {
    return view('Formulario_agregar_usuario');
}

    // Eliminar usuario
    public function eliminarUsuario($id = null) {
        $usuario = new Usuarios();
        $usuario->delete($id);
        return $this->verUsuarios();
    }

    // Localizar usuario para editar
    public function localizarUsuario($id = null) {
        $usuario = new Usuarios();
        $datosUsuario['datosUsuario'] = $usuario->where('id_usuario', $id)->first();
        return view('Formulario_editar_usuario', $datosUsuario);
    }

    // Modificar usuario
    public function modificarUsuario() {
        $id = $this->request->getVar('txt_id');
        $nombre = $this->request->getVar('txt_nombre');
        $contraseña = $this->request->getVar('txt_contraseña');
        $rol = $this->request->getVar('txt_rol');

        $usuario = new Usuarios();
        $datos = [
            'nombre_usuario' => $nombre,
            'rol' => $rol
        ];

        // Solo actualiza la contraseña si se ingresó una nueva
        if (!empty($contraseña)) {
            $datos['contraseña'] = password_hash($contraseña, PASSWORD_DEFAULT);
        }

        $usuario->update($id, $datos);
        return $this->verUsuarios();
    }
}