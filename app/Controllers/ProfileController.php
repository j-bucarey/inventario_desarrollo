<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
      


        // $this->load->view('App\Views\barra.html');

    //    return redirect()->to("/")->with('message','Bienvenido' .$session->username);
    echo view('/homepage/home_page');
    //     echo "Hello : ".$session->get('nombre');
    }
}