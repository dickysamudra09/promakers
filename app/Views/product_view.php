<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path=<?= base_url('mywebs/admins/assets/') ?>
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Product - Makers.my.id</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('mywebs/admins/assets/img/favicon/favicon.ico') ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script> -->
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/fonts/boxicons.css') ?>" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/css/core.css') ?>"  class="template-customizer-core-css"/>
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/css/theme-default.css') ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/css/demo.css') ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>"/>

    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/libs/apex-charts/apex-charts.css') ?>" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url('mywebs/admins/assets/vendor/js/helpers.js') ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('mywebs/admins/assets/js/config.js') ?>"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <!-- ... -->
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <!-- ... -->
                        </g>
                        <image xlink:href="<?= base_url('mywebs/backends/assets/img/logos/makers -2.png') ?>" height="42" width="55" />
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Makers</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="<?= base_url('Dashboard') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Product</span>
            </li>
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">List Product</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="<?= base_url('Product') ?>" class="menu-link">
                    <div data-i18n="Account">All Product</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Account</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">List Account</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="<?= base_url('sellerslist') ?>" class="menu-link">
                    <div data-i18n="Account">Sellers</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?= base_url('buyerslist') ?>" class="menu-link">
                    <div data-i18n="Account">Users</div>
                  </a>
                </li>
              </ul>
            </li>            
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?= base_url('mywebs/backends/assets/img/logos/profile.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?= base_url('mywebs/backends/assets/img/logos/profile.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?= session('username');?></span>
                            <small class="text-muted">Admin</small>
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
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo base_url('/logout'); ?>">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            
            <div class="container-xxl flex-grow-1 container-p-y">
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
                                        <label>Title</label>
                                        <input type="text" name="title_product" class="form-control" placeholder="Title" required>
                                        <div class="invalid-feedback">Post title is required!</div>
                                    </div>

                                    <div class="mb-3">
                                        <label>Category</label>
                                        <input type="text" name="category_product" class="form-control" placeholder="Category" required>
                                        <div class="invalid-feedback">Required!</div>
                                    </div>

                                    <div class="mb-3">
                                        <label>Deskripsi Singkat</label>
                                        <textarea name="singkat_body_product" class="form-control" rows="2" placeholder="Deskripsi singkat" required></textarea>
                                        <div class="invalid-feedback">Required!</div>
                                    </div>
                                    <div class="mb-3">
                                        <label>Deskripsi detail Product</label>
                                        <textarea name="detail_body_product" class="form-control" rows="9" placeholder="Manfaat, Kelebihan/Kekurangan" required></textarea>
                                        <div class="invalid-feedback">Required!</div>
                                    </div>
                                    <div class="mb-3">
                                        <label>Thumbnail</label>
                                        <input type="file" name="thumbnail" id="thumbnail" class="form-control" required>
                                        <div class="invalid-feedback">Required!</div>
                                    </div>

                                    <label>Harga</label>
                                    <div class="input-group">                                      
                                      <span class="input-group-text">Rp</span>
                                      <input
                                        type="number"
                                        class="form-control"
                                        placeholder="Harga"
                                        aria-label="Amount (to the nearest dollar)"
                                        name="harga"
                                      />
                                      <span class="input-group-text">.00</span>
                                    </div><br>
                                    <div class="mb-3">
                                        <label>File Product</label>
                                        <input type="file" name="fileData" id="images" class="form-control" required>
                                        <div class="invalid-feedback">Required!</div>
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
                              <input type="hidden" name="old_thumbnail" id="old_thumbnail">
                              <input type="hidden" name="old_fileData" id="old_fileData">

                              <div class="modal-body p-5">
                                  <div class="mb-3">
                                      <label>Title</label>
                                      <input type="text" name="title_product" id="title_product" class="form-control" placeholder="Title" required>
                                      <div class="invalid-feedback">Post title is required!</div>
                                  </div>

                                  <div class="mb-3">
                                      <label>Category</label>
                                      <input type="text" name="category_product" id="category_product" class="form-control" placeholder="Category" required>
                                      <div class="invalid-feedback">Required!</div>
                                  </div>

                                  <div class="mb-3">
                                      <label>Deskripsi Singkat</label>
                                      <textarea name="singkat_body_product" id="singkat_body_product" class="form-control" rows="2" placeholder="Deskripsi singkat" required></textarea>
                                      <div class="invalid-feedback">Required!</div>
                                  </div>
                                  <div class="mb-3">
                                      <label>Deskripsi detail Product</label>
                                      <textarea name="detail_body_product" id="detail_body_product" class="form-control" rows="9" placeholder="Manfaat, Kelebihan/Kekurangan" required></textarea>
                                      <div class="invalid-feedback">Required!</div>
                                  </div>
                                  <div class="mb-3">
                                      <label>Thumbnail</label>
                                      <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                                      <div class="invalid-feedback">Required!</div>
                                  </div>

                                  <label>Harga</label>
                                  <div class="input-group">                                      
                                    <span class="input-group-text">Rp</span>
                                    <input
                                      type="number"
                                      class="form-control"
                                      placeholder="Harga"
                                      aria-label="Amount (to the nearest dollar)"
                                      name="harga"
                                      id="harga"
                                    />
                                    <span class="input-group-text">.00</span>
                                  </div><br>
                                  <div class="mb-3">
                                      <label>File Product</label>
                                      <input type="file" name="fileData" id="fileData" class="form-control">
                                      <div class="invalid-feedback">Required!</div>                                        
                                  </div>
                                  <div id="post_file" hidden></div>
                                  <div id="post_image"></div>
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
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>                  
                </div>
              </div>
            </footer>
            <!-- / Footer -->            
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
      <div class="content-backdrop fade"></div>
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('mywebs/admins/assets/vendor/libs/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('mywebs/admins/assets/vendor/libs/popper/popper.js') ?>"></script>
    <script src="<?= base_url('mywebs/admins/assets/vendor/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('mywebs/admins/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>

    <script src="<?= base_url('mywebs/admins/assets/vendor/js/menu.js') ?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url('mywebs/admins/assets/vendor/libs/apex-charts/apexcharts.js') ?>"></script>

    <!-- Main JS -->
    <script src="<?= base_url('mywebs/admins/assets/js/main.js') ?>"></script>

    <!-- Page JS -->
    <script src="<?= base_url('mywebs/admins/assets/js/dashboards-analytics.js') ?>"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

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
                        $('.modal-backdrop').hide();
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
                  url: '<?= base_url('post/edit/')?>/' + id,
                  method: 'get',
                  success: function(response) {
                      $("#pid").val(response.message.id_product);
                      $("#old_thumbnail").val(response.message.thumbnail);
                      $("#old_fileData").val(response.message.file_product);
                      $("#title_product").val(response.message.title_product);
                      $("#harga").val(response.message.harga);
                      $("#category_product").val(response.message.category_product);
                      $("#singkat_body_product").val(response.message.singkat_body_product);
                      $("#detail_body_product").val(response.message.detail_body_product);
                      $("#post_image").html('<img src="<?= base_url('uploads/avatar/') ?>' + response.message.thumbnail + '" class="img-fluid mt-2 img-thumbnail" width="150">');                      
                  }
              });
          });

          $('#edit_post_form').submit(function(e) {
              e.preventDefault();
              var formData = new FormData(this);
              $.ajax({
                  url: '<?= base_url('post/update')?>',
                  method: 'post',
                  data: formData,
                  contentType: false,
                  processData: false,
                  success: function(response) {
                      // handle success response
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
                        $('.modal-backdrop').hide();
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
                        $('.modal-backdrop').hide();
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
