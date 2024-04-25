<?php namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\model_product;
use CodeIgniter\Exceptions\PageNotFoundException;

class Controller_product extends BaseController{

    public function index(){
        $data['name'] = "Product";
        
        $product = new model_product();
        $data['productall'] = $product->findAll();
        
        echo view("Admin/product_view", $data);
    }

    public function detail_product($id){
        $product = new model_product();
        $data['product_detl'] = $product->where('id_product', $id)->first();

        if(!$data['product_detl']){
			throw PageNotFoundException::forPageNotFound();
		}
            echo view('news_detail', $data);
        }

    public function create(){
        $data['name'] = "Create Product";
        $validation =  \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            $product = new model_product();
            $product->insert([
                "name_product" => $this->request->getPost('name_product'),
                "detail_product" => $this->request->getPost('detail_product'),
                // "slug" => url_title($this->request->getPost('title'), '-', TRUE)
            ]);
            return redirect('Admin/product_view');
        }
        
        echo view('Admin/product_create_view', $data);
    }

    public function edit($id){
        $data['name'] = "Edit Product";
        $product = new model_product();
        $data['product'] = $product->where('id_product', $id)->first();
        
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id_product' => 'required',
            'name_product' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            $product->update($id, [
                "name_product" => $this->request->getPost('name_product'),
                "detail_product" => $this->request->getPost('detail_product'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('Admin/product_view');
        }

        echo view('Admin/product_edit_view', $data);
    }

    public function delete($id){
        $data['name'] = "Product";
        $product = new model_product();
        $product->delete($id);
        return redirect('Product');
    }
}