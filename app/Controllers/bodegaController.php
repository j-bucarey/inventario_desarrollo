<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\Bodega;

class bodegaController extends Controller{

    public function bodegas(){

        $bodega = new Bodega();
        $data['bodega'] = $bodega->orderBy('id', 'ASC')->findAll();


        echo view('/homepage/new_start_aside');

        echo view('/Bodegas/bodegas');

        echo view('Bodegas/crud_bodega', $data);

        echo view('/homepage/end_aside'); 

    }

    public function crear_bodega(){
        return view('Bodegas/crear_bodega');
    }

     public function guardar_bodega(){

         $bodega= new Bodega();

             $data=[
                 'nombre'=>$this->request->getPost('nombre'),
                 'stock'=>$this->request->getPost('stock'),
                 'codigo'=>$this->request->getPost('codigo')
             ];

             $bodega->insert($data);

         return $this->response->redirect(site_url('bodegas'));
     }

    public function borrar_bodega($id=null){

        $bodega= new Bodega();
        $dataBodega=$bodega->where('id',$id)->first();
        
        $bodega->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('bodegas'));

    }

    public function editar_bodega($id=null){
        $bodega= new Bodega();
        $data['bodega']=$bodega->where('id', $id)->first();

        return view('Bodegas/editar_bodega', $data);
    }

    public function actualizar_Bodega(){
        $bodega= new Bodega();
        $data=[
            'nombre'=>$this->request->getVar('nombre'),
            'stock'=>$this->request->getVar('stock'),
            'codigo'=>$this->request->getVar('codigo')
        ];
        $id= $this->request->getVar('id');


        $bodega->update($id,$data);

        return $this->response->redirect(site_url('bodegas'));
        
        }


}

?>