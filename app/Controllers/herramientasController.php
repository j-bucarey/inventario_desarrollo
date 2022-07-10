<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Herramienta;


class herramientasController extends Controller{

    public function herramientas(){

        $herramienta = new Herramienta();
        $data['herramientas'] = $herramienta->orderBy('id', 'ASC')->findAll();


        echo view('/homepage/new_start_aside');

        echo view('/Herramientas/herramientas');

        echo view('Herramientas/crud_herramientas', $data);

        echo view('/homepage/end_aside'); 

    }

    public function crearHerr(){
        return view('Herramientas/crearHerr');
    }

     public function guardarH(){

         $herramienta= new Herramienta();

         
            
             $data=[
                 'nombre'=>$this->request->getPost('nombre'),
                 'codigo'=>$this->request->getPost('codigo'),
                 'stock'=>$this->request->getPost('stock')
             ];

             $herramienta->insert($data);

         return $this->response->redirect(site_url('herramientas'));
     }

    public function borrarHerr($id=null){

        $herramienta= new Herramienta();
        $dataHerramienta=$herramienta->where('id',$id)->first();
        
        $herramienta->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('herramientas'));

    }
}

?>

