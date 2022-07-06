<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;


class productoController extends Controller{

    public function productos(){

        $producto = new Producto();
        $data['productos'] = $producto->orderBy('id', 'ASC')->findAll();

        // $model = model(Productos::class);
        // $data['productos'] = $model->getProductos();

        /* echo json_encode($data); */

        echo view('/homepage/new_start_aside');

        echo view('/Productos/productos');

        echo view('Productos/crud_productos', $data);

        echo view('/homepage/end_aside'); 

    }

    public function crear(){
        return view('Productos/crear');
    }

    // public function guardar(){

    //     $producto= new Producto();

    //     if($stock=$this->request->getVar('stock')){
    //         $nuevoNombre= $stock->getRandomName();
    //         $stock->move('../public/uploads/', $nuevoNombre);
            
    //         $data=[
    //             'nombre'=>$this->request->getVar('nombre'),
    //             'stock'=>$this->request->getVar('stock'),
    //             'codigo'=>$nuevoNombre
    //         ];
    //     }

    //     echo "Ingresado a la Base de Datos";
    // }

    public function borrar($id=null){

        $producto= new Producto();
        $dataProducto=$producto->where('id',$id)->first();
        
        $producto->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('productos'));
    }

}
