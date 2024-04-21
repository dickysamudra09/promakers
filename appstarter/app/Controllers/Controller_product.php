<?php namespace App\Controllers;

use App\Controllers\BaseController;

class Controller_product extends BaseController{

    public function index(){
        echo view("Admin/product_view");
    }
}