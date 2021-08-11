<head>

<?php 
    $this->load->library('Mobile_Detect');
    $detect = new Mobile_Detect();
    if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
      echo '<script>var onMobile=true</script>';
      $maxwidth = "max-width: 1366px";
      $minwidth = "min-width: 1367px";
    }else{
      echo '<script>var onMobile=false</script>';
      $maxwidth = "min-width: 9999px";
      $minwidth = "min-width: 0px";
    }
?>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ROCKNROLLA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

	<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:url" content="http://wearerocknrolla.com">
<meta property="og:title" content="ROCKRNROLLA">
<meta property="og:description" content="ROCKNROLLA">
<meta property="og:image" content="http://www.wearerocknrolla.com/assets/img/favicon.png" />
<meta property="og:image:alt" content="ROCKNROLLA">
	
  <!-- Favicons -->
  <link href="./assets/img/favicon.png" rel="icon">
  <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="./assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="./assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/prw3lky.css">


  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
