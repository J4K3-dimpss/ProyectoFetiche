<?php
namespace App\Controllers;

use App\Models\Generos;
use CodeIgniter\Controller;

class ControladorGeneros extends BaseController {

    // Mostrar todos los géneros
    public function verGeneros() {
        $genero = new Generos();
        $datosBD['datosBD'] = $genero->findAll();
        return view('Registro_de_generos', $datosBD);
    }

    // Guardar nuevo género
    public function guardarGenero() {
        $id = $this->request->getVar('txt_id');
        $descripcion = $this->request->getVar('txt_descripcion');

        $genero = new Generos();
        $datos = [
            'id_genero' => $id,
            'descripcion' => $descripcion
        ];
        $genero->insert($datos);
        return $this->verGeneros();
    }

    // Eliminar género
    public function eliminarGenero($id = null) {
        $genero = new Generos();
        $genero->delete($id);
        return $this->verGeneros();
    }

    // Localizar género para editar
    public function localizarGenero($id = null) {
        $genero = new Generos();
        $datosGenero['datosGenero'] = $genero->where('id_genero', $id)->first();
        return view('frm_actualizarGenero', $datosGenero);
    }

    // Modificar género
    public function modificarGenero() {
        $id = $this->request->getVar('txt_id');
        $descripcion = $this->request->getVar('txt_descripcion');

        $genero = new Generos();
        $datos = ['descripcion' => $descripcion];
        $genero->update($id, $datos);
        return $this->verGeneros();
    }
}