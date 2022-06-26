<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Proyecto;
class Proyecto extends Controller{

    public function index(){
        return view('proyecto/listar');
    }

}