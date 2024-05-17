<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="<?= base_url('mywebs/backends/assets/img/logos/makers -2.png') ?>">
    <title>Makers - Find you document & enjoy it</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('Admin/vendors/mdi/css/materialdesignicons.min.css"') ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('mywebs/backends/assets/img/favicons/apple-touch-icon.png "') ?>"/>
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('mywebs/backends/assets/img/favicons/favicon-32x32.png"') ?>"/>
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('mywebs/backends/assets/img/favicons/favicon-16x16.png"') ?>"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('mywebs/backends/assets/img/favicons/favicon.ico"') ?>"/>
    <link rel="manifest" href="<?= base_url('mywebs/backends/assets/img/favicons/manifest.json"') ?>"/>
    <meta name="msapplication-TileImage" content="<?= base_url('mywebs/backends/assets/img/favicons/mstile-150x150.png"') ?>"/>
    <meta name="theme-color" content="#ffffff">
    
    <link href="<?= base_url('mywebs/backends/assets/css/theme.css') ?>" rel="stylesheet" />

  </head>
  <body>
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="<?= base_url('/') ?>"><img src="<?= base_url('mywebs/backends/assets/img/logos/makers -1.png') ?>" height="80" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#beranda">Beranda</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#products">Product</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#category">Category</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="<?= base_url('login') ?>">Login</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="<?= base_url('register') ?>">Sign Up</a></li>
                    <li class="nav-item dropdown px-3 px-lg-0"> <a class="d-inline-block ps-0 py-2 pe-3 text-decoration-none dropdown-toggle fw-medium" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">EN</a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="border-radius:0.3rem;" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">EN</a></li>
                        <li><a class="dropdown-item" href="#!">BN</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section style="padding-top: 7rem;" id="beranda">
        <div class="bg-holder" style="background-image:url(<?= base_url('mywebs/backends/assets/img/hero/hero-bg.svg') ?>);">
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img" src="<?= base_url('mywebs/backends/assets/img/logos/dash people.png') ?>" alt="hero-header"/></div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              <h4 class="fw-bold text-danger mb-3">The best references you can find</h4>
              <h1 class="hero-title">Document, Audio, video & many more</h1>
              <p class="mb-4 fw-medium">We provide easy and quick access to a comprehensive collection of the latest<br class="d-none d-xl-block" />scholarly documents, journals and e-books to meet your research needs.<br class="d-none d-xl-block" /></p>
              <div class="text-center text-md-start"> <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#!" role="button">Find out more</a>
                <!-- <div class="w-100 d-block d-md-none"></div><a href="#!" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo"><span class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"> <img src="assets/img/hero/play.svg" width="15" alt="paly"/></span></a><span class="fw-medium">Play Demo</span> -->
                <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <iframe class="rounded" style="width:100%;max-height:500px;" height="500px" src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><br><br><br>
      <section class="pt-5 pt-md-9" id="category">
        <div class="container" style="margin-top: -150px;">
          <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img src="<?= base_url('mywebs/backends/assets/img/category/shape.svg') ?>" style="max-width: 200px" alt="service" /></div>
          <div class="mb-7 text-center">
            <h5 class="text-secondary">CATEGORY </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">The various categories available</h3>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"><img src="<?= base_url('mywebs/backends/assets/img/logos/documents.png') ?>" alt="" height="100">
                <br><br>
                  <h4 class="mb-3">Best Document</h4>
                  <p class="mb-0 fw-medium">Explore more existing and recent documents.</p>
                </div>
              </div>
              
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"><img src="<?= base_url('mywebs/backends/assets/img/logos/video.png') ?>" alt="" height="100">
                <br><br>
                  <h4 class="mb-3">More Video</h4>
                  <p class="mb-0 fw-medium">Video references from educational and others</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"><img src="<?= base_url('mywebs/backends/assets/img/logos/voice.png') ?>" alt="" height="100">
                <br><br>
                  <h4 class="mb-3">Audio Quality</h4>
                  <p class="mb-0 fw-medium">Discover a variety of other learning audios.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"><img src="<?= base_url('mywebs/backends/assets/img/logos/brick.png') ?>" alt="" height="100">
                <br><br>
                  <h4 class="mb-3">Much Tools</h4>
                  <p class="mb-0 fw-medium">Various kinds of equipment for learning </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-5" id="products">
        <div class="container">
          <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img src="<?= base_url('mywebs/backends/assets/img/dest/shape.svg') ?>" alt="destination" /></div>
          <div class="mb-7 text-center">
            <h5 class="text-secondary">NEWS</h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Product</h3>
          </div>       
          <div class="row" id="show_posts">                      
                <!-- <h1 class="text-center text-secondary my-5">Posts Loading..</h1>             -->
          </div><br>
          <div class="mb-7 text-center">
            <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#!" role="button">More</a>
          </div>           
        </div>
      </section>
      <section id="steps">
        <div class="container">
          <div class="row align-items-center">                        
            <div class="col-lg-6">
              <div class="mb-4 text-start">
                <h5 class="text-secondary">Easy and Fast </h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Steps in defining your search</h3>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="<?= base_url('mywebs/backends/assets/img/logos/choose doc.png') ?>" width="25" alt="steps" /></div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Choose Document</h5>
                  <p>Choose the document you are looking for<br class="d-none d-sm-block">and customize it.</p>
                </div>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="<?= base_url('mywebs/backends/assets/img/logos/content.png') ?>" width="25" alt="steps" /></div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">See the content</h5>
                  <p>open preview of any document <br class="d-none d-sm-block"> anywhere.</p>
                </div>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="<?= base_url('mywebs/backends/assets/img/logos/downloads.png') ?>" width="25" alt="steps" /></div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Download it</h5>
                  <p>Download the documents you need <br class="d-none d-sm-block"> quickly and easily.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-start">
            <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:800px;top:-110px;"> <img src="/mywebs/backends/assets/img/steps/bg.png" style="max-width:250px;" alt="shape" /></div>
              <div class="card">                
                  <img src="<?= base_url('mywebs/backends/assets/img/logos/thinking.png') ?>" alt="" height="550">                   
              </div>
            </div>
            <!-- <div class="col-lg-6 d-flex justify-content-center align-items-start" style="margin-top: -200px;">
              
            </div> -->
          </div>
        </div>
      </section>      
      <section class="pt-6">
        <div class="container">
          <div class="py-8 px-5 position-relative text-center" style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
            <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img src="<?= base_url('mywebs/backends/assets/img/cta/send.png') ?>" style="max-width:70px;" alt="send icon" /></div>
            <div class="position-absolute end-0 top-0 z-index--1"> <img src="<?= base_url('mywebs/backends/assets/img/cta/shape-bg2.png" width="264" alt="cta shape') ?>" /></div>
            <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img src="<?= base_url('mywebs/backends/assets/img/cta/shape-bg1.png') ?>" style="max-width: 340px;" alt="cta shape" /></div>
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-10">
                <h2 class="text-secondary lh-1-7 mb-7">Subscribe to get information, latest news and other interesting offers</h2>
                <form class="row g-3 align-items-center w-lg-75 mx-auto">
                  <div class="col-sm">
                    <div class="input-group-icon">
                      <input class="form-control form-little-squirrel-control" type="email" placeholder="Enter email " aria-label="email" /><img class="input-box-icon" src="<?= base_url('mywebs/backends/assets/img/cta/mail.svg') ?>" width="17" alt="mail" />
                    </div>
                  </div>
                  <div class="col-sm-auto">
                    <button class="btn btn-danger orange-gradient-btn fs--1">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pb-0 pb-lg-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <img class="mb-4" src="<?= base_url('mywebs/backends/assets/img/logos/makers title.png') ?>" width="150" alt="jadoo" />
                    <p class="fs--1 text-secondary mb-0 fw-medium">Find your document in minute, get full Control for much longer.</p>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
                    <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Menu</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Beranda</a></li>
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Product</a></li>
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Category</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
                    <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Help/FAQ</a></li>
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Press</a></li>
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Affiliate</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
                    <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">More</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Airlinefees</a></li>
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Airline</a></li>
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Low fare tips</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
                    <div class="icon-group mb-4"> <a class="text-decoration-none icon-item shadow-social" id="facebook" href="#!"><i class="fab fa-facebook-f"> </i></a><a class="text-decoration-none icon-item shadow-social" id="instagram" href="#!"><i class="fab fa-instagram"> </i></a><a class="text-decoration-none icon-item shadow-social" id="twitter" href="#!"><i class="fab fa-twitter"> </i></a></div>
                    <h4 class="fw-medium font-sans-serif text-secondary mb-3">Discover our app</h4>
                    <!-- <div class="d-flex align-items-center"> <a href="#!"> <img class="me-2" src="assets/img/play-store.png" alt="play store" /></a><a href="#!"> <img src="assets/img/apple-store.png" alt="apple store" /></a></div> -->
                </div>
            </div>
        </div><!-- end of .container-->

        <div class="py-5 text-center">
            <p class="mb-0 text-secondary fs--1 fw-medium">All rights reserved </p>
        </div>
    </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('mywebs/backends/vendors/@popperjs/popper.min.js') ?>"></script>
    <script src="<?= base_url('mywebs/backends/vendors/bootstrap/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('mywebs/backends/vendors/is/is.min.js') ?>"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?= base_url('mywebs/backends/vendors/fontawesome/all.min.js') ?>"></script>
    <script src="<?= base_url('mywebs/backends/assets/js/theme.js') ?>"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
    <script>    
      function fetchAllPosts() {
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