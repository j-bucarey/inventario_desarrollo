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
            'fecha_entrega'=>$this->request->getPost('fecha_entrega')
        ];

        $proyecto->insert($data);

    return $this->response->redirect(site_url('proyectos'));
       
    }


    public function borrar_proyecto($id=null){

        $proyecto= new ProyectoModel();
        $dataproyecto=$proyecto->where('id',$id)->first();

        $proyecto->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('crud_proyectos'));


         

    }

    public function editar_proyecto($id=null){


        print_r($id);
        return view('Proyectos/crud_proyectos');

        $proyecto= new ProyectoModel();

        $dataproyecto=$proyecto->where('id',$id)->first();

        return view ('Proyectos/editar_proyectos', $dataproyecto);
    }

    
}

?>