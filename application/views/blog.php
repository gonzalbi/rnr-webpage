<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('partials/head'); ?>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <div class='main-scroll'>
<?php $this->load->view('partials/header'); ?>

  <main id="main" class="scroll-container">

 <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog section-bg">
    <div class="title-blog">ROCKNROLLAFUTURE</div>
    	<div id='blog-scroll' class="container-fluid" style="max-height: 100%;position: relative;margin-top: 4vh;">
    		<div class="row" style="height: 100%;">
                <div class="col-xs-12" style="height: 100%;overflow: auto;padding-bottom: 12vh;">
                    <?php 
                    
                        foreach($blogEntries as $blogEntry){
                            $parsedDate = date("d F Y", strtotime($blogEntry["date"]));
                            echo "
                                <div class='blog-entry-container'>
                                    <div class='blog-image-container'>
                                        <img src='assets/img/blogminiatures/".$blogEntry["miniature"]."' />
                                    </div>
                                    <div class='blog-text-container'>
                                        <p class='blog-title'>".$blogEntry["titulo"]."</p>
                                        <p class='blog-description'>
                                        ".$blogEntry["resumen"]."
                                        </p>
                                        <div class='blog-btn-date-container'>
                                            <div class='blog-read-more-container'>
                                                <a href='blogEntry?id=".$blogEntry["id"]."'><p>READ MORE</p></a>
                                            </div>
                                            <div class='blog-date-container'>
                                                <p class='blog-date' style='width: 15vh'> ".$parsedDate."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                    ?>
                </div>
            </div>
        </div>
</section><!-- End Blog Section -->

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