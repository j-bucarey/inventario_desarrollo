<?php 
namespace App\Controllers;

use App\Models\ProyectoModel;
use CodeIgniter\Controller;
use App\Models\UserModel;
class proyectoController extends Controller{
    public function proyectos(){
<<<<<<< HEAD

    //     model = model(ProyectoModel::class);
    // $data['proyectos'] = $model->getProyectos();

=======
>>>>>>> 5fb230429c8753909c2464b5c5f26f962a93b246
        echo view('/homepage/new_start_aside');

        echo view('/Proyectos/proyectos');

        echo view('Proyectos/crud_proyectos');

        echo view('/homepage/end_aside');

    }

}
<<<<<<< HEAD


=======
>>>>>>> 5fb230429c8753909c2464b5c5f26f962a93b246
?>