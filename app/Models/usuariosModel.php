<?php
    namespace App\Models;
use CodeIgniter\Model;

    class Usuarios extends Model{
        protected $table = 'usuario';
        protected $primaryKey = 'id_usuario';
        protected $allowedFields = ['id_usuario','nombre_usuario','contraseña','rol'];
    }
?>v