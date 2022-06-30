<?php 
namespace App\Models;

use CodeIgniter\Model;

class Productos extends Model{
    protected $table      = 'producto';
    protected $allowedFields = ['nombre', 'stock', 'codigo'];
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    public function getProductos(){
        return $this->findAll();
    }
}