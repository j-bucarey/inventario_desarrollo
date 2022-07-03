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

        echo view('/homepage/new_start_aside');

        echo view('/Productos/productos',$data);

        echo view('/homepage/end_aside'); 

    }

}
