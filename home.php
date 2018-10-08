<!DOCTYPE html>
<!-- Sophie Varkey 
   DIG 4530 
   -->
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <!-- Title  -->
      <title>Octosports - Sophie Varkey </title>
      <!-- Favicon  -->
      <link rel="icon" href="img/core-img/favicon.ico">
      <!-- Core Style CSS -->
      <link rel="stylesheet" href="css/core-style.css">
      <link rel="stylesheet" href="css/style.css">
      <?php include 'connect.php';?>
   </head>
   <body>
      <!-- ##### Header Area Start ##### -->
      <header class="header_area">
         <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
               <!-- Logo -->
               <a class="nav-brand" href="home.php"><img src="img/core-img/OctosportsWM.png" alt=""></a>
               <!-- Navbar Toggler -->
               <div class="classy-navbar-toggler">
                  <span class="navbarToggler"><span></span><span></span><span></span></span>
               </div>
               <!-- Menu -->
               <div class="classy-menu">
                  <!-- close btn -->
                  <div class="classycloseIcon">
                     <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                  </div>
                  <!-- Nav Start -->
                  <div class="classynav">
                     <ul>
                        <li>
                           <a href="catalog.php">Shop</a>
                           <div class="megamenu">
                              <ul class="single-mega cn-col-3">
                                 <li class="title">Team Sports</li>
                                 <li><a href="home.php">Baseball</a></li>
                                 <li><a href="home.php">Basketball</a></li>
                                 <li><a href="home.php">Soccer</a></li>
                                 <li><a href="home.php">Football</a></li>
                                 <li><a href="home.php">Golf</a></li>
                                 <li><a href="home.php">Hockey</a></li>
                                 <li><a href="home.php">Fishing</a></li>
                                 <li><a href="catalog.php">Wellness</a></li>
                              </ul>
                           </div>
                        </li>
                        <li>
                           <a href="admin.php">Admin</a>
                           <ul class="dropdown">
                              <li><a href="home.php">Home</a></li>
                              <li><a href="catalog.php">Shop</a></li>
                              <li><a href="single-product-details.php">Featured Product</a></li>
                              <li><a href="cart.php">Checkout</a></li>
                              <li><a href="admin.php">Admin</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <!-- Nav End -->
               </div>
            </nav>
            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
               <!-- Search Area -->
               <div class="search-area">
                  <form action="#" method="post">
                     <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                     <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </form>
               </div>
               <!-- User Login Info -->
               <div class="user-login-info">
                  <a href="client.php"><img src="img/core-img/user.svg" alt=""></a>
               </div>
               <!-- Cart Area -->
               <div class="cart-area">
                  <a href="cart.php" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span></span></a>
               </div>
            </div>
         </div>
      </header>
      <!-- ##### Header Area End ##### -->
      <!-- ##### Right Side Cart Area ##### -->
      <div class="cart-bg-overlay"></div>
      <div class="right-side-cart-area">
         <!-- Cart Button -->
         <div class="cart-button">
            <a href="cart.php" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span></span></a>
         </div>
         <div class="cart-content d-flex">
            <!-- Cart List Area -->
            <div class="cart-list">
            </div>
            <!-- Cart Summary -->
            <div class="cart-amount-summary">
               <h2>Summary</h2>
               <div class="checkout-btn mt-100">
                  <a href="cart.php" class="btn essence-btn">check out</a>
               </div>
            </div>
         </div>
      </div>
      <!-- ##### Right Side Cart End ##### -->
      <!-- ##### Welcome Area Start ##### -->
      <section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/hero2.jpeg);">
         <?php
            ?>
         <div class="container h-100">
            <div class="row h-100 align-items-center">
               <div class="col-12">
                  <div class="hero-content">
                     <h2>Step up your game with Octosports</h2>
                     <a href="catalog.php" class="btn essence-btn">view collection</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ##### Welcome Area End ##### -->
      <!-- ##### Top Catagory Area Start ##### -->
      <div class="top_catagory_area section-padding-80 clearfix">
         <div class="container">
            <div class="row justify-content-center">
               <!-- Single Catagory -->
               <div class="col-12 col-sm-6 col-md-4">
                  <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" id="overlay "style="background-image: url(img/bg-img/teamsports.jpeg);">
                     <div class="catagory-content">
                        <a href="catalog.php">Team Sports</a>
                     </div>
                  </div>
               </div>
               <!-- Single Catagory -->
               <div class="col-12 col-sm-6 col-md-4">
                  <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/fitnessapparel.jpeg);">
                     <div class="catagory-content">
                        <a href="catalog.php">Fitness</a>
                     </div>
                  </div>
               </div>
               <!-- Single Catagory -->
               <div class="col-12 col-sm-6 col-md-4">
                  <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/accessories2.jpeg);">
                     <div class="catagory-content">
                        <a href="catalog.php">Accessories</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ##### Top Catagory Area End ##### -->
      <!-- Featured Product area -->
      <div class="cta-area">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="cta-content bg-img background-overlay" style="background-image: url(img/bg-img/featured.jpg);">
                     <div class="h-100 d-flex align-items-center justify-content-end">
                        <div class="cta--text">
                           <h6>Featured Product</h6>
                           <?php
                              $select = "SELECT * FROM `products`";
                              $select_result = $connection->query($select);
                              
                              
                              
                              
                              
                              ?>
                           <h2>Mango-Peach Pre Workout</h2>
                           <a href="single-product-details.php" class="btn essence-btn">Buy Now</a> <!-- Add link to featured product Pull through mySQL-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ##### CTA Area End ##### -->
      <!-- ##### New Arrivals Area Start ##### -->
      <section class="new_arrivals_area section-padding-80 clearfix">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="section-heading text-center">
                     <h2>Popular Products</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-12">
               </div>
            </div>
         </div>
      </section>
      <!-- Popular Brand Areas-->
      <div class="brands-area d-flex align-items-center justify-content-between">
         <!-- Brand Logo -->
         <div class="single-brands-logo">
            <img src="img/core-img/adidas.png" alt="">
         </div>
         <!-- Brand Logo -->
         <div class="single-brands-logo">
            <img src="img/core-img/nike.png" alt="">
         </div>
         <!-- Brand Logo -->
         <div class="single-brands-logo">
            <img src="img/core-img/underarmour.png" alt="">
         </div>
         <!-- Brand Logo -->
         <div class="single-brands-logo">
            <img src="img/core-img/puma.png" alt="">
         </div>
         <!-- Brand Logo -->
         <div class="single-brands-logo">
            <img src="img/core-img/reebok.png" alt="">
         </div>
         <!-- Brand Logo -->
         <div class="single-brands-logo">
            <img src="img/core-img/columbia.png" alt="">
         </div>
      </div>
      <!-- ##### Brands Area End ##### -->
      <!-- ##### Footer Area Start ##### -->
      <footer class="footer_area clearfix">
         <div class="container">
            <div class="row">
               <!-- Single Widget Area -->
               <div class="col-12 col-md-6">
                  <div class="single_widget_area d-flex mb-30">
                     <!-- Logo -->
                     <div class="footer-logo mr-50">
                        <a href="home.php"><img src="img/core-img/OctosportsWMwhite.png" alt=""></a>
                     </div>
                     <!-- Footer Menu -->
                     <div class="footer_menu">
                        <ul>
                           <li><a href="catalog.php">Shop</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- Single Widget Area -->
               <div class="col-12 col-md-3">
                  <div class="single_widget_area mb-30">
                     <ul class="footer_contact">
                        <li><a href="home.php">Octosports</a></li>
                        <li><a href="home.php">1100 Club Sylvan Way</a></li>
                        <li><a href="home.php">Seattle, WA 98101</a></li>
                        <li><a href="home.php">Phone Number : 1-800-984-4839</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row align-items-end">
               <!-- Single Widget Area -->
               <div class="col-12 col-md-6">
               </div>
               <!-- Single Widget Area -->
               <div class="col-12 col-md-6">
                  <div class="single_widget_area">
                     <div class="footer_social_area">
                        <a href="Facebook.com" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="Twitter.com" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-5">
               <div class="col-md-12 text-center">
                  <p>
                     Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is not official and is an assignment for a UCF Digital Media course, designed by Sophie Varkey
                  </p>
               </div>
            </div>
         </div>
      </footer>
      <!-- ##### Footer Area End ##### -->
      <!-- jQuery (Necessary for All JavaScript Plugins) -->
      <script src="js/jquery/jquery-2.2.4.min.js"></script>
      <!-- Popper js -->
      <script src="js/popper.min.js"></script>
      <!-- Bootstrap js -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Plugins js -->
      <script src="js/plugins.js"></script>
      <!-- Classy Nav js -->
      <script src="js/classy-nav.min.js"></script>
      <!-- Active js -->
      <script src="js/active.js"></script>
      <!-- Google Maps -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
      <script src="js/map-active.js"></script>
   </body>
</html>