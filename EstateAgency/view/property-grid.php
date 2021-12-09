<?php

require_once '../Controllers/product_controller.php';

$products = select_all_products_controller();
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
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> -->

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
         
          
        
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="../index.php">Marvellous<span class="color-b">Enterprise</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="property-grid.php">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agents-grid.php">Agents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="contact.php">Contact</a> -->
            <a href="carthouse.php">
              <i class="fa fa-home" aria-hidden="true"></i>
                <span id="checkout_item" class="checkout_items">0</span>
            </a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href="../Logout/logout.php"><i class="fa fa-sign-out" arial-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="fa fa-user" arial-hidden="true"></i></a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
            <span class="color-text-a">Grid Properties</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="../index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Properties Grid
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <?php
          foreach ($products as $product) {
        ?> 
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
            
              <div class="img-box-a">
              <a href="property-single.php?productid=<?php echo $product['product_id']?>">
                <img src="<?php echo "../admin" . $product['product_image']; ?>" alt="product_image" width="300" height="400"> </a>
              </div>
             
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="property-single.php?productid=<?php echo $product['product_id']?>">
                        <br /><?php echo $product['product_title']; ?></a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a"><?php echo "GHS" . " " .$product['product_price']; ?></span>
                    </div>
                    <a href="../Action/add_to_cart.php?productid=<?php echo $product['product_id']?>" class="link-a">CLICK HERE TO RENT PLACE
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                   <p><?php echo $product['product_desc']; ?> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
          };
          ?>
      </div>
      
    </div>
  </section>

  <?php if (isset($c_id)) : ?>

<div>
    <div class="customer_id" data-flashdata="<?php echo $c_id; ?>"></div>

</div>

<?php endif; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$("a[data-item-id=stand-out]").click(function(e) {
    e.preventDefault();

    var p_Id = $(this).attr("data-id");
    console.log("The id of this product is " + p_Id);

    const c_id = $('.customer_id').data('flashdata');

    console.log("The id of this customer is " + c_id);

    var ip_add = window.localStorage.getItem('user_ip');

    var data = {
        p_id: p_Id,
        c_id: c_id,
        ip_add: ip_add,
        submit: "cart"
    };

    console.log(data);

    $.ajax({
        url: '../actions/add_to_cart.php',
        method: 'POST',
        // contentType: 'application/json',
        dataType: 'Json',
        data: data,
        success: function(response, textStatus, jqXHR) {
            // window.location.href = "../actions/add_to_cart.php";

            // var oJsonResponse = JSON.stringify(response);
            console.log(response);

            if (response['check'] != 'product exists' && response['message'] == 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Product added to cart',
                    text: 'click to proceed to cart',
                    showCancelButton: true,
                    confirmButtonText: 'OK',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "../views/carthouse.php"
                    }
                });
            } else {
                Swal.fire({
                    icon: 'info',
                    title: 'Product already exist in cart',
                    text: 'Proceed to increase the quantity',
                    showCancelButton: true,
                    confirmButtonText: 'OK',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "../views/carthouse.php"
                    }
                });
            }

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
        }
    });


});
</script>


<!-- Newsletter  timestamp=2:10:55-->


  <!--/ footer Star /-->
  

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

  <script>
      $("#rent-place").click(function(e) {
        const c_id = $('.rent_id').attr('href');
        console.log(c_id)
      })
  </script>

</body>
</html>
