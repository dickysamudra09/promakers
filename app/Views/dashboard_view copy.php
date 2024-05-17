<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="<?= base_url('mywebs/backends/assets/img/logos/makers -2.png') ?>">
        <title><?= $name ?></title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                        <a class="navbar-brand brand-logo-mini" href="<?= base_url('/') ?>"><img src="<?= base_url('mywebs/backends/assets/img/logos/makers -2.png') ?>" style="margin-left: 20px; margin-top: 10px;" alt="logo"/></a>
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
                            <div class="col-md-12 grid-margin">
                                <div class="row">
                                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                        <h3 class="font-weight-bold">Welcome</h3>
                                        <h6 class="font-weight-normal mb-0">All systems are running smoothly!<span class="text-primary"> </span></h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                    <div class="justify-content-end d-flex">
                                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                                <a class="dropdown-item" href="#">January - March</a>
                                                <a class="dropdown-item" href="#">March - June</a>
                                                <a class="dropdown-item" href="#">June - August</a>
                                                <a class="dropdown-item" href="#">August - November</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 grid-margin transparent">
                                <div class="row">
                                    <div class="col-md-12 mb-4 stretch-card transparent">
                                        <div class="card card" style="background-image: linear-gradient(to right top, #001e4a, #0f264a, #1c2e48, #293546, #363c44);">
                                            <div class="card-body" style="padding:25px;">
                                                <div class="media">
                                                    <i class="ti-package icon-lg d-flex align-self-center mr-3" style="padding: 10px; color:white;"></i>
                                                    <div class="media-body">
                                                        <p class="card-text display-3 mt-2" style="color:white;">Product</p>
                                                    </div>
                                                </div>                                
                                                <p  id="total" class="display-2" style="color:white;"><b>1090</b></p>
                                                <a href="" class="pl-2" style="color:white; text-decoration: none;">Show table   <i class="ti-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 stretch-card transparent">
                                        <div class="card card" style="background-image: linear-gradient(to right top, #fc4100, #e2004a, #aa006b, #601c72, #00215e);">
                                            <div class="card-body" style="padding:25px;">
                                                <div class="media">
                                                    <i class="ti-user icon-lg d-flex align-self-center mr-3" style="padding: 10px; color:white;"></i>
                                                    <div class="media-body">
                                                        <p class="card-text display-3 mt-2" style="color:white;">Seller</p>
                                                    </div>
                                                </div>                                
                                                <p class="display-2" style="color:white;"><b>1070</b></p>
                                                <a href="" class="pl-2" style="color:white; text-decoration: none;">Show table   <i class="ti-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 stretch-card transparent">
                                        <div class="card card" style="background-image: linear-gradient(to right top, #ffc94a, #ffb332, #ff9b1b, #ff8206, #ff6500);">
                                            <div class="card-body" style="padding:25px;">
                                                <div class="media">
                                                    <i class="ti-layers icon-lg d-flex align-self-center mr-3" style="padding: 10px; color:white;"></i>
                                                    <div class="media-body">
                                                        <p class="card-text display-3 mt-2" style="color:white;">Category Product</p>
                                                    </div>
                                                </div>                                
                                                <p class="display-2" style="color:white;"><b>1070</b></p>
                                                <a href="" class="pl-2" style="color:white; text-decoration: none;">Show table   <i class="ti-arrow-right"></i></a>
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
        // Declare variables
        const $total = $('#total'); // Cache the HTML element with the ID "total"
        let total = 0; // Declare the variable to store the total number of records

        // Send an AJAX request to the server to retrieve the total number of records
        $.ajax({
            url: '<?= base_url('count/dashboard') ?>', // Replace with the URL of your server-side script
            method: 'GET',
            dataType: 'json',
            success: function(data) {
            // Update the total variable with the total number of records
            total = data.total;

            // Update the HTML element with the total number of records
            $total.text('Total records: ' + total);
            },
            error: function(xhr, status, error) {
            console.error(error);
            }
        });
        </script>
    </body>
</html>
