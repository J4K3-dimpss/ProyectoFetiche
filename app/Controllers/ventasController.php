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
public function agregar() {
    $id_perfume = $this->request->getPost('perfume_id');
    $session = session();

    $carrito = $session->get('carrito') ?? [];
    $carrito[] = $id_perfume;
    $session->set('carrito', $carrito);

    return redirect()->back()->with('mensaje', 'Perfume agregado a la compra');
}

public function finalizar() {
    $session = session();
    $carrito = $session->get('carrito') ?? [];
    $id_cliente = $this->request->getPost('id_cliente');

    if (empty($carrito)) {
        return redirect()->back()->with('error', 'No hay perfumes en la compra');
    }

    $venta = new Ventas();
    $datosVenta = [
        'id_cliente' => $id_cliente,
        'fecha_venta' => date('Y-m-d')
    ];
    $venta->insert($datosVenta);
    $id_venta = $venta->getInsertID();

    $detalleModel = new \App\Models\DetalleVenta();
    foreach ($carrito as $id_perfume) {
        $detalleModel->insert([
            'id_venta' => $id_venta,
            'id_perfume' => $id_perfume,
            'cantidad' => 1
        ]);
    }

    $session->remove('carrito');

    return redirect()->to(base_url('ventas'))->with('mensaje', 'Compra registrada exitosamente');
}

}