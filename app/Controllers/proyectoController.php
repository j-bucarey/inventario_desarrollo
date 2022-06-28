<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;

class proyectoController extends Controller{

    public function proyectos(){

        echo view('/Proyectos/start_aside_proyect');

        echo view('/Proyectos/proyectos');

        echo view('/Proyectos/end_aside_proyect');

    }

}

?>