<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
  </title>
  <!-- Favicon -->
  <link href="<?php echo base_url('argon/'); ?>assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url('argon/'); ?>assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?php echo base_url('argon/'); ?>assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url('argon/'); ?>assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('argon/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css.sweetalert.css'); ?>">
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="<?php echo base_url('argon/'); ?>index.html">
        <img src="<?php echo base_url('argon/'); ?>assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?php echo base_url('argon/'); ?>assets/img/theme/team-1-800x800.jpg
">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="<?php echo base_url('argon/'); ?>examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="<?php echo base_url('argon/'); ?>examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="<?php echo base_url('argon/'); ?>examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="<?php echo base_url('argon/'); ?>examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="<?php echo base_url('argon/'); ?>index.html">
                <img src="<?php echo base_url('argon/'); ?>assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <!--<li class="nav-item  class=" active" ">
          <a class=" nav-link active " href="<?php //echo base_url('argon/') ?>"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>-->
          <?php  
          if ($this->session->userdata('level') == '1') {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Petugas/smua_antrian'); ?>">
              <i class="ni ni-credit-card text-pink"></i> Data Antrian
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Petugas/data'); ?>">
              <i class="ni ni-badge text-info"></i> Data Petugas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('data_user/data'); ?>">
              <i class="ni ni-circle-08 text-yellow"></i> Data User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('jenis/'); ?>">
              <i class="ni ni-books text-success"></i> Data Jenis
            </a>
          </li>
          <?php
          } else {
            if ($this->session->userdata('id_jenis') == '1') {
              echo '
              <li class="nav-item">
                <a href="'.base_url('Petugas/detail_servis').'" class="nav-link" data-toggle="modal" data-target="#detail">
                  <i class="ni ni-chart-pie-35 text-blue"></i> Detail Profil
                </a>
              </li>
              ';
            } else {
              echo '
              <li class="nav-item">
                <a href="'.base_url('Petugas/teller').'" class="nav-link">
                  <i class="ni ni-credit-card text-pink"></i> Data Teller
                </a>
              </li>
              ';
            }
          }
          ?>
          <!--<li class="nav-item">
            <a class="nav-link " href="<?php //echo base_url('argon/'); ?>examples/profile.html">
              <i class="ni ni-single-02 text-yellow"></i> User profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php //echo base_url('argon/'); ?>examples/tables.html">
              <i class="ni ni-bullet-list-67 text-red"></i> Tables
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php //echo base_url('argon/'); ?>examples/login.html">
              <i class="ni ni-key-25 text-info"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php //echo base_url('argon/'); ?>examples/register.html">
              <i class="ni ni-circle-08 text-pink"></i> Register
            </a>
          </li>-->
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Documentation</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <!--<li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
              <i class="ni ni-spaceship"></i> Getting started
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-palette">ui-04</i> Foundation
            </a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('awal/logout'); ?>">
              <i class="ni ni-spaceship"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo base_url('argon/'); ?>index.html">Dashboard</a>
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"></a>
        <!-- Form 
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>-->
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <!--<span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?php echo base_url('argon/'); ?>assets/img/theme/team-4-800x800.jpg">
                </span>-->
                <div class="media-body ml-2 d-none d-lg-block">
                  <!--<span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>-->
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="<?php echo base_url('argon/'); ?>examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="<?php echo base_url('argon/'); ?>examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="<?php echo base_url('argon/'); ?>examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="<?php echo base_url('argon/'); ?>examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <?php 
    foreach ($petugas as $key) {
     ?>
    <div class="modal fade " id="detail">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3>Detail</h3>
          </div>
          <div class="modal-body">
            <label for="">Nama : </label><br>
            <label for="">Userame :</label><br>
            <label for="">Jenis Kelamin :</label><br>
            <label for="">Alamat :</label><br>
            <label for="">Tempat Tanggal Lahir :</label><br>
            <label for="">Email :</label><br>
            <label for="">No Ktp :</label><br>
            <label for="">No HP :</label><br>
            <label for="">Ket :</label>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>