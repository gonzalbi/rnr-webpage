<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('partials/head'); ?>

	<head>
		<style>
    	#main::-webkit-scrollbar{
        display:none;
    		}
		</style>
	</head>
	
<body style="background-color: #000;">

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <div class='main-scroll'>

  <?php $this->load->view('partials/header'); ?>

  <main id="main" class="blogEntry-main" style="scroll-snap-type:initial;height: 99vh;overflow-y:scroll;"> <!-- style agregado -->
   <!-- ======= Blog Section ======= -->
    <section id='blogEntry' class='blogEntry' style="height:initial;">  <!-- style agregado -->
      <div class='blogEntry-banner-container' style="background-color:black;">
        <img class="centrarbannerblog" src='assets/img/blogbanner/<?php echo $blog["banner"]; ?>' />
      </div>
      <div class='blogEntry-title-container'>
        <h1 style="font-family:'Helvetica'!important;"><?php echo $blog["titulo"]; ?></h1>
      </div>
      <div class='blogEntry-scrollable' style="height:100%;width:100%;"> <!-- style agregado -->
      <div class='blogEntry-container'>
        <div class='blogEntry-autor-container'>
          <div class='blogEntry-autorimg-container'>
          <img src='assets/img/author-img/<?php echo $blog["autor_img"]; ?>' />
        </div>
          <div class="blog-info-container"style="overflow:hidden;">
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
