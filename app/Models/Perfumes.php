<?php
    namespace App\Models;
use CodeIgniter\Model;

    class Perfumes extends Model{
        protected $table = 'perfume';
        protected $primaryKey = 'id_perfume';
        protected $allowedFields = ['id_perfume','nombre','id_genero','marca','descripcion','precio' ];
    }
?>