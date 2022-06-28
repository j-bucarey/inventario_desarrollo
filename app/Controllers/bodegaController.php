<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;

class bodegaController extends Controller{

    public function bodega(){

        echo view('/Bodega/start_aside_bode');

        echo view('/Bodega/bodega');

        echo view('/Bodega/end_aside_bode');

    }

}

?>