<?php
namespace App\Controllers;

use App\Models\Perfumes;
use App\Models\Generos;
use CodeIgniter\Controller;

class perfumesController extends BaseController {

    // Mostrar todos los perfumes
    public function verPerfumes() {
        $perfume = new Perfumes();
        $datosBD['perfumes'] = $perfume->findAll();

        // También puedes cargar los géneros si quieres mostrar el nombre en vez del ID
        $genero = new Generos();
        $datosBD['generos'] = $genero->findAll();

        return view('Registro_de_perfumes', $datosBD);
    }

    public function formularioNuevo() {
    $genero = new Generos();
    $datos['generos'] = $genero->findAll(); // Para llenar el select de género
    return view('Formulario_nuevo_perfume', $datos);
}


    // Guardar nuevo perfume
    public function guardarPerfume() {

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
        $perfume->insert($datos);
        return $this->verPerfumes();
    }

    // Eliminar perfume
    public function eliminarPerfume($id = null) {
        $perfume = new Perfumes();
        $perfume->delete($id);
        return redirect()->to('perfumes')->with('mensaje', 'Perfume eliminado correctamente');
    }

    // Localizar perfume para editar
    public function localizarPerfume($id = null) {
    $modelo = new Perfumes();
    $datos['perfume'] = $modelo->where('id_perfume', $id)->first();

    $genero = new Generos();
    $datos['generos'] = $genero->findAll();

    return view('Formulario_perfume', $datos);

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
    public function buscarPerfume() {
    $query = $this->request->getGet('query');

    $modelo = new Perfumes();
    $datos['perfumes'] = $modelo
        ->like('nombre', $query)
        ->orLike('marca', $query)
        ->findAll();

    $genero = new Generos();
    $datos['generos'] = $genero->findAll();

    return view('Registro_de_perfumes', $datos);
}
}