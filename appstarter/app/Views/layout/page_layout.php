<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $name ?></title>
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
            <div class="container-fluid page-body-wrapper">
                <?= $this->include('layout/navbar') ?>

                <?= $this->include('layout/sidebar') ?>

                <?= $this->renderSection('content') ?>

                <?= $this->include('layout/footer') ?>
            </div>
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