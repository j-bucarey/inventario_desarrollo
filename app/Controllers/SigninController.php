<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class SigninController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login/login');
    } 
  
    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            echo $pass;
            echo $password;
           // $authenticatePassword = password_verify($password, $pass);
             if($pass==$password){
                $ses_data = [
                    'id' => $data['id'],
                    'nombre' => $data['nombre'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/profile');
            
            }else{
                $session->setFlashdata('msg', 'La contraseña es incorrecta.');
                return redirect()->to('/signin');
            }
        }else{
            $session->setFlashdata('msg', 'El Email no existe.');
            return redirect()->to('/signin');
        }

    }

    // Ricardo
    public function salir(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

}