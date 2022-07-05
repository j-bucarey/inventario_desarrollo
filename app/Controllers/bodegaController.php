<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;

class bodegaController extends Controller{

    public function bodega(){

        echo view('/homepage/new_start_aside');

        echo view('/Bodega/bodega');

        echo view('/Bodega/crud_bodega');

        echo view('/homepage/end_aside');

    }

}

?>