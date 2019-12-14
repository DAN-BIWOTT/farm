<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
  <title>Farmers and Chef</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon" type="image/ico" href="c.png" />
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    	<link rel="stylesheet" type="text/css" href="addproduce.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <?php  

     include 'init/config.php';
    $current_user = $_SESSION['SBUser'];
    $result = $db->query("SELECT * FROM users WHERE id = '$current_user'");
    $user = mysqli_fetch_assoc($result);

     $u_produce = $db->query("SELECT * FROM products WHERE user_id = '$current_user'");

     ?>


</head>
<body>

	<!-- Pop up add produc-->
	<?php include 'profilenav.php'; ?>

	   <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9   text-center">
            <h1 class="mb-0 bread">Farmers Profile</h1>
          </div>
        </div>
      </div>
    </div>

    <?php include 'addproduce.php'; ?>
    <center>
    <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary py-3 px-5" style=" margin-top: 2%; ">Add produce</button>
</center>

    <!-- my pics -->
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center  ">
            <h2 class="mb-4" style="margin-top: -5%;"><?= $user['names']; ?></h2>
            <h1 class="mb-4"  style="margin-top: -2%; font-size: 20px;" ><?= $user['location']; ?></h1>
            <p>Your recents uploads.</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">

           <?php  while ($rows = mysqli_fetch_assoc($u_produce)): ?>
    			<div class="col-md-6 col-lg-4  ">
    				<div class="product" style="width: 100%">
    					<a href="product-single.php?info=<?= $rows['id']; ?>" class="img-prod"><img class="img-fluid" src="<?= $rows['img_dir']; ?>" alt="Colorlib Template">
    						<span class="status"><?= $rows['sold_available']; ?></span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?= $rows['title']; ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
                  <p class="price"><span class="price-sale" style="color: black;">quantity : <?= $rows['quantity']; ?></span></p>
		    						<p class="price"><span class="price-sale">Ksh <?= $rows['amount']; ?></span></p>


		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
                    
	    					<a href="available.php?info=<?= $rows['id']; ?>" class="heart d-flex justify-content-center align-items-center ">
                      <span>A</span>
                    </a>

                    <a href="soldout.php?info=<?= $rows['id']; ?>" class="heart d-flex justify-content-center align-items-center ">
                      <span>S</span>
                    </a>

	    							<a href="profilefunc.php?info=<?= $rows['id']; ?>" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-trash"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>

           <?php endwhile; ?>
    		
   			
    			
    		</div>
    	</div>
    </section>









     <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>