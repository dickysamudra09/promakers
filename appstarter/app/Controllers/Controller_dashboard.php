<?php namespace App\Controllers;

use App\Controllers\BaseController;

class Controller_dashboard extends BaseController{

    public function index(){
        $data['name'] = "Dashboard";
        echo view("Admin/dashboard_view", $data);
    }
}