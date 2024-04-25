<?php namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\model_product;

class Controller_list_seller extends BaseController{

    public function index(){
        $data['name'] = "Sellers";

        $news = new model_product();
        $data['newses'] = $news->findAll();
        echo view("Admin/list-seller_view", $data);
    }
}