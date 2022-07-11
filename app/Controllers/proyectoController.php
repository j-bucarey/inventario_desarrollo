<?php 
namespace App\Controllers;

use App\Models\ProyectoModel;
use CodeIgniter\Controller;
use App\Models\UserModel;

class proyectoController extends Controller{

    public function proyectos(){

    //     model = model(ProyectoModel::class);
    // $data['proyectos'] = $model->getProyectos();

        echo view('/homepage/new_start_aside');

        echo view('/Proyectos/proyectos');

        echo view('Proyectos/crud_proyectos');

        echo view('/homepage/end_aside');

    }

}


?>