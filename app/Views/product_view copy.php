<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="<?= base_url('mywebs/backends/assets/img/logos/makers -2.png') ?>">
        <title><?= $name ?></title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
        <link rel="stylesheet" href="<?= base_url('mywebs/admins/vendors/mdi/css/materialdesignicons.min.css"') ?>" />
        <link rel="stylesheet" href="<?= base_url('mywebs/admins/vendors/feather/feather.css') ?>" />        
        <link rel="stylesheet" href="<?= base_url('mywebs/admins/vendors/css/vendor.bundle.base.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('mywebs/admins/vendors/datatables.net-bs4/dataTables.bootstrap4.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('mywebs/admins/vendors/ti-icons/css/themify-icons.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('mywebs/admins/js/select.dataTables.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('mywebs/admins/css/vertical-layout-light/style.css') ?>" />
        <link rel="shortcut icon" href="<?= base_url('mywebs/admins/images/favicon.png') ?>" />

    </head>
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper">
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                    <div class="text-center navbar-brand-wrapper d-flex">
                        <!-- <a class="navbar-brand brand-logo" href="../../index.html"><img src="<?= base_url('mywebs/backends/assets/img/logos/makers title.png') ?>" style="margin-left: 20px; margin-top: 10px;" height="30" alt="logo"/></a> -->
                        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="<?= base_url('mywebs/backends/assets/img/logos/makers -2.png') ?>" style="margin-left: 20px; margin-top: 10px;" alt="logo"/></a>
                        <img src="" height="20" style="margin-left: -100px;" alt="">
                    </div>
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                            <span class="icon-menu"></span>
                        </button>
                        <ul class="navbar-nav mr-lg-2">
                            <li class="nav-item nav-search d-none d-lg-block">
                                <div class="input-group">
                                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                        <span class="input-group-text" id="search">
                                            <i class="icon-search"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                    
                                    <h4 style="margin-top: 10px;"><b><?= session('username');?></b></h4>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                    <a class="dropdown-item">
                                        <i class="ti-settings text-primary"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="<?php echo base_url('/logout'); ?>">
                                        <i class="ti-power-off text-primary"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                            <span class="icon-menu"></span>
                        </button>
                    </div>
                </nav>
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Dashboard') ?>">
                            <i class="ti-view-grid"></i>
                            <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">UI Elements</span>
                            <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                            </ul>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Product') ?>">
                            <p hidden></p>                
                                <i class="ti-package"></i>
                                <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;Product</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Category-product') ?>">
                            <i class="ti-layers"></i>
                            <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;Category</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('list-seller') ?>">
                            <i class="ti-user"></i>
                            <span class="menu-title">&nbsp;&nbsp;&nbsp;&nbsp;Seller</span>
                            </a>
                        </li> -->
                    </ul>
                </nav>
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <div class="text-secondary fw-bold fs-3">All Posts</div>
                                            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#add_post_modal">Add New Post</button>
                                        </div>
                                        <div class="card-body">
                                            <div class="row" id="show_posts">
                                            <h1 class="text-center text-secondary my-5">Posts Loading..</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="add_post_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add New Post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="POST" enctype="multipart/form-data" id="add_post_form" novalidate>                        
                        <div class="modal-body p-5">
                            <input type="hidden" name="id_user" value="<?= session('id_user');?>">                        
                            <input type="hidden" name="username" value="<?= session('username');?>"> 
                            <div class="mb-3">
                                <label>Post Title</label>
                                <input type="text" name="title_product" class="form-control" placeholder="Title" required>
                                <div class="invalid-feedback">Post title is required!</div>
                            </div>

                            <div class="mb-3">
                                <label>Post Category</label>
                                <input type="text" name="category_product" class="form-control" placeholder="Category" required>
                                <div class="invalid-feedback">Post category is required!</div>
                            </div>

                            <div class="mb-3">
                                <label>Post Body</label>
                                <textarea name="body_product" class="form-control" rows="4" placeholder="Body" required></textarea>
                                <div class="invalid-feedback">Post body is required!</div>
                            </div>

                            <div class="mb-3">
                                <label>Post Image</label>
                                <input type="file" name="file" id="image" class="form-control" required>
                                <div class="invalid-feedback">Post image is required!</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="add_post_btn">Add Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="edit_post_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="POST" enctype="multipart/form-data" id="edit_post_form" novalidate>
                        <input type="hidden" name="id_product" id="pid">

                        <input type="hidden" name="old_image" id="old_image">
                        <div class="modal-body p-5">
                            <div class="mb-3">
                                <label>Post Title</label>
                                <input type="text" name="title_product" id="title" class="form-control" placeholder="Title" required>
                                <div class="invalid-feedback">Post title is required!</div>
                            </div>

                            <div class="mb-3">
                                <label>Post Category</label>
                                <input type="text" name="category_product" id="category" class="form-control" placeholder="Category" required>
                                <div class="invalid-feedback">Post category is required!</div>
                            </div>

                            <div class="mb-3">
                                <label>Post Body</label>
                                <textarea name="body_product" class="form-control" rows="4" id="body" placeholder="Body" required></textarea>
                                <div class="invalid-feedback">Post body is required!</div>
                            </div>

                            <div class="mb-3">
                                <label>Post Image</label>
                                <input type="file" name="file" class="form-control">
                                <div class="invalid-feedback">Post image is required!</div>
                            <div id="post_image"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="edit_post_btn">Update Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="detail_post_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Details of Post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="" id="detail_post_image" class="img-fluid">
                        <h3 id="detail_post_title" class="mt-3"></h3>
                        <h5 id="detail_post_category"></h5>
                        <p id="detail_post_body"></p>
                        <p id="detail_post_created" class="fst-italic"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024.<a href="https://www.bootstrapdash.com/" target="_blank"></a>All rights reserved.</span>
                <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span> -->
            </div>
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <!-- <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>  -->
            </div>
        </footer> 
    </body>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="<?= base_url('mywebs/admins/vendors/js/vendor.bundle.base.js') ?>" /></script>
        <script src="<?= base_url('mywebs/admins/vendors/chart.js/Chart.min.js') ?>" /></script>
        <script src="<?= base_url('mywebs/admins/vendors/datatables.net/jquery.dataTables.js') ?>" /></script>
        <script src="<?= base_url('mywebs/admins/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>" /></script>
        <script src="<?= base_url('mywebs/admins/js/dataTables.select.min.js') ?>" /></script>
        <script src="<?= base_url('mywebs/admins/js/off-canvas.js') ?>" /></script>
        <script src="<?= base_url('mywebs/admins/js/hoverable-collapse.js') ?>" /></script>
        <script src="<?= base_url('mywebs/admins/js/template.js') ?>" /></script>
        <script src="<?= base_url('mywebs/admins/js/settings.js') ?>" /></script>
        <script src="<?= base_url('mywebs/admins/js/todolist.js') ?>" /></script>
        <script src="<?= base_url('mywebs/admins/js/dashboard.js') ?>" /></script>
        <script src="<?= base_url('mywebs/admins/js/Chart.roundedBarCharts.js') ?>" /></script>
        <script>
            function fetchAllPosts() {                
                $.ajax({
                url: '<?= base_url('post/fetch') ?>',
                method: 'get',
                success: function(response) {
                    $("#show_posts").html(response.message);
                }
                });
            }

            $(function() {
                // add new post ajax request
                $("#add_post_form").submit(function(e) {
                    e.preventDefault();
                    const formData = new FormData(this);
                    if (!this.checkValidity()) {
                    e.preventDefault();
                    $(this).addClass('was-validated');
                    } else {
                    $("#add_post_btn").text("Adding...");
                    $.ajax({
                        url: '<?= base_url('post/add') ?>',
                        method: 'post',
                        data: formData,
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: 'json',
                        success: function(response) {
                        if (response.error) {
                            $("#image").addClass('is-invalid');
                            $("#image").next().text(response.message.image);
                        } else {
                            $("#add_post_modal").modal('hide');
                            $("#add_post_form")[0].reset();
                            $("#image").removeClass('is-invalid');
                            $("#image").next().text('');
                            $("#add_post_form").removeClass('was-validated');
                            Swal.fire(
                            'Added',
                            response.message,
                            'success'
                            );
                            fetchAllPosts();
                        }
                        $("#add_post_btn").text("Add Post");
                        }
                    });
                    }
                });

                // edit post ajax request
                $(document).delegate('.post_edit_btn', 'click', function(e) {
                    e.preventDefault();
                    const id = $(this).attr('id');        
                    $.ajax({
                    url: '<?= base_url('post/edit/') ?>/' + id,
                    method: 'get',
                    success: function(response) {
                        $("#pid").val(response.message.id_product);
                        $("#old_image").val(response.message.image);
                        $("#title").val(response.message.title_product);
                        $("#category").val(response.message.category_product);
                        $("#body").val(response.message.body_product);
                        $("#post_image").html('<img src="<?= base_url('uploads/avatar/') ?>/' + response.message.image + '" class="img-fluid mt-2 img-thumbnail" width="150">');
                    }
                    });
                });

                // update post ajax request
                $("#edit_post_form").submit(function(e) {
                    e.preventDefault();
                    const formData = new FormData(this);
                    if (!this.checkValidity()) {
                    e.preventDefault();
                    $(this).addClass('was-validated');
                    } else {
                    $("#edit_post_btn").text("Updating...");
                    $.ajax({
                        url: '<?= base_url('post/update') ?>',
                        method: 'post',
                        data: formData,
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: 'json',
                        success: function(response) {
                        $("#edit_post_modal").modal('hide');
                        Swal.fire(
                            'Updated',
                            response.message,
                            'success'
                        );
                        fetchAllPosts();
                        $("#edit_post_btn").text("Update Post");
                        }
                    });
                    }
                });

                // delete post ajax request
                $(document).delegate('.post_delete_btn', 'click', function(e) {
                    e.preventDefault();
                    const id = $(this).attr('id');
                    console.log(id);
                    Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                        url: '<?= base_url('post/delete/') ?>/' + id,
                        method: 'get',
                        success: function(response) {
                            Swal.fire(
                            'Deleted!',
                            response.message,
                            'success'
                            )
                            fetchAllPosts();
                        }
                        });
                    }
                    })
                });
                // post detail ajax request
                $(document).delegate('.post_detail_btn', 'click', function(e) {
                    e.preventDefault();
                    const id = $(this).attr('id');
                    $.ajax({
                    url: '<?= base_url('post/detail/') ?>/' + id,
                    method: 'get',
                    dataType: 'json',
                    success: function(response) {
                        $("#detail_post_image").attr('src', '<?= base_url('uploads/avatar/') ?>/' + response.message.image);
                        $("#detail_post_title").text(response.message.title);
                        $("#detail_post_category").text(response.message.category);
                        $("#detail_post_body").text(response.message.body);
                        $("#detail_post_created").text(response.message.created_at);
                    }
                    });
                });

                // fetch all posts ajax request
                fetchAllPosts();      
            });            
        </script>
    </body>
</html>
   
