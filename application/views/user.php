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
    Antrian Online
  </title>
  <!-- Favicon -->
  <link href="<?php echo base_url('argon/'); ?>assets/img/theme/vue.jpg" rel="icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url('argon/'); ?>assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?php echo base_url('argon/'); ?>assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url('argon/'); ?>assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('argon/assets/css/argon-dashboard.css'); ?>">
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="<?php echo base_url('argon/'); ?>index.html">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="<?php echo base_url('argon/'); ?>index.html">
                  <img src="<?php echo base_url('argon/'); ?>assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url('data_user/logout'); ?>">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header 
   
     //$kode = "A-".($jml+1);
    // $nama = array('A','B','C','D','E' );
    // for ($i=1; $i <= $row ; $i++) { 
     // var_dump($teller);
     // }-->
    <?php
    foreach ($row as $isi) {
      $hho = $this->model_user->antrian($isi->id_jenis)->num_rows();
      echo $hho+1;
    ?>
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Selamat Datang!</h1>
              <p class="text-lead text-light">Silahkan Pilih Apakah Anda Mau Trailler Atau Menuju Administrator??</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    
      <div class="container mt--9 pb-5">
        <div class="row justify-content">
           <div class="col-xl-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-10">Costomer Server</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $hho; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> <?php echo date('Y-m-d',strtotime('-2 day')); ?></span>
                    <span class="text-nowrap">Pendaftaran sebelumnya</span>
                  </p>
                </div>
                <div class="card-footer">
                  <button class="btn btn-success btn-block" data-toggle="modal" data-target="#daftar">Antri</button>
                </div>
              </div>
            </div>
            <!--<div class="col-xl-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-10">Teller</h5>
                      <span class="h2 font-weight-bold mb-0"><?php //echo $teller; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> <?php //echo date('Y-m-d',strtotime('-5 day')); ?></span>
                    <span class="text-nowrap">Antian Sebelumnya</span>
                  </p>
                </div>
                <div class="card-footer">
                  <button class="btn btn-block btn-info" data-toggle="modal" data-target="#info">Antri</button>
                </div>
              </div>
            </div>-->
        </div>
        <div class="modal fade" id="daftar">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Daftar Antrian</h3>
              </div>
              <div class="modal-body">
                <form method="post" action="<?php echo base_url('data_user/daftar/'.$hho); ?>">
                <div class="form-group" align="center">
                    <img src="<?php echo base_url('mitra.png') ?>" width="200">
                </div>
                <input class="form-control" name="" type="text" disabled="true" style="height: 50px; font-size: 30px;" value="<?php echo $hho; ?>">
                <input type="hidden" name="id-daftar" value="<?php echo $hho; ?>">
              </div>
              <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Batal</button>
                <button class="btn btn-success" type="submit">Daftar</button>
                </form>  
              </div>
            </div>
          </div>
        </div>
        <!--<div class="modal fade" id="info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Daftar Antrian Teller</h3>
              </div>
              <div class="modal-body">
                <form method="post" action="<?php //echo base_url('data_user/teller/'.$teller); ?>">
                <div class="form-group" align="center">
                    <img src="<?php //echo base_url('mitra.png') ?>" width="200">
                </div>
                <input class="form-control" name="" type="text" disabled="true" style="height: 50px; font-size: 30px;" value="<?php //echo $teller; ?>">
                <input type="hidden" name="id-info" value="<?php //echo $teller; ?>">
              </div>
              <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Batal</button>
                <button class="btn btn-success" type="submit">Daftar</button>
                </form>  
              </div>
            </div>
          </div>
        </div>-->
    </div>
    <?php } ?>
    <footer class="py-5">
      <div class="container">
        
      </div>
    </footer>
  </div>
  <!--   Core   -->
  <script src="<?php echo base_url('argon/'); ?>assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url('argon/'); ?>assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="<?php echo base_url('argon/'); ?>assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>
<script type="text/css">

</script>
</html>