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

    <title>Makers - Register</title>

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
                    <img src="<?= base_url('mywebs/backends/assets/img/logos/makers -2.png') ?>" alt class="" width="55" style="margin-top: 10px;" />
                  </span>
                  <img src="<?= base_url('mywebs/backends/assets/img/logos/makers title.png') ?>" alt class="" width="90" />
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Adventure starts here 🚀</h4>
              <p class="mb-4">Signing up is easy. It only takes a few steps</p>

              <form id="formAuthentication" class="mb-3" action="<?php echo base_url('/register'); ?>" method="POST">
              <input type="hidden" name="roles" value="1">   
                <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                  <input type="text" class="form-control form-control" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Username">
                  <?php if(isset($validation)):?>
                    <small class="text-danger"><?= $validation->getError('username') ?></small>
                  <?php endif;?>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control form-control" id="email" name="email" value="<?= set_value('email') ?>" placeholder="email@gmail.com">
                  <?php if(isset($validation)):?>
                    <small class="text-danger"><?= $validation->getError('email') ?></small>
                  <?php endif;?>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input type="password" class="form-control form-control" id="password" name="password" placeholder="Password">
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    <?php if(isset($validation)):?>
                      <small class="text-danger"><?= $validation->getError('password') ?></small>
                    <?php endif;?>
                  </div>                 
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" class="form-control form-control" id="confirm_password" name="confirm_password" placeholder="Password">
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  <?php if(isset($validation)):?>
                    <small class="text-danger"><?= $validation->getError('confirm_password') ?></small>
                  <?php endif;?>
                </div> <br>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="<?= base_url('login') ?>">
                  <span>Login?</span>
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
  </body>
</html>
