<?php namespace App\Controllers;

use App\Controllers\BaseController;

class Controller_list_seller extends BaseController{

    public function index(){
        $data['name'] = "Sellers";
        echo view("Admin/list-seller_view", $data);
    }
}