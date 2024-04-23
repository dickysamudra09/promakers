<?php namespace App\Controllers;

use App\Controllers\BaseController;

class Controller_category_product extends BaseController{

    public function index(){
        $data['name'] = "Category Product";
        echo view("Admin/category-product_view", $data);
    }
}