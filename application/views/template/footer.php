      <!-- Footer -->
      <footer class="footer bg-gradient-primary pb-4 pt-5 pt-md-8">
        <div class="row align-items-center justify-content-xl-between">
          <!--<div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>-->
          <!--<div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>-->
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="<?php echo base_url('argon/'); ?>assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url('argon/'); ?>assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="<?php echo base_url('argon/'); ?>assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url('argon/'); ?>assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="<?php echo base_url('argon/'); ?>assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <!-- Datatable -->
  <script src="<?php echo base_url('argon/assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo base_url('argon/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js'); ?>"></script>
  <?php  
  if (!empty($js)) {
    $this->load->view($js);
  }
  ?>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>