<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\UserModel;

use PDO;

class Controller_dashboard extends BaseController{

    public function index(){
        $data['name'] = "Dashboard";        

        echo view("dashboard_view", $data);
    }

    public function countDashboard(){        
        $data['name'] = "Dashboard";
        
        $db = new PDO('mysql:host=localhost;dbname=DBmakersum', 'root', '');

        // Query the database to get the total number of records
        $stmt = $db->query('SELECT COUNT(*) FROM posts');
        $row = $stmt->fetch(PDO::FETCH_NUM);

        // Return the result as a JSON response
        header('Content-Type: application/json');
        echo json_encode(['total' => $row[0]]);

        echo view("dashboard_view", $data);
    }



    public function fetch_main() {
        $postModel = new PostModel();
        $posts = $postModel->findAll();
    
        $data = '';
    
        if ($posts) {
            foreach ($posts as $post) {
                $data .= '
                <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="/uploads/avatar/' . $post['thumbnail'].'" alt="Card image cap" style="width: 100%;
                            height: 20vw;
                            object-fit: cover;" />
                            <div class="card-body" >
                                <h3 class="card-title" hidden>' . $post['id_product'] . '</h3>
                                <h4 class="card-title">' . substr($post['title_product'], 0, 15) . '</h4>
                                <p class="card-text">
                                    ' . substr($post['singkat_body_product'], 0, 50) . '...
                                </p>
                                <div class="border-bottom"></div><br>
                                <div class="row">
                                    <div class="col-7">
                                        <h1 class="card-title" style="color: #6F4E37;">' . number_format($post['harga'], 0, ',', '.') . '</h1>
                                        <small class="text-muted">By ' . $post['username'] . '</small>                                        
                                    </div>
                                    <div class="col-3">
                                        <form action="' . base_url('/product/detail_load') . '" method="post">
                                            <input type="hidden" name="product_id" value="' .$post['id_product'] . '">
                                            <button type="submit" class="btn btn-primary btn-xs" data-bs-toggle="tooltip"
                                            data-bs-offset="0,1"
                                            data-bs-placement="bottom"
                                            data-bs-html="true"
                                            title="View">
                                            <img src="' . base_url('mywebs/backends/assets/img/logos/eye.png') . '"/>
                                            </button>
                                        </form>                                      
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </div>';
            }
        } else {
            $data = '<div class="text-secondary text-center fw-bold my-5">No posts found in the database!</div>';
        }    
        echo $data;        
    }

    

    public function fetch_sellers() {
        $postModel = new UserModel();
        $status = 'active';
        $posts = $postModel->where('status', $status)->findAll();

        $data = [];

        if ($posts) {
            foreach ($posts as $post) {
                $data[] = [
                    'namatoko' => $post['namatoko'],
                    'username' => $post['username'],
                    'status' => 'Active',
                    'actions' => '
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                            </div>
                        </div>
                    '
                ];
            }
        } else {
            $data = [
                'message' => 'No posts found in the database!'
            ];
        }

        echo json_encode($data);
    }
    public function fetch_buyer() {
        $postModel = new UserModel();
        $status = 'pending';
        $posts = $postModel->where('status', $status)->findAll();

        $data = [];

        if ($posts) {
            foreach ($posts as $post) {
                $data[] = [
                    'id_user' => $post['id_user'],
                    'namatoko' => $post['namatoko'],
                    'username' => $post['username'],
                    'status' => 'Pending',
                    'actions' => '
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                            </div>
                        </div>
                    '
                ];
            }
        } else {
            $data = [
                'message' => 'No posts found in the database!'
            ];
        }

        echo json_encode($data);
    }
    
    public function retriveProduct() {
        $session = session();
        $userModel = new UserModel();        
        $email = $session->get('email');
        $user = $userModel->where('email', $email)->first();

        // $ses_data = [
        //     'id_user' => $user['id_user'],
        //     'username' => $user['username'],
        //     'email' => $user['email'],
        //     'roles' => $user['roles'],                
        //     'isLoggedIn' => TRUE
        // ];       

        $this->updateSessionData($user);
        // print_r($ses_data);              
        // exit;
        $idProduct = $this->request->getPost('product_id');
    
        $postModel = new PostModel();        

        // Load the view file         
        $data['productall'] = $postModel->where('id_product', $idProduct)->findAll();
        echo view('product_detail', $data + ['session' => $session]);
    }

    public function updateSessionData($user){
        $session = session();

        if ($user === null) {
            return;
        }
        $roles = $user['roles'];
        $new_data = [
            'roles' => $roles
        ];
        $session->set($new_data);
    }
}