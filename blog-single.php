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
$blog_id = $_GET['info'];

$product_info = $db->query("SELECT * FROM blogs WHERE id = $blog_id");
$details = mysqli_fetch_assoc($product_info);

$chef = $db->query("SELECT * FROM blogs INNER JOIN users ON blogs.user_id = users.id 
                         WHERE blogs.id = $blog_id");
$chef_info = mysqli_fetch_assoc($chef);


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

    <div class="hero-wrap hero-bread" style="background-image: url('images/image_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9   text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg" style="margin-top: -3%;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8  ">
						<h2 class="mb-3"><?= $details['Topic']; ?></h2>
            <p style="font-size: 17px;"><font style="color: black;">Chef : </font> <?= $chef_info['names']; ?></p>
            <p>
              <img src="<?= $details['img_dir']; ?>" alt="" class="img-fluid">
            </p>
            <p style="color: black; font-size: 17px;"><?= $details['brief_summary']; ?></p>
            <p style="color: #5F5F5F;"><?= $details['blog']; ?></p>
           
          </div> <!-- .col-md-8 -->


          <div class="col-lg-4 sidebar  ">
           
            <div class="sidebar-box  ">
            	<h3 class="heading">Categories</h3>
             <ul class="categories">
                <li><a href="vegetables.php">Vegetables <span>(<?php echo "$rowcount" ; ?>)</span></a></li>
                <li><a href="fruits.php">Fruits <span>(<?php echo "$rowcount1" ; ?>)</span></a></li>
                <li><a href="dried.php">Dried <span>(<?php echo "$rowcount2" ; ?>)</span></a></li>
                <li><a href="others.php">Others<span>(<?php echo "$rowcount3" ; ?>)</span></a></li>
              </ul>
            </div>

            

          

          </div>

        </div>
      </div>
    </section> <!-- .section -->

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