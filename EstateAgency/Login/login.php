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
  <link rel="stylesheet" type="text/css" href="../css/style2.css">

  <!-- Script: jQuery && Parsley-->
        <script src="http://parsleyjs.org/dist/parsley.js"></script>

 
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
            <a class="nav-link" href="../view/property-grid.php">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../view/agents-grid.php">Agent</a>
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
            <h1 class="title-single">Sign in to make Payment to book your room</h1>
            <span class="color-text-a">Thank you for booking with us </span>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
    <div class="container mt-5 mb-5">
      <div class="d-flex justify-content-center row">
	  <div class="container">  
			<br />  
			<br />
		    <br />
   <div class="table-responsive">  
    <div class="box">
		<h4>SIGN IN</h4>
     <form action="../Action/loginprocess.php" id="validate_form" method="post">
		<div class="form-group" >
			<label for="email">Email</label>
			<input type="text" name="email" id="email" placeholder="Email" required data-parsley-type="email" data-parsley-pattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,10})+$/" data-parsley-trigger="keyup" class="form-control" />
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="Password" required data-parsley-length="[8, 16]" data-parsley-trigger="keyup" class="form-control" />
		</div>

		<div class="form-group">
		<input type="submit" id="login" name="login" value="Login" class="btn btn-success" />
		</div>
    
	
    	<div class="checkbox">
        <label><p>New here?<a style="color: #49c1a2" href="register.php">&nbspRegister Here</a></p></label>
    	</div>
    </form>
    </div>
   </div>
</div>
	



<!--Activating parsley js-->
<script>
$(document).ready(function(){
	$('#validate_form').parsley();
});  
</script>

    

  

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
