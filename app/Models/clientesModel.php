<?php
    namespace App\Models;
use CodeIgniter\Model;

    class Clientes extends Model{
        protected $table = 'cliente';
        protected $primaryKey = 'id_cliente';
        protected $allowedFields = ['id_cliente','nombre','apellido','correo','telefono'];
    }
?>