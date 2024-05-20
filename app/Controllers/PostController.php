<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\UserModel;
// use App\Models\UserModel;
use Config\Services;
use App\Controllers\ConfigServices;

use App\Controllers\BaseController;
use CodeIgniter\Config\Services as CodeIgniterConfigServices;
use CodeIgniter\HTTP\ResponseInterface;

class PostController extends BaseController{

    
    public function index() {
        $session = session();
        $userModel = new UserModel();
        $email = $session->get('email');
        $user = $userModel->where('email', $email)->first();    
        $this->updateSessionData($user);

        // Load the view file
        return view('main_view', ['session' => $session]);
    }    

    public function products_inds() {   
        $session = session();
        $data['name'] = "Product";     
        return view('product_view', $data);
    }

    public function productList(){
        $session = session();
        $userModel = new UserModel();
        $email = $session->get('email');
        $user = $userModel->where('email', $email)->first();    
        $this->updateSessionData($user);      

        // Load the view file
        return view('product_list', ['session' => $session]);        
    }


    public function productDetail(){
        $session = session();        

        
        // Load the view file
        return view('product_detail', ['session' => $session]);        
    }

    public function userIndexs(){
        $session = session();
        $userModel = new UserModel();
        $email = $session->get('email');
        $user = $userModel->where('email', $email)->first();    
        // $ses_data = [
        //     'id_user' => $user['id_user'],
        //     'username' => $user['username'],
        //     'email' => $user['email'],
        //     'namatoko' => $user['namatoko'],                 
        //     'isLoggedIn' => TRUE
        // ];
        // print_r($ses_data);              
        // exit;
        // $session->set($ses_data);
        $this->updateSessionData($user);  
         
        return view('users', ['session' => $session]);   
    }

    public function formtoseller(){
        $session = session();
        $userModel = new UserModel();
        $email = $session->get('email');
        $user = $userModel->where('email', $email)->first();    
        // $ses_data = [
        //     'id_user' => $user['id_user'],
        //     'username' => $user['username'],
        //     'email' => $user['email'],
        //     'namatoko' => $user['namatoko'],                 
        //     'isLoggedIn' => TRUE
        // ];
        // print_r($ses_data);              
        // exit;
        // $session->set($ses_data);
        $this->updateSessionData($user);         

        // Load the view file
        return view('formtoseller', ['session' => $session]);   
    }   
    
    public function buyerslist() {   
        $session = session();
   
        return view('userslist', ['session' => $session]);
    }
    public function addseller() {
        
        $id = $this->request->getPost('id_user');

        $data = [            
            'status' => $this->request->getPost('status'), 
            'namatoko' => $this->request->getPost('namatoko'),
            'Provinsi' => $this->request->getPost('Provinsi'),
            'Kota/Kabupaten' => $this->request->getPost('Kota/Kabupaten'),
            'Alamat' => $this->request->getPost('Alamat'),
            'Nummers' => $this->request->getPost('Nummers'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        // print_r($data);
        // exit;

        $session = session();
        $userModel = new UserModel();
        $email = $session->get('email');
        $user = $userModel->where('email', $email)->first();    

        $this->updateSessionData($user);
        // print_r($ses_data);              
        // exit;

        $userModel = new UserModel();
        $userModel->update($id, $data);
        return $this->response->setJSON([
            'error' => false,
            'message' => 'Successfully!'
        ]);

        
    }

    public function updatestatusUser($id_url) {                    
        $id = $id_url;
        $data = [            
            'roles' => '2',
            'status' => 'Active',
        ];
        // print_r($data);              
        // exit;
        $userModel = new UserModel();
        $userModel->where('id_user', $id)->set($data)->update();
        return $this->response->setJSON([
            'error' => false,
            'message' => 'Successfully!'
        ]);    

        $session = session();
        $userModel = new UserModel();
        $email = $session->get('email');
        $user = $userModel->where('email', $email)->first();    

        $this->updateSessionData($user);
    }

    // handle add new post ajax request
    public function add() {

        $file_product = $this->request->getFile('fileData');
        $thumbnail = $this->request->getFile('thumbnail');

        if ($file_product !== null && $file_product->isValid()) {
            $file_product_name = $file_product->getRandomName();
            $file_product->move('uploads/files', $file_product_name);
        } else {
            $file_product_name = '';
        }

        if ($thumbnail !== null && $thumbnail->isValid()) {
            $file_thumbnail_name = $thumbnail->getRandomName();
            $thumbnail->move('uploads/avatar', $file_thumbnail_name);
        } else {
            $file_thumbnail_name = '';
        }

        $data = [
            'title_product' => $this->request->getPost('title_product'),
            'category_product' => $this->request->getPost('category_product'),
            'singkat_body_product' => $this->request->getPost('singkat_body_product'),
            'detail_body_product' => $this->request->getPost('detail_body_product'),
            'harga' => $this->request->getPost('harga'),
            'file_product' => $file_product_name,        
            'id_user' => $this->request->getPost('id_user'),
            'username' => $this->request->getPost('username'),
            'thumbnail' => $file_thumbnail_name,
            'created_at' => date('Y-m-d H:i:s')
        ];
        // print_r($data);
        // exit;


        $postModel = new PostModel();
        $postModel->save($data);

        return $this->response->setJSON([
            'error' => false,
            'message' => 'Successfully added new post!'
        ]);
        // $file = $this->request->getFile('file');
        // $fileData = $this->request->getFile('fileData');
        // $fileName = $file->getRandomName();
        // $fileNameFile = $fileData->getRandomName();

        // $data = [
        //     'title_product' => $this->request->getPost('title_product'),
        //     'category_product' => $this->request->getPost('category_product'),
        //     'singkat_body_product' => $this->request->getPost('singkat_body_product'),
        //     'detail_body_product' => $this->request->getPost('detail_body_product'),
        //     'harga' => $this->request->getPost('harga'),
        //     'file_product' => $fileName,
        //     'id_user' => $this->request->getPost('id_user'),
        //     'username' => $this->request->getPost('username'),
        //     'image' => $fileName,
        //     'created_at' => date('Y-m-d H:i:s')
        // ];
        // // print_r($data);

        // $validation =  \Config\Services::validation();
        // $validation->setRules([
        //     'image' => 'uploaded[file]|max_size[file,1024]|is_image[file]|mime_in[file,image/jpg,image/jpeg,image/png]',            
        // ]);
        // if (!$validation->withRequest($this->request)->run()) {
        //     return $this->response->setJSON([
        //         'error' => true,
        //         'message' => $validation->getErrors()
        //     ]);
        // } else {
        //     $file->move('uploads/avatar', $fileName);
        //     $fileData->move('uploads/avatar', $fileNameFile);
        //     $postModel = new PostModel();
        //     $postModel->save($data);
        //     return $this->response->setJSON([
        //         'error' => false,
        //         'message' => 'Successfully added new post!'
        //     ]);
        // }
    }


    public function sellerslist(){
        $session = session();        

        
        // Load the view file
        return view('sellerslist', ['session' => $session]);        
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
                  <a href="#" id="' . $post['id_product'] . '" data-bs-toggle="modal" data-bs-target="#detail_post_modal" class="post_detail_btn"><img src="uploads/avatar/' . $post['thumbnail'] . '" class="img-fluid card-img-top" style="width: 100%;
                  height: 15vw;
                  object-fit: cover;"/></a>
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="card-title fs-5 fw-bold">' . $post['title_product'] . '</div>
                      <div class="badge bg-dark">' . $post['category_product'] . '</div>
                    </div>
                    <p>
                      ' . substr($post['singkat_body_product'], 0, 80) . '...
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

        $file = $this->request->getFile('fileData');
        $thumbnail = $this->request->getFile('thumbnail');

        $fileData = $this->request->getPost('old_fileData');
        $thumbnailData = $this->request->getPost('old_thumbnail');

        // Jika ada file baru, upload file baru
        if ($file->getSize() > 0) {
            $fileName = $file->getRandomName();
            $file->move('uploads/files', $fileName);
            $fileData = $fileName;
        }

        // Jika ada thumbnail baru, upload thumbnail baru
        if ($thumbnail->getSize() > 0) {
            $fileNamethumbnail = $thumbnail->getRandomName();
            $thumbnail->move('uploads/avatar', $fileNamethumbnail);
            $thumbnailData = $fileNamethumbnail;
        }
        $data = [
            'title_product' => $this->request->getPost('title_product'),
            'category_product' => $this->request->getPost('category_product'),
            'ingkat_body_product' => $this->request->getPost('singkat_body_product'),
            'detail_body_product' => $this->request->getPost('detail_body_product'),
            'harga' => $this->request->getPost('harga'),
            'file_product' => $fileData,
            'thumbnail' => $thumbnailData,
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
        unlink('uploads/avatar/' . $post['thumbnail']);
        unlink('uploads/files/' . $post['file_product']);
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

    public function updateSessionData($user){
        $session = session();
        if ($user === null) {
            return;
        }
        $roles = $user['roles'];
        $namatoko = $user['namatoko'];
        $new_data = [
            'roles' => $roles,
            'namatoko' => $namatoko,
        ];
        $session->set($new_data);
    }
    
}
