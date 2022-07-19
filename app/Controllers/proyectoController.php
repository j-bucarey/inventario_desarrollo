<?php 
namespace App\Controllers;

use App\Models\ProyectoModel;
use CodeIgniter\Controller;

class proyectoController extends Controller{
    public function proyectos(){

        $proyecto = new ProyectoModel();
        $data['proyectos'] = $proyecto->orderBy('id', 'ASC')->findAll();


        echo view('/homepage/new_start_aside');

        echo view('/Proyectos/proyectos');

        echo view('Proyectos/crud_proyectos', $data);

        echo view('/homepage/end_aside'); 

    }


    public function crear_proyectos(){
        return view('Proyectos/crear_proyectos');
    }
    public function guardar_proyecto(){

        $proyecto= new ProyectoModel();
           
        $data=[
            'nombre_proyecto'=>$this->request->getPost('nombre_proyecto'),
            'fecha_inicio'=>$this->request->getPost('fecha_inicio'),
            'fecha_entrega'=>$this->request->getPost('fecha_entrega'),
            'codigo_estado'=>$this->request->getPost('codigo_estado')

        ];

        $proyecto->insert($data);

    return $this->response->redirect(site_url('proyectos'));
       
    }


    public function borrar_proyecto($id=null){

        $proyecto= new ProyectoModel();
        $dataproyecto=$proyecto->where('id',$id)->first();

        $proyecto->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('/proyectos'));

    }

    public function editar_proyecto($id=null){
        // print_r($id);
        $proyecto= new ProyectoModel();
        $data['proyecto']=$proyecto->where('id', $id)->first();

       
        return view('Proyectos/editar_proyectos', $data);
    }
    public function actualizar_proyecto(){
        $proyecto= new ProyectoModel();
        $data=[
            'nombre_proyecto'=>$this->request->getVar('nombre_proyecto'),
            'fecha_inicio'=>$this->request->getVar('fecha_inicio'),
            'fecha_entrega'=>$this->request->getVar('fecha_entrega'),
            'codigo_estado'=>$this->request->getVar('codigo_estado')
        ];
        $id= $this->request->getVar('id');


        $proyecto->update($id,$data);

        return $this->response->redirect(site_url('proyectos'));
        
        }

    
}

?>