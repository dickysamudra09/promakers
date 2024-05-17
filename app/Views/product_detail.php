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
                             
            <section class="pt-7">
                <div class="container">
                <?php foreach($productall as $rowpro): ?> 
                    <div class="row align-items-center">
                        <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="<?= base_url() . "/uploads/avatar/" . $rowpro['image']; ?>"></div>
                            <div class="col-md-6 text-md-start text-center py-6">
                            <h1 class="mb-4 fs-9 fw-bold"><?= $rowpro['title_product'] ?></h1>
                            <p class="mb-6 lead text-secondary">Document, Audio, video & many more<br class="d-none d-xl-block" />We provide easy and quick access to a comprehensive collection of the latest scholarly documents, journals and e-books to meet your research needs</p>
                            <div class="text-center text-md-start">
                                <button type="button" class="btn btn-outline-primary">
                                    <span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp; Download
                                </button>
                                <button type="button" class="btn btn-outline-warning">
                                    <span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp; Simpan
                                </button>
                                <!-- <a  class="btn rounded-pill btn-outline-warning" href="#!" role="button">Simpan</a> -->
                            </div><br><br>
                            <p>10868 download</p>
                        </div>            
                    </div>
                <?php endforeach ?> 
                </div>
            </section>
      <section>        
        <div class="container">
            <div class="border-top"></div><br>
                <div class="row align-items-center">
                    <div class="nav-align-top mb-4">
                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                            <button
                                type="button"
                                class="nav-link active"
                                role="tab"
                                data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-home"
                                aria-controls="navs-pills-top-home"
                                aria-selected="true"
                            >
                                Home
                            </button>
                            </li>
                            <li class="nav-item">
                            <button
                                type="button"
                                class="nav-link"
                                role="tab"
                                data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-profile"
                                aria-controls="navs-pills-top-profile"
                                aria-selected="false"
                            >
                                Profile
                            </button>
                            </li>
                            <li class="nav-item">
                            <button
                                type="button"
                                class="nav-link"
                                role="tab"
                                data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-messages"
                                aria-controls="navs-pills-top-messages"
                                aria-selected="false"
                            >
                                Messages
                            </button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                            <p>
                                Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps
                                powder. Bear claw candy topping.
                            </p>
                            <p class="mb-0">
                                Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon
                                jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow
                                jujubes sweet.
                            </p>
                            </div>
                            <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                            <p>
                                Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                                cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                                cheesecake fruitcake.
                            </p>
                            <p class="mb-0">
                                Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                                cotton candy liquorice caramels.
                            </p>
                            </div>
                            <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                            <p>
                                Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                                cupcake gummi bears cake chocolate.
                            </p>
                            <p class="mb-0">
                                Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                                roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                                jelly-o tart brownie jelly.
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </section>    
        <section>
        <div class="container">
            <div class="border-top"></div><br>
                <div class="row align-items-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.
                            </p>
                            <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                        <img class="card-img-bottom" src="../assets/img/elements/1.jpg" alt="Card image cap" />
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.
                            </p>
                            <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                        <img class="card-img-bottom" src="../assets/img/elements/1.jpg" alt="Card image cap" />
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.
                            </p>
                            <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                        <img class="card-img-bottom" src="../assets/img/elements/1.jpg" alt="Card image cap" />
                        </div>
                    </div>
                </div>
            </div>
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
                console.log("hia");
                $.ajax({
                    
                    url: '<?= base_url('post/fetch_main') ?>',                    
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