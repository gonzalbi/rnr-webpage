<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('partials/head'); ?>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <div class='main-scroll'>
<?php $this->load->view('partials/header'); ?>

  <main id="main" class="scroll-container" style="margin-right:0;">

    <?php 
      $this->load->library('Mobile_Detect');
      $detect = new Mobile_Detect();
      if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
        $this->load->view('mobilelanding'); 
      }else{
        $this->load->view('landing'); 
      }

    ?>

  </main><!-- End #main -->

  <?php $this->load->view('partials/footer'); ?>
</div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
