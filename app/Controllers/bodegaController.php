<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;

class bodegaController extends Controller{

    public function bodega(){

        echo view('/homepage/start_aside');

        echo view('/Bodega/bodega');

        echo view('/homepage/end_aside');

    }

}

?>