<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
        />

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/fonts/boxicons.css') ?>" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/css/core.css') ?>"  class="template-customizer-core-css"/>
        <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/css/theme-default.css') ?>" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/css/demo.css') ?>" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>"/>

        <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/libs/apex-charts/apex-charts.css') ?>" />

        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('mywebs/backends/assets/img/favicons/apple-touch-icon.png') ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('mywebs/backends/assets/img/favicons/favicon-32x32.png') ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('mywebs/backends/assets/img/favicons/favicon-16x16.png') ?>">
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('mywebs/backends/assets/img/favicons/favicon.png') ?>">
        <link rel="manifest" href="<?= base_url('mywebs/backends/assets/img/favicons/manifest.json') ?>">
        <meta name="msapplication-TileImage" content="<?= base_url('mywebs/backends/assets/img/favicons/mstile-150x150.png') ?>">
        <meta name="theme-color" content="#ffffff">


        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="<?= base_url('mywebs/backends/assets/css/theme.css') ?>" rel="stylesheet" />

        <!-- Page CSS -->

        <!-- Helpers -->
        <script src="<?= base_url('mywebs/admins/assets/vendor/js/helpers.js') ?>"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="<?= base_url('mywebs/admins/assets/js/config.js') ?>"></script>
    </head>
    <body>
        <main class="main" id="top">
            <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
                <div class="container"><a class="" href="<?= base_url('/') ?>"><img src="<?= base_url('mywebs/backends/assets/img/logos/makers -2.png') ?>" height="50" alt="logo" style="padding: 0;" /></a>
                    <a class="" href="<?= base_url('/') ?>"><img src="<?= base_url('mywebs/backends/assets/img/logos/makers title.png') ?>" height="15" alt="logo" style="left:-0px" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
                    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= base_url('/') ?>">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= base_url('product-list') ?>">Product</a></li>                            
                            <?php if (session()->get('username')) : ?>
                            <li class="nav-item navbar-dropdown dropdown-user dropdown" style="margin-top: -5px;">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="<?= base_url('mywebs/admins/assets/img/avatars/1.png') ?>" alt class="w-px-40 h-auto rounded-circle" width="30" />
                                </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="<?= base_url('mywebs/admins/assets/img/avatars/1.png') ?>" alt class="w-px-40 h-auto rounded-circle" width="30" />
                                        </div>
                                        </div>
                                        <div class="flex-grow-1">
                                        <span class="fw-semibold d-block"></span>
                                        <small class="text-muted"><?= $session->get('username') ?></small>
                                        </div>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                                </ul>
                            </li>      
                            </ul>                    
                            <!-- <p>Welcome, <?= $session->get('username') ?>!</p> -->              
                            <?php else: ?>
                            <div class="d-flex ms-lg-4">
                                <a class="btn btn-secondary-outline" href="<?= base_url('login') ?>">Sign In</a>
                                <a class="btn btn-primary ms-3" href="<?= base_url('register') ?>">Sign Up</a>
                            </div>
                            <?php endif; ?>   
                        </ul>                        
                    </div>
                </div>
            </nav>
            <section class="pt-5 pt-md-9 mb-6" id="feature">

                <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block">
                </div>
                <!--/.bg-holder-->

                <div class="container">
                <h1 class="fs-9 fw-bold mb-4 text-center border-bottom py-7">Our Products <br class="d-none d-xl-block" /><p></p></h1><br>
                    <div class="row" id="show_posts">
                                                                 
                    </div><br><br><br>
                <div class="text-center"><a class="btn btn-primary" href="#!" role="button">SIGN UP NOW</a></div>
                </div><!-- end of .container-->

            </section>
        </main>




        
        <script src="<?= base_url('mywebs/admins/assets/vendor/libs/jquery/jquery.js') ?>"></script>    
        <script src="<?= base_url('mywebs/backends/vendors/@popperjs/popper.min.js') ?>"></script>
        <script src="<?= base_url('mywebs/backends/vendors/bootstrap/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('mywebs/backends/vendors/is/is.min.js') ?>"></script>
        <script src="<?= base_url('mywebs/admins/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
        <script src="<?= base_url('mywebs/admins/assets/vendor/js/menu.js') ?>"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="<?= base_url('mywebs/admins/assets/vendor/libs/apex-charts/apexcharts.js') ?>"></script>

        <!-- Main JS -->
        <script src="<?= base_url('mywebs/admins/assets/js/main.js') ?>"></script>

        <!-- Page JS -->
        <script src="<?= base_url('mywebs/admins/assets/js/dashboards-analytics.js') ?>"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="<?= base_url('mywebs/backends/vendors/fontawesome/all.min.js') ?>"></script>
        <script src="<?= base_url('mywebs/backends/assets/js/theme.js') ?>"></script>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">        
        
        <script>    
            function fetchAllPosts() {                
                $.ajax({
                        url: 'post/fetch_main',
                        type: 'GET',
                        success: function(data) {
                            $('#show_posts').html(data);
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
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
                    icon: 'primary',
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