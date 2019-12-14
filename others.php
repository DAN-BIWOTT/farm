<!DOCTYPE html>
<html lang="en">
  <head>
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

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <?php

  include 'init/config.php';


    $all = $db->query("SELECT * FROM products WHERE category = 'others'");

$count = $db->query("SELECT category FROM products WHERE category = 'vegetables' ");
$rowcount=mysqli_num_rows($count);

$count1 = $db->query("SELECT category FROM products WHERE category = 'fruits' ");
$rowcount1=mysqli_num_rows($count1);

$count2 = $db->query("SELECT category FROM products WHERE category = 'dried' ");
$rowcount2 = mysqli_num_rows($count2);

$count3 = $db->query("SELECT category FROM products WHERE category = 'others' ");
$rowcount3 = mysqli_num_rows($count3);


  ?>



  <body class="goto-here">
		

    
    <?php  include'navbar.php'; ?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9   text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
             <h4 style=" margin-top: -6%; margin-bottom: 2%;">Categories</h4>
    				<ul class="product-category">
    					<li><a href="shop.php">All</a></li>
    					<li><a href="vegetables.php">Vegetables</a></li>
    					<li><a href="fruits.php">Fruits</a></li>
    					<li><a href="dried.php">Dried</a></li>
    					<li><a href="others.php" class="active" >Others</a></li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">

          <?php  while ($type = mysqli_fetch_assoc($all)): ?>      
          <?php
          $id = $type['id'];
      $farmer = $db->query("SELECT * FROM products INNER JOIN users on products.user_id = users.id WHERE products.id = $id ");
          $farmer_info = mysqli_fetch_assoc($farmer);
          ?>   
          <div class="col-md-6 col-lg-3  ">
            <div class="product">
              <a href="product-single.php?info=<?= $type['id']; ?>"" class="img-prod"><img class="img-fluid" src="<?= $type['img_dir']; ?>" alt="Colorlib Template">
               <span class="status"><?= $type['sold_available']; ?></span>
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#"><?= $type['title']; ?></a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span class="price-sale" style="color: black;">Quantity : <?= $type['quantity']; ?></span></p>
                    <p class="price"><span class="price-sale" style="color: black;">Ksh <?= $type['amount']; ?></span></p>
                    <p class="price"><span class="price-sale"><?= $farmer_info['names'] ?></span></p>
                    <p class="price"><span class="price-sale"><?= $farmer_info['location'] ?></span></p>
                  </div>
                </div>
        <div class="bottom-area d-flex px-3">
        <div class="m-auto d-flex">       
         <a href="product-single.php?info=<?= $type['id']; ?>" class="heart d-flex justify-content-center align-items-center ">
                      <span><i class="ion-ios-eye"></i></span>
                    </a>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
           

           <?php endwhile; ?>

    		</div>

        <!-- .col-md-8 --><center>
          <div class="col-lg-4 sidebar   ">
            <div class="sidebar-box  ">
              <h3 class="heading">Categories</h3>
             <ul class="categories">
                <li><a href="vegetables.php">Vegetables <span style="color: green;">(<?php echo "$rowcount" ; ?>)</span></a></li>
                <li><a href="fruits.php">Fruits <span  style="color: green;" >(<?php echo "$rowcount1" ; ?>)</span></a></li>
                <li><a href="dried.php">Dried <span style="color: green;" >(<?php echo "$rowcount2" ; ?>)</span></a></li>
                <li><a href="others.php">Others<span style="color: green;" >(<?php echo "$rowcount3" ; ?>)</span></a></li>
              </ul>
            </div>
          </div>

          
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

		  <?php include'bottomnav.php'; ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
    
  </body>
</html>