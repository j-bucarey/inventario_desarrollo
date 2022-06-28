<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;

class herramientasController extends Controller{

    public function herramientas(){

        echo view('/Herramientas/start_aside_herramient');

        echo view('/Herramientas/herramientas');

        echo view('/Herramientas/end_aside_herramient');

    }

}

?>