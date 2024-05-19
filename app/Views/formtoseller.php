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
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?= base_url('mywebs/admins/assets/') ?>"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

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
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/css/core.css') ?>"  class="template-customizer-core-css"/>
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/css/theme-default.css') ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/css/demo.css') ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>"/>

    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/libs/apex-charts/apex-charts.css') ?>" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/css/pages/page-auth.css') ?>" />

    <!-- Helpers -->
    <script src="<?= base_url('mywebs/admins/assets/vendor/js/helpers.js') ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('mywebs/admins/assets/js/config.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </head>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <svg
                      width="25"
                      viewBox="0 0 25 42"
                      version="1.1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                      <defs>
                        <path
                          d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                          id="path-1"
                        ></path>
                        <path
                          d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                          id="path-3"
                        ></path>
                        <path
                          d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                          id="path-4"
                        ></path>
                        <path
                          d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                          id="path-5"
                        ></path>
                      </defs>
                      <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                          <g id="Icon" transform="translate(27.000000, 15.000000)">
                            <g id="Mask" transform="translate(0.000000, 8.000000)">
                              <mask id="mask-2" fill="white">
                                <use xlink:href="#path-1"></use>
                              </mask>
                              <use fill="#696cff" xlink:href="#path-1"></use>
                              <g id="Path-3" mask="url(#mask-2)">
                                <use fill="#696cff" xlink:href="#path-3"></use>
                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                              </g>
                              <g id="Path-4" mask="url(#mask-2)">
                                <use fill="#696cff" xlink:href="#path-4"></use>
                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                              </g>
                            </g>
                            <g
                              id="Triangle"
                              transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                            >
                              <use fill="#696cff" xlink:href="#path-5"></use>
                              <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">Sneat</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Sneat! 👋</h4>
              <p class="mb-4">Please sign-in to your account and start the adventure</p>

              <form action="#" method="POST" enctype="multipart/form-data" id="add_seller_form" novalidate>
                <input type="hidden" name="id_user" value="<?= session('id_user');?>">                        
                <input type="hidden" name="status" value="pending"> 
                <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                  <input type="text" class="form-control form-control" id="username" name="username" placeholder="Username/Email" value="<?= session('username');?>">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Nama Toko</label>
                  <input type="text" class="form-control form-control" id="namatoko" name="namatoko" placeholder="Nama Toko">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Provinsi</label>
                  <input type="text" class="form-control form-control" id="Provinsi" name="Provinsi" placeholder="Provinsi">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Kota/Kabupaten</label>
                  <input type="text" class="form-control form-control" id="Kota/Kabupaten" name="Kota/Kabupaten" placeholder="Kota/Kabupaten">
                </div>                
                <div>
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="Alamat" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">No.Telp</label>
                  <input type="number" class="form-control form-control" id="Nummers" name="Nummers" placeholder="Nummber">
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sending</button>
                </div>
              </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="<?= base_url('register') ?>">
                  <span>Create an account</span>
                </a><br>
                <a href="<?= base_url('/') ?>">
                  <span>Back to home</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('mywebs/admins/assets/vendor/libs/jquery/jquery.js') ?>"></script>    
    <script src="<?= base_url('mywebs/backends/vendors/@popperjs/popper.min.js') ?>"></script>
    <script src="<?= base_url('mywebs/admins/assets/vendor/libs/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('mywebs/admins/assets/vendor/libs/popper/popper.js') ?>"></script>
    <script src="<?= base_url('mywebs/admins/assets/vendor/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('mywebs/admins/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>

    <script src="<?= base_url('mywebs/admins/assets/vendor/js/menu.js') ?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= base_url('mywebs/admins/assets/js/main.js') ?>"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- <script>

    // const apiKey = '110faac96291777e1c29cc1be2f97314ea7ae3909f5be30344f3fdc3195c475e';        
    // Mengambil data provinsi dari URL
    const provinsiUrl = 'https://api.binderbyte.com/wilayah/provinsi?api_key=110faac96291777e1c29cc1be2f97314ea7ae3909f5be30344f3fdc3195c475e';

    // Mengambil data kota dari URL
    const kotaUrl = 'https://api.binderbyte.com/wilayah/kabupaten?api_key=110faac96291777e1c29cc1be2f97314ea7ae3909f5be30344f3fdc3195c475e';

    // Fungsi untuk mengisi dropdown menu dengan daftar kota berdasarkan provinsi yang dipilih
    fetch(provinsiUrl)
  .then(response => response.json())
  .then(dataProvinsi => {
    // Simpan data provinsi dan kota ke dalam variabel data
    const data = {
      provinsi: dataProvinsi.value,
      kota: []
    };

    // Mengisi dropdown menu dengan daftar provinsi
    const selectProvinsi = document.getElementById('exampleFormControlSelect1');
    selectProvinsi.innerHTML = '';
    const option = document.createElement('option');
    option.text = 'Pilih provinsi';
    option.value = '';
    selectProvinsi.add(option);
    dataProvinsi.value.forEach(p => {
      const option = document.createElement('option');
      option.text = p.name;
      option.value = p.id;
      selectProvinsi.add(option);
    });

    // Fungsi untuk mengisi dropdown menu dengan daftar kota berdasarkan provinsi yang dipilih
    function populateKotaDropdown(provinsiId) {
      if (!provinsiId) {
        return;
      }

      fetch(`${kotaUrl}?id_provinsi=${provinsiId}&api_key=110faac96291777e1c29cc1be2f97314ea7ae3909f5be30344f3fdc3195c475e`)
        .then(response => {
          if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
          }
          return response.json();
        })
        .then(dataKota => {
          data.kota = dataKota.rajaongkir.results;
          const selectKota = document.getElementById('exampleFormControlSelect2');
          selectKota.innerHTML = '';
          const option = document.createElement('option');
          option.text = 'Pilih kota';
          option.value = '';
          selectKota.add(option);
          dataKota.rajaongkir.results.forEach(kota => {
            const option = document.createElement('option');
            option.text = kota.type + ' ' + kota.name;
            option.value = kota.city_id;
            selectKota.add(option);
          });
        })
        .catch(error => console.error(error));
    }

    // Fungsi untuk menampilkan nama provinsi yang dipilih
    function displaySelectedProvinsi() {
      const select = document.getElementById('exampleFormControlSelect1');
      const value = select.value;
      const label = document.getElementById('selectedProvinsi');
      if (label) {
        if (value) {
          const provinsi = data.provinsi.find(p => p.id === value);
          if (provinsi) {
            label.textContent = `Provinsi yang dipilih: ${provinsi.name}`;
            populateKotaDropdown(value);
          } else {
            label.textContent = '';
          }
        } else {
          label.textContent = '';
        }
      } else {
        console.log('Error: selectedProvinsi element not found');
      }
    }

    // Fungsi untuk menampilkan nama kota yang dipilih
    function displaySelectedKota() {
      const select = document.getElementById('exampleFormControlSelect2');
      const value = select.value;
      const label = document.getElementById('selectedKota');
      if (label) {
        if (value) {
          const kota = data.kota.find(k => k.city_id === value);
          if (kota) {
            label.textContent = `Kota yang dipilih: ${kota.type} ${kota.name}`;
          } else {
            label.textContent = '';
          }
        } else {
          label.textContent = '';
        }
      } else {
        console.log('Error: selectedKota element not found');
      }
    }

    // Panggil fungsi displaySelectedProvinsi() setelah data provinsi dan kota diambil
    displaySelectedProvinsi();
  })
  .catch(error => console.error(error));
  </script> -->
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
            $("#add_seller_form").submit(function(e) {
                console.log("masuk");
                e.preventDefault();
                const formData = new FormData(this);
                if (!this.checkValidity()) {
                e.preventDefault();
                $(this).addClass('was-validated');
                } else {
                $("#add_post_btn").text("Adding...");
                $.ajax({
                    url: '<?= base_url('postseller/add') ?>',
                    method: 'post',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: 'json',
                    success: function(response) {                    
                        $("#add_seller_form").modal('hide');
                        $("#add_seller_form")[0].reset();                        
                        $("#add_seller_form").removeClass('was-validated');
                        $('.modal-backdrop').hide();
                        Swal.fire({
                            title: 'Sending',
                            text: response.message,
                            icon: 'success'
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '<?= base_url('users') ?>';
                            }
                        });
                        fetchAllPosts();
                        $("#add_post_btn").text("Sending");
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
