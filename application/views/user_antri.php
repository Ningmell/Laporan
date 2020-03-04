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
        </div>
      </div>
    </nav>
    <!-- Header -->
    
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Selamat Datang <?php echo $this->session->userdata('username');; ?></h1>
              <p class="text-lead text-light"><b>NOMER ANTRIAN ANDA</b></p>
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
        <div class="row justify-content-center">
            <div class="col-xl-4 bg-gradient-primary">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body text-center mb-6">
                  <div class="row" >
                    <div class="col">
                      <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                          <div class="card-profile-image">
                            <a href="#">
                            <img src="<?php echo base_url('argon/'); ?>assets/img/theme/vue.jpg" class="rounded-circle">
                            </a>
                          </div>
                        </div>
                      </div>
                      <p class="card-header text-center border-0 pt-8 pt-md-7 pb-0 pb-md-4">
                      <h5 class="card-title-center text-uppercase text-muted mb-10"><h2><?php echo $this->session->userdata('jenis_antrian'); ?></h2></h5>
                      <span class="h2 font-weight-bold mb-0"><?php ?></span>
                      </p>
                    </div>
                  </div>
                  <p class="mt-0 mb-0 text-muted text-sm bg-gradient-primary">
                    <!--<span class="text-info mr-2"><i class="fas fa-arrow-down"></i> <?php //echo "Jam Belum dibuat" ?></span>-->
                    <span class="text-nowrap"><h2>Antian Anda</h2></span>
                    <h3 style="font-size: 40px; font-weight: bold;"><?php echo $this->session->userdata('id_antrian'); ?></h3>
                  </p>
                </div>
                <div class="card-footer">
                  <!--<button class="btn btn-block btn-info">Info</button>-->
                </div>
              </div>
            </div>
        </div>
    </div>
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