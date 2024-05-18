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
                            <img class="card-img-top" src="/uploads/avatar/' . $post['image'].'" alt="Card image cap" style="width: 100%;
                            height: 15vw;
                            object-fit: cover;" />
                            <div class="card-body">
                                <h2 class="card-title">' . $post['id_product'] . '</h2>
                                <h2 class="card-title">' . $post['title_product'] . '</h2>
                                <p class="card-text">
                                    ' . $post['body_product'] . '
                                </p>
                                <div class="border-bottom"></div><br>
                                <div class="row">
                                    <div class="col-7">
                                        <h1 class="card-title" style="color: green;">$18.00</h1>
                                        <small class="text-muted">By ' . $post['username'] . '</small>                                        
                                    </div>
                                    <div class="col-3">
                                        <form action="' . base_url('/product/detail_load') . '" method="post">
                                            <input type="hidden" name="product_id" value="' .$post['id_product'] . '">
                                            <button type="submit" class="btn btn-primary btn-xs" data-bs-toggle="tooltip"
                                            data-bs-offset="0,4"
                                            data-bs-placement="bottom"
                                            data-bs-html="true"
                                            title="Download">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbFJREFUSEvNlT+oTnEYxz+fsBgY1FUMUsogk4G73AyMFqUMSsmfQrHIeO8oWSTKjRSDslhslDIIg4WJkaIri6JMX+d3O+d27ut97zl679V9ltP5nec8n+f7PM95jqywucLx+X+AJKnV/ATuqheWQ92CghagiXtQfTYu5K8SJbkMXAGeqIeGAZpk1M4SDwNsAr4Ca4Bt6qdByFiAEizJA+AYcFUtihbZcgAmgZfAd2Cr+rtNGBtQq3gP7AKOq/eT3AZOj2j6rHomyQ3gPHBdvVh8RzYpSQlWgr5R9yZZB7wA9g1AXgFT9dk3YCOwU/3QBVgPfAE2AHvUt0kmgHdAuRabA3arc0mOVoEfAq/VhSSWHLOW5Hvqibp05eWipNiUWhSUwXgKHABOqXcalV2AHcBHoDR5Qv1RB5vvhTpb328BPgO/gM1q2Qbz1vmhJHkO7AcuqdeGNbnaMjOViOl6xZxs+/QBHAEejZiewePJpmT/omAtUCZiewfksXp40KdTQc/MR7r1AiS5WY3k2arRt9Rz7WhLPevV5HpKmn9FmZxFSbXX/LDtujoUjNOHXgpWNeAPkxeqGWldSwsAAAAASUVORK5CYII="/>
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

    public function retriveProduct() {
        $session = session();
        $userModel = new UserModel();        
        $email = $session->get('email');
        $user = $userModel->where('email', $email)->first();

        $ses_data = [
            'id_user' => $user['id_user'],
            'username' => $user['username'],
            'email' => $user['email'],
            'roles' => $user['roles'],                
            'isLoggedIn' => TRUE
        ];       

        $this->updateSessionData($user);
        // print_r($ses_data);              
        // exit;
        $idProduct = $this->request->getPost('product_id');
    
        $postModel = new PostModel();        

        // Load the view file         
        $data['productall'] = $postModel->where('id_product', $idProduct)->findAll();
        echo view('product_detail', $data + ['session' => $session]);
    }

    public function updateSessionData($user)
        {
            $session = session();
            $roles = $user['roles'];
            $new_data = [
                'roles' => $roles
            ];
            $session->set($new_data);
        }
}