<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProyectoModel extends Model
{
    protected $table      = 'proyecto';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    //Campos que vamos a modificar
    protected $allowedFields = ['nombre_proyecto','fecha_inicio','fecha_entrega'];

    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updateField = '';
    
    // Reglas de validaciones
    protected $validationRules = [
        'nombre_proyecto' => 'requeired|min_length[3]',
    ];

    protected $validationMesages = [];
    protected $skipValidation = false;

    public function getProyecto(){
        return $this->findAll();
    }

}