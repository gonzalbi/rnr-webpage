<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('partials/head'); ?>

<body style="background-color: #000;">

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  
  <?php $this->load->view('partials/header'); ?>

  <main id="main" style="margin-right: 3vw;">
   <!-- ======= Blog Section ======= -->
    <section id='blogEntry' class='blogEntry'>
      <div class='blogEntry-banner-container'>
        <img src='assets/img/blogbanner/<?php echo $blog["banner"]; ?>' style="height:100%!important;"/>
      </div>
      <div class='blogEntry-title-container'>
        <h1 style="font-family:'Westmount'!important;"><?php echo $blog["titulo"]; ?></h1>
      </div>
      <div class='blogEntry-scrollable'>
      <div class='blogEntry-container'>
        <div class='blogEntry-autor-container'>
          <div class='blogEntry-autorimg-container'>
          <img src='assets/img/rnrteam/<?php echo $blog["autor_img"]; ?>' />
        </div>
          <div style="overflow:hidden;">
            <h3>POR <?php echo $blog["autor"]; ?></h3>  
            <h6><?php echo date("d F Y", strtotime($blog["date"])); ?></h6>
          </div>
        </div>
        <div class='blogEntry-article-container'>
          <?php echo $blog["html_text"]; ?>
        </div>
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
