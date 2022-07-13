<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;


class productoController extends Controller{

    public function productos(){

        $producto = new Producto();
        $data['productos'] = $producto->orderBy('id', 'ASC')->findAll();


        echo view('/homepage/new_start_aside');

        echo view('/Productos/productos');

        echo view('Productos/crud_productos', $data);

        echo view('/homepage/end_aside'); 

    }

    public function crear(){
        return view('Productos/crear');
    }

     public function guardar(){

         $producto= new Producto();

         
            
             $data=[
                 'nombre'=>$this->request->getPost('nombre'),
                 'stock'=>$this->request->getPost('stock'),
                 'codigo'=>$this->request->getPost('codigo')
             ];

             $producto->insert($data);

         return $this->response->redirect(site_url('productos'));
     }

    public function borrar($id=null){

        $producto= new Producto();
        $dataProducto=$producto->where('id',$id)->first();
        
        $producto->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('productos'));

    }

    public function editar($id=null){
        print_r($id);
        $producto= new Producto();
        $data['producto']=$producto->where('id', $id)->first();

        // echo view('/homepage/new_start_aside');

        // echo view('/Productos/productos'); 

        return view('Productos/editar', $data);
    }

    public function actualizar(){
        $producto= new Producto();
        $data=[
            'nombre'=>$this->request->getVar('nombre'),
            'stock'=>$this->request->getVar('stock'),
            'codigo'=>$this->request->getVar('codigo')
        ];
        $id= $this->request->getVar('id');


        $producto->update($id,$data);

        return $this->response->redirect(site_url('productos'));
        
        }

    }

?>

