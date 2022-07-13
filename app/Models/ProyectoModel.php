<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProyectoModel extends Model
{
    protected $table      = 'proyecto';
    protected $primaryKey = 'id';
    //Campos que vamos a modificar
    protected $allowedFields = ['nombre_proyecto','fecha_inicio','fecha_entrega','codigo_estado'];

 
   

}