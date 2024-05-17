<!DOCTYPE html>
<html lang="en">

<head>
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
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= base_url('mywebs/backends/assets/img/logos/makers title.png') ?>" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <?php if(session()->getFlashdata('error')):?>
                  <div class="alert alert-danger">
                      <?= session()->getFlashdata('error') ?>
                  </div>
              <?php endif;?>
              <form class="pt-3" action="<?php echo base_url('/login'); ?>" method="post">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Username/Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary btn-block">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div> -->
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="<?= base_url('register') ?>" class="text-primary">Create</a><br>
                  <a href="<?= base_url('/') ?>"><span class="fs-6">Back to home</span></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
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
  <!-- endinject -->
</body>

</html>
