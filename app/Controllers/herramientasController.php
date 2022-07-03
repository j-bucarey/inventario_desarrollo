<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;

class herramientasController extends Controller{

    public function herramientas(){

        echo view('/homepage/new_start_aside');

        echo view('/Herramientas/herramientas');

        echo view('/homepage/end_aside');

    }

}

?>