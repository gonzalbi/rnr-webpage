<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('partials/head'); ?>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  
  <?php $this->load->view('partials/header'); ?>

  <main id="main">
   <!-- ======= Blog Section ======= -->
    <section id='blogEntry' class='blogEntry'>
      <div class='blogEntry-banner-container'>
        <img src='assets/img/blogminiatures/<?php echo $blog["miniature"]; ?>' />
      </div>
      <div class='blogEntry-title-container'>
        <h1><?php echo $blog["titulo"]; ?></h1>
      </div>
      <div class='blogEntry-container'>
        <div class='blogEntry-autor-container'>
          <div class='blogEntry-autorimg-container'>
          <img src='assets/img/rnrteam/<?php echo $blog["autor_img"]; ?>' />
        </div>
          <h3><?php echo $blog["autor"]; ?></h3>  
        </div>
        <div class='blogEntry-article-container'>
          <?php echo $blog["html_text"]; ?>
        </div>
      </div>
    </section>
   <!-- End Portfolio Section -->


</main><!-- End #main -->


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