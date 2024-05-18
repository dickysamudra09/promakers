<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    } 
   
    public function authenticate()
    {
        $session = session();
        $userModel = new UserModel();
 
        $email = $this->request->getVar('email');        
        $password = $this->request->getVar('password');
         
        $user = $userModel->where('email', $email)->first();
 
        if(is_null($user)) {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
        }
 
        $pwd_verify = password_verify($password, $user['password']);
 
        if(!$pwd_verify) {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
        }
 
        $ses_data = [
            'id_user' => $user['id_user'],
            'username' => $user['username'],
            'email' => $user['email'],
            'roles' => $user['roles'],                 
            'isLoggedIn' => TRUE
        ];
        // print_r($ses_data);              
        // exit;
        $session->set($ses_data); 

        $this->updateSessionData($user);
        
        return redirect()->to('/users');      
    }

    public function updateSessionData($user){
        $session = session();
        $roles = $user['roles'];
        if ($user === null) {
            return;
        }
        $new_data = [
            'roles' => $roles
        ];
        $session->set($new_data);
    }
 
    public function logout() {
        $session = session();
        $userModel = new UserModel();
        $email = $session->get('email');
        $user = $userModel->where('email', $email)->first();    
        $this->updateSessionData($user); 
        session_destroy();
        return redirect()->to('/');
    }
}
