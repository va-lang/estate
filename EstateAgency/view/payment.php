!DOCTYPE html>
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

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Order Details</h1>
            <span class="color-text-a">Thank you for booking with us</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="carthouse.php">Back to Cart</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Checkout Grid
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
  <br>
<?php
require('../Controllers/cart_controller.php');
$amt = getTotalItemAmountInCart();
$amount = $amt['amount'];

?>
<!-- form -->
<div id="page-main">
    <div id="form">
    <h2>Payment Form</h2>
    <div id="form-area">
        <form id="form">
            <div class="field-group">
			<label for="email">Email</label>
			<input type="email" id="email-address" required />
            </div>

            <div class="field-group">
			<label for="amount">Amount</label>
			<input type="tel" value=<?php echo $amount?> id="amount" required />
            </div>
			<div class="form-submit">
            <button id="next" type="submit" name="btn" value="submit" onclick="payWithPaystack()">Pay</button>
			</div>
		</form>
    </div>
</div>
<br>
<p>All payment details are encrypted. Be rest assured that your details are safe.<p>

	
<!-- PAYSTACK INLINE SCRIPT -->
<script src="https://js.paystack.co/v1/inline.js"></script> 

<script>
const paymentForm = document.getElementById('form');
paymentForm.addEventListener("submit", payWithPaystack, false);

// PAYMENT FUNCTION
function payWithPaystack(e) {
	e.preventDefault();
	let handler = PaystackPop.setup({
		key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
		email: document.getElementById("email-address").value,
		amount: document.getElementById("amount").value * 100,
		currency:'GHS',
		onClose: function(){
		alert('Window closed.');
		},
		callback: function(response){
			window.location = `../Action/process_payment.php?email=${document.getElementById("email-address").value}&amount=${document.getElementById("amount").value}&reference=${response.reference}`
		}
	});
	handler.openIframe();
}

</script>


  
         
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
