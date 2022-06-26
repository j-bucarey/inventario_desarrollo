<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;

class registrarController extends Controller{

    public function registro(){

        echo view('Registro/registro');

    }

}

?>