<?php

require_once '../Controllers/customer_controller.php';

$customers = select_all_customers_controller();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Marvellous Enterprise</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/payment.css">

 
</head>
<body>

  <div class="click-closed"></div>
  
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
     
      
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="property-grid.php">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agents-grid.php">Agent</a>
          </li>
         
          
          <li class="nav-item">
            <a class="nav-link" href="../Logout/logout.php"><i class="fa fa-sign-out" arial-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="fa fa-user" arial-hidden="true"></i></a>
          </li>
        </ul>
      </div>
     
    </div>
  </nav>
  <!--/ Nav End /-->
    <?php
        foreach ($customers as $customer) {
    ?> 

        <section class="intro-single">
            <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Your Payment has been processed</h1>
                    <span class="color-text-a">You would hear from us shortly:<?php echo $customer['customer_name']; ?></span>
                    <p>Contact us to recieve more information: 0245181954</p>
                </div>
                </div>
                <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="carthouse.php">Back to Cart</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Payment Process Page
                    </li>
                    </ol>
                </nav>
                </div>
            </div>
            </div>
        </section>
        
    <?php
    };
    ?>
<br>


  
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
           <a href="https://bootstrapmade.com/"></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/popper/popper.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
