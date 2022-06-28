<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;

class productoController extends Controller{

    public function productos(){

        echo view('/Productos/start_aside');

        echo view('/Productos/productos');

        echo view('/Productos/end_aside');

    }

}

?>