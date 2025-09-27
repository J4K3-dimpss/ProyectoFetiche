<?php
namespace App\Controllers;

use App\Models\Clientes;
use CodeIgniter\Controller;

class ControladorClientes extends BaseController {

    // Mostrar todos los clientes
    public function verClientes() {
        $cliente = new Clientes();
        $datosBD['datosBD'] = $cliente->findAll();
        return view('Registro_de_usuarios', $datosBD);
    }

    // Guardar nuevo cliente
    public function guardarClientes() {
        $id = $this->request->getVar('txt_id');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $correo = $this->request->getVar('txt_correo');
        $telefono = $this->request->getVar('txt_telefono');

        $cliente = new Clientes();
        $datos = [
            'id_cliente' => $id,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'correo' => $correo,
            'telefono' => $telefono
        ];
        $cliente->insert($datos);
        return $this->verClientes();
    }

    // Eliminar cliente
    public function eliminarCliente($id = null) {
        $cliente = new Clientes();
        $cliente->delete($id);
        return $this->verClientes();
    }

    // Localizar cliente para editar
    public function localizarCliente($id = null) {
        $cliente = new Clientes();
        $datosCliente['datosCliente'] = $cliente->where('id_cliente', $id)->first();
        return view('frm_actualizarCliente', $datosCliente);
    }

    // Modificar cliente
    public function modificarCliente() {
        $id = $this->request->getVar('txt_id');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $correo = $this->request->getVar('txt_correo');
        $telefono = $this->request->getVar('txt_telefono');

        $cliente = new Clientes();
        $datos = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'correo' => $correo,
            'telefono' => $telefono
        ];
        $cliente->update($id, $datos);
        return $this->verClientes();
    }
}