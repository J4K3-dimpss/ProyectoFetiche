<?php
namespace App\Controllers;

use App\Models\Ventas;
use App\Models\Clientes;
use CodeIgniter\Controller;

class ventasController extends BaseController {

    // Mostrar todas las ventas
    public function verVentas() {
        $venta = new Ventas();
        $datosBD['ventas'] = $venta->findAll();

        // También puedes cargar los clientes para mostrar nombres en vez de IDs
        $cliente = new Clientes();
        $datosBD['clientes'] = $cliente->findAll();

        return view('Registro_de_ventas', $datosBD);
    }

    // Guardar nueva venta
    public function guardarVenta() {
        $id = $this->request->getVar('txt_id');
        $id_cliente = $this->request->getVar('txt_id_cliente');
        $fecha = $this->request->getVar('txt_fecha');

        $venta = new Ventas();
        $datos = [
            'id_venta' => $id,
            'id_cliente' => $id_cliente,
            'fecha_venta' => $fecha
        ];
        $venta->insert($datos);
        return $this->verVentas();
    }

    // Eliminar venta
    public function eliminarVenta($id = null) {
        $venta = new Ventas();
        $venta->delete($id);
        return $this->verVentas();
    }

    // Localizar venta para editar
public function localizarVenta($id = null) {
    $ventaModel = new Ventas();
    $clienteModel = new Clientes();

    $venta = $ventaModel->where('id_venta', $id)->first();
    $clientes = $clienteModel->findAll();

    return view('frm_actualizarVenta', [
        'venta' => $venta,
        'clientes' => $clientes
    ]);
}

    // Modificar venta
    public function modificarVenta() {
        $id = $this->request->getVar('txt_id');
        $id_cliente = $this->request->getVar('txt_id_cliente');
        $fecha = $this->request->getVar('txt_fecha');

        $venta = new Ventas();
        $datos = [
            'id_cliente' => $id_cliente,
            'fecha_venta' => $fecha
        ];
        $venta->update($id, $datos);
        return $this->verVentas();
    }
    public function buscarVenta() {
    $query = $this->request->getGet('query');

    $venta = new Ventas();
    $datosBD['ventas'] = $venta
        ->like('fecha_venta', $query)
        ->orLike('id_cliente', $query) // si usas nombres, deberías hacer join con clientes
        ->findAll();

    $cliente = new Clientes();
    $datosBD['clientes'] = $cliente->findAll();

    return view('Registro_de_ventas', $datosBD);
}
}