<?php

namespace App\Controllers;

use App\Models\PostModel;
use Config\Services;
use App\Controllers\ConfigServices;

use App\Controllers\BaseController;
use CodeIgniter\Config\Services as CodeIgniterConfigServices;
use CodeIgniter\HTTP\ResponseInterface;

class PostController extends BaseController{
    public function index() {
        $session = \Config\Services::session();        

        // Load the view file
        return view('main_view', ['session' => $session]);
    }

    public function products_inds() {   
        $session = session();
        $data['name'] = "Product";     
        return view('product_view', $data);
    }

    public function productList(){
        $session = \Config\Services::session();        

        // Load the view file
        return view('product_list', ['session' => $session]);        
    }


    public function productDetail(){
        $session = \Config\Services::session();        

        // Load the view file
        return view('product_detail', ['session' => $session]);        
    }

    public function userIndexs(){
        $session = \Config\Services::session();        

        // Load the view file
        return view('users', ['session' => $session]);   
    }

    // handle add new post ajax request
    public function add() {
        $file = $this->request->getFile('file');
        $fileName = $file->getRandomName();

        $data = [
            'title_product' => $this->request->getPost('title_product'),
            'category_product' => $this->request->getPost('category_product'),
            'body_product' => $this->request->getPost('body_product'),
            'id_user' => $this->request->getPost('id_user'),
            'username' => $this->request->getPost('username'),
            'image' => $fileName,
            'created_at' => date('Y-m-d H:i:s')
        ];
        // print_r($data);

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'image' => 'uploaded[file]|max_size[file,1024]|is_image[file]|mime_in[file,image/jpg,image/jpeg,image/png]',
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'error' => true,
                'message' => $validation->getErrors()
            ]);
        } else {
            $file->move('uploads/avatar', $fileName);
            $postModel = new PostModel();
            $postModel->save($data);
            return $this->response->setJSON([
                'error' => false,
                'message' => 'Successfully added new post!'
            ]);
        }
    }
    // handle fetch all posts ajax request
    public function fetch() {
        $session = session();
        $postModel = new PostModel();
        $idUser = $session->get('id_user');
        $posts = $postModel->where('id_user', $idUser)->findAll();

        // print_r(json_encode((object)$posts));

        $data = '';

        if ($posts) {
            foreach ($posts as $post) {                
                $data .= '<div class="col-md-4">
                <div class="card shadow-sm">
                  <a href="#" id="' . $post['id_product'] . '" data-bs-toggle="modal" data-bs-target="#detail_post_modal" class="post_detail_btn"><img src="uploads/avatar/' . $post['image'] . '" class="img-fluid card-img-top"/></a>
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="card-title fs-5 fw-bold">' . $post['title_product'] . '</div>
                      <div class="badge bg-dark">' . $post['category_product'] . '</div>
                    </div>
                    <p>
                      ' . substr($post['body_product'], 0, 80) . '...
                    </p>
                  </div>
                  <div class="card-footer d-flex justify-content-between align-items-center">
                    <div class="fst-italic">' . date('d F Y', strtotime($post['created_at'])) . '</div>
                    <div>
                      <a href="#" id="' . $post['id_product'] . '" data-bs-toggle="modal" data-bs-target="#edit_post_modal" class="btn btn-success btn-sm post_edit_btn">Edit</a>                      
                      

                      <a href="#" id="' . $post['id_product'] . '" class="btn btn-danger btn-sm post_delete_btn">Delete</a>
                    </div>
                  </div>
                </div>
              </div>';
            //   print_r(json_encode((object)$data));
            }
            return $this->response->setJSON([
                'error' => false,
                'message' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'error' => false,
                'message' => '<div class="text-secondary text-center fw-bold my-5">No posts found in the database!</div>'
            ]);
        }
    }

    // handle edit post ajax request
    public function edit($id = null) {        
        $postModel = new PostModel();
        $post = $postModel->find($id);
        return $this->response->setJSON([
            'error' => false,
            'message' => $post
        ]);
    }

    // handle update post ajax request
    public function update() {
        $id = $this->request->getPost('id_product');
        $file = $this->request->getFile('file');
        $fileName = $file->getFilename();

        if ($fileName != '') {
            $fileName = $file->getRandomName();
            $file->move('uploads/avatar', $fileName);
            if ($this->request->getPost('old_image') != '') {
                unlink('uploads/avatar/' . $this->request->getPost('old_image'));
            }
        } else {
            $fileName = $this->request->getPost('old_image');
        }

        $data = [
            'title_product' => $this->request->getPost('title_product'),
            'category_product' => $this->request->getPost('category_product'),
            'body_product' => $this->request->getPost('body_product'),
            'image' => $fileName,
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $postModel = new PostModel();
        $postModel->update($id, $data);
        return $this->response->setJSON([
            'error' => false,
            'message' => 'Successfully updated post!'
        ]);
    }

    // handle delete post ajax request
    public function delete($id = null) {        
        $postModel = new PostModel();
        $post = $postModel->find($id);
        $postModel->delete($id);
        unlink('uploads/avatar/' . $post['image']);
        return $this->response->setJSON([
            'error' => false,
            'message' => 'Successfully deleted post!'
        ]);
    }

    // handle fetch post detail ajax request
    public function detail($id = null) {
        $postModel = new PostModel();
        $post = $postModel->find($id);
        return $this->response->setJSON([
            'error' => false,
            'message' => $post
        ]);
    }
}
