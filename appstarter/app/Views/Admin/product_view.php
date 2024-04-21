<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <link rel="stylesheet" href="<?= base_url('Admin/vendors/feather/feather.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('Admin/vendors/ti-icons/css/themify-icons.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('Admin/vendors/css/vendor.bundle.base.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('Admin/vendors/ti-icons/css/themify-icons.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('Admin/js/select.dataTables.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('Admin/css/vertical-layout-light/style.css') ?>" />
    <link rel="shortcut icon" href="<?= base_url('Admin/images/favicon.png') ?>" />
</head>
<body>
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="<?= base_url('Admin/images/logo.svg') ?>" class="mr-2" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('Admin/images/logo-mini.svg') ?>" alt="logo"/></a>
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
                            <img src="<?= base_url('Admin/images/faces/face28.jpg') ?>" alt="profile"/>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
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
        <div class="container-fluid page-body-wrapper">
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Dashboard') ?>">
                        <i class="icon-grid menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
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
                        <i class="icon-paper menu-icon"></i>
                        <span class="menu-title">Product</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Category-product') ?>">
                        <i class="icon-paper menu-icon"></i>
                        <span class="menu-title">Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('list-seller') ?>">
                        <i class="icon-paper menu-icon"></i>
                        <span class="menu-title">Seller</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Advanced Table</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table id="example" class="display expandable-table" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Quote#</th>
                                                            <th>Product</th>
                                                            <th>Business type</th>
                                                            <th>Policy holder</th>
                                                            <th>Premium</th>
                                                            <th>Status</th>
                                                            <th>Updated at</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                </table>
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
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
            </div>
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
            </div>
        </footer> 
    </div>
    <script src="<?= base_url('Admin/vendors/js/vendor.bundle.base.js') ?>" /></script>
    <script src="<?= base_url('Admin/vendors/chart.js/Chart.min.js') ?>" /></script>
    <script src="<?= base_url('Admin/vendors/datatables.net/jquery.dataTables.js') ?>" /></script>
    <script src="<?= base_url('Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>" /></script>
    <script src="<?= base_url('Admin/js/dataTables.select.min.js') ?>" /></script>
    <script src="<?= base_url('Admin/js/off-canvas.js') ?>" /></script>
    <script src="<?= base_url('Admin/js/hoverable-collapse.js') ?>" /></script>
    <script src="<?= base_url('Admin/js/template.js') ?>" /></script>
    <script src="<?= base_url('Admin/js/settings.js') ?>" /></script>
    <script src="<?= base_url('Admin/js/todolist.js') ?>" /></script>
    <script src="<?= base_url('Admin/js/dashboard.js') ?>" /></script>
    <script src="<?= base_url('Admin/js/Chart.roundedBarCharts.js') ?>" /></script>
</body>

</html>

