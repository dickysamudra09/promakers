<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class Register extends BaseController
{
    public function __construct(){
        helper(['form']);
    }
 
    public function index()
    {
        $data = [];
        $data['name'] = "Register";    
        return view('register', $data);
    }
   
    public function register()
    {
        $rules = [
            'username' => ['rules' => 'required|min_length[8]|max_length[255]'],
            'email' => ['rules' => 'required|min_length[4]|max_length[255]|valid_email|is_unique[users.email]'],
            'password' => ['rules' => 'required|min_length[8]|max_length[255]'],
            'confirm_password'  => [ 'label' => 'confirm password', 'rules' => 'matches[password]']
        ];
           
 
        if($this->validate($rules)){
            $model = new UserModel();
            $data['name'] = "Register";    
            $data = [
                'username' => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'roles'    => $this->request->getVar('roles'),
                'created_at' => date('Y-m-d H:i:s')            
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            return view('register', $data);
        }
           
    }
}
