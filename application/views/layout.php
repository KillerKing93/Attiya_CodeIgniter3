<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?php echo $title ?> </title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/backend/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/backend/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
            <div>
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/skydash-admin-template" target="_blank" class="btn me-2 buy-now-btn border-0">Buy Now</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/skydash-admin-template/"><i class="ti-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="ti-close text-white"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <a class="navbar-brand brand-logo me-5" href="index.html"><img src="<?php echo base_url()?>assets/backend/images/logo.svg" class="me-2" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url()?>assets/backend/images/logo-mini.svg" alt="logo" /></a>
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
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                <img src="<?php echo base_url()?>assets/backend/images/faces/face28.jpg" alt="profile" />
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="ti-settings text-primary"></i> Settings </a>
                <a class="dropdown-item">
                  <i class="ti-power-off text-primary"></i> Logout </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="dasboard">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="fa fa-database menu-icon"></i>
                    <span class="menu-title">Data Utama</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="user">Data User</a></li>
                        <li class="nav-item"> <a class="nav-link" href="karyawan">Data Karyawan</a></li>
                        <li class="nav-item"> <a class="nav-link" href="jabatan">Data Jabatan</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                    <i class="fa fa-credit-card menu-icon"></i>
                    <span class="menu-title">Penggajian</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="absen">Rekap Absensi</a></li>
                        <li class="nav-item"><a class="nav-link" href="penggajian">Data Gaji Karyawan</a></li>
                        <li class="nav-item"><a class="nav-link" href="potongan_gaji">Setting Potongan Gaji</a></li>
                    </ul>
                </div>
            </li>
        </ul>
      </nav>
      <div id="content-wrapper" class="content-wrapper pb-0" style="min-height: calc(100vh - 70px);">
        <?php $this->load->view($isi); ?>
      </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
<script src="<?php echo base_url()?>assets/backend/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url()?>assets/backend/vendors/chart.js/chart.umd.js"></script>
    <script src="<?php echo base_url()?>assets/backend/vendors/datatables.net/jquery.dataTables.js"></script>
    <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
    <script src="<?php echo base_url()?>assets/backend/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="<?php echo base_url()?>assets/backend/js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url()?>assets/backend/js/off-canvas.js"></script>
    <script src="<?php echo base_url()?>assets/backend/js/template.js"></script>
    <script src="<?php echo base_url()?>assets/backend/js/settings.js"></script>
    <script src="<?php echo base_url()?>assets/backend/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?php echo base_url()?>assets/backend/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/backend/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>