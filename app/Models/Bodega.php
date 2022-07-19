<?php 
namespace App\Models;

use CodeIgniter\Model;

class Bodega extends Model{
    protected $table      = 'bodega';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'stock', 'codigo'];
}