<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
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
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">

              <div class="row">
                <div class="col align-self-start">
                  <div class="brand-logo">
                    <img src="<?= base_url('mywebs/backends/assets/img/logos/makers title.png') ?>" alt="logo">                                  
                  </div>                  
                </div>
              </div>
              
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" action="<?php echo base_url('/register'); ?>" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Username">
                  <?php if(isset($validation)):?>
                    <small class="text-danger"><?= $validation->getError('username') ?></small>
                  <?php endif;?>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?= set_value('email') ?>" placeholder="email@gmail.com">
                  <?php if(isset($validation)):?>
                    <small class="text-danger"><?= $validation->getError('email') ?></small>
                  <?php endif;?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                  <?php if(isset($validation)):?>
                    <small class="text-danger"><?= $validation->getError('password') ?></small>
                  <?php endif;?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                  <?php if(isset($validation)):?>
                    <small class="text-danger"><?= $validation->getError('confirm_password') ?></small>
                  <?php endif;?>
                </div>
                <!-- <div class="form-group">
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option>Country</option>
                    <option>United States of America</option>
                    <option>United Kingdom</option>
                    <option>India</option>
                    <option>Germany</option>
                    <option>Argentina</option>
                  </select>
                </div> -->
                <!-- <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div> -->
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary btn-block">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?= base_url('login') ?>" class="text-primary"><span>Login</span></a><br>
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
