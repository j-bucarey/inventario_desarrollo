<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;

class proyectoController extends Controller{

    public function proyectos(){

        echo view('/homepage/start_aside');

        echo view('/Proyectos/proyectos');

        echo view('/homepage/end_aside');

    }

}

?>