<?php
namespace App\Controllers;

use App\Models\Perfumes;
use App\Models\Generos;
use CodeIgniter\Controller;

class ControladorPerfumes extends BaseController {

    // Mostrar todos los perfumes
    public function verPerfumes() {
        $perfume = new Perfumes();
        $datosBD['datosBD'] = $perfume->findAll();

        // También puedes cargar los géneros si quieres mostrar el nombre en vez del ID
        $genero = new Generos();
        $datosBD['generos'] = $genero->findAll();

        return view('Registro_de_perfumes', $datosBD);
    }

    // Guardar nuevo perfume
    public function guardarPerfume() {
        $id = $this->request->getVar('txt_id');
        $nombre = $this->request->getVar('txt_nombre');
        $id_genero = $this->request->getVar('txt_id_genero');
        $marca = $this->request->getVar('txt_marca');
        $descripcion = $this->request->getVar('txt_descripcion');
        $precio = $this->request->getVar('txt_precio');

        $perfume = new Perfumes();
        $datos = [
            'id_perfume' => $id,
            'nombre' => $nombre,
            'id_genero' => $id_genero,
            'marca' => $marca,
            'descripcion' => $descripcion,
            'precio' => $precio
        ];
        $perfume->insert($datos);
        return $this->verPerfumes();
    }

    // Eliminar perfume
    public function eliminarPerfume($id = null) {
        $perfume = new Perfumes();
        $perfume->delete($id);
        return $this->verPerfumes();
    }

    // Localizar perfume para editar
    public function localizarPerfume($id = null) {
        $perfume = new Perfumes();
        $datosPerfume['datosPerfume'] = $perfume->where('id_perfume', $id)->first();

        // Cargar géneros para el <select>
        $genero = new Generos();
        $datosPerfume['generos'] = $genero->findAll();

        return view('frm_actualizarPerfume', $datosPerfume);
    }

    // Modificar perfume
    public function modificarPerfume() {
        $id = $this->request->getVar('txt_id');
        $nombre = $this->request->getVar('txt_nombre');
        $id_genero = $this->request->getVar('txt_id_genero');
        $marca = $this->request->getVar('txt_marca');
        $descripcion = $this->request->getVar('txt_descripcion');
        $precio = $this->request->getVar('txt_precio');

        $perfume = new Perfumes();
        $datos = [
            'nombre' => $nombre,
            'id_genero' => $id_genero,
            'marca' => $marca,
            'descripcion' => $descripcion,
            'precio' => $precio
        ];
        $perfume->update($id, $datos);
        return $this->verPerfumes();
    }
}