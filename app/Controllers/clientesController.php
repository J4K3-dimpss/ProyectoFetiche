<?php
    namespace App\Controllers;
 
use App\Models\Clientes;
use CodeIgniter\Controller;
 
    class ControladorClientes extends BaseController{
        public function verClientes(){
            $cliente = new Clientes();
            $datosBD['datosBD'] = $cliente->findAll();
            return view('Registro de usuarios',$datosBD);
        }
 
        public function guardarMunicipio(){
            $codigo = $this->request->getVar('txt_codigo');
            $nombre = $this->request->getVar('txt_nombre');
            $cod_depto = $this->request->getVar('txt_cod_depto');
 
            $muni = new Municipio();
            $datos=['cod_muni'=>$codigo,
                    'nombre_municipio'=>$nombre,
                    'cod_depto'=>$cod_depto];
            $muni->insert($datos);
            return $this->verMunicipios();
        }
 
        public function eliminarMunicipio($codigo=null){
            $municipio = new Municipio();
            $municipio->delete($codigo);
            return $this->verMunicipios();
        }
 
        public function localizarMunicipio($codigo=null){  
            $municipio = new Municipio();
            $datosMunicipio['datosMunicipio']=$municipio->where('cod_muni',$codigo)->first();
            return view('frm_actualizarMunicipio',$datosMunicipio);  
        }
 
        public function modificarMunicipio(){
            $codigo = $this->request->getVar('txt_codigo');
            $nombre = $this->request->getVar('txt_nombre');
            $codigoDepto = $this->request->getVar('txt_cod_depto');
 
            $municipio = new Municipio();
        $datos=[
            'nombre_municipio'=>$nombre,
            'cod_depto'=>$codigoDepto];
 
 
            $municipio->update($codigo,$datos);
            return $this->verMunicipios();
        }
    }