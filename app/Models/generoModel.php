<?php
    namespace App\Models;
use CodeIgniter\Model;

    class Generos extends Model{
        protected $table = 'genero';
        protected $primaryKey = 'id_genero';
        protected $allowedFields = ['id_genero','descripcion'];
    }
?>