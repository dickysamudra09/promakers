<?php namespace App\Controllers;

use App\Controllers\BaseController;

class Controller_list_seller extends BaseController{

    public function index(){
        echo view("Admin/list-seller_view");
    }
}