<?php 
namespace App\Controllers;

use App\Models\Productos;
use CodeIgniter\Controller;
use App\Models\UserModel;

class productoController extends Controller{

    public function productos(){

        $model = model(Productos::class);
        $data['productos'] = $model->getProductos();

        /* echo json_encode($data); */

        echo view('/Productos/start_aside');

        echo view('/Productos/productos',$data);

        echo view('/Productos/end_aside'); 

    }

}
