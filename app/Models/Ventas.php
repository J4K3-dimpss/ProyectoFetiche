<?php
    namespace App\Models;
use CodeIgniter\Model;

    class Ventas extends Model{
        protected $table = 'venta';
        protected $primaryKey = 'id_venta';
        protected $allowedFields = ['id_venta','id_cliente','fecha_venta' ];
    }
?>v