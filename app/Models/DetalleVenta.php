<?php
namespace App\Models;
use CodeIgniter\Model;

class DetalleVenta extends Model {
    protected $table = 'detalle_venta';
    protected $primaryKey = 'id_detalle';
    protected $allowedFields = ['id_venta', 'id_perfume', 'cantidad'];
}