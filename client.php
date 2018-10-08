<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <!-- Title  -->
      <title>Octosports - Client - Sophie Varkey</title>
      <!-- Favicon  -->
      <link rel="icon" href="img/core-img/favicon.ico">
      <!-- CSS -->
      <link rel="stylesheet" href="css/core-style.css">
      <link rel="stylesheet" href="style.css">
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
                                 <li><a href="catalog.php">Baseball</a></li>
                                 <li><a href="catalog.php">Basketball</a></li>
                                 <li><a href="catalog.php">Soccer</a></li>
                                 <li><a href="catalog.php">Football</a></li>
                                 <li><a href="catalog.php">Golf</a></li>
                                 <li><a href="catalog.php">Hockey</a></li>
                                 <li><a href="catalog.php">Fishing</a></li>
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
      <br>
      <br>
      <div class="row align-left">
         <div class="col-md-3">
            <img src="img/imgs/octosports_logo.png" height="300" align="left">
         </div>
      </div>
      <div class="contact-area d-flex align-items-center">
         <div class="contact-info">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false">Orders</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
               </li>
            </ul>
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <!-- form -->
                  <form>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="inputEmail4">First Name</label>
                           <input type="email" class="form-control" id="inputEmail4" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                           <label for="inputPassword4">Last Name</label>
                           <input type="password" class="form-control" id="inputPassword4" placeholder="Last Name">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                     </div>
                     <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="inputCity">City</label>
                           <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                           <label for="inputState">State</label>
                           <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                           </select>
                        </div>
                        <div class="form-group col-md-2">
                           <label for="inputZip">Zip</label>
                           <input type="text" class="form-control" id="inputZip">
                        </div>
                     </div>
                  </form>
               </div>
               <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">No Recent Orders</div>
               <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                  <form class="needs-validation" novalidate>
                     <div class="form-row">
                        <div class="col-md-4 mb-3">
                           <label for="validationTooltip01">First name</label>
                           <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                           <div class="valid-tooltip">
                              Looks good!
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="validationTooltip02">Last name</label>
                           <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                           <div class="valid-tooltip">
                              Looks good!
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-md-6 mb-3">
                           <label for="validationTooltip03">City</label>
                           <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                           <div class="invalid-tooltip">
                              Please provide a valid city.
                           </div>
                        </div>
                        <div class="col-md-3 mb-3">
                           <label for="validationTooltip04">State</label>
                           <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                           <div class="invalid-tooltip">
                              Please provide a valid state.
                           </div>
                        </div>
                        <div class="col-md-3 mb-3">
                           <label for="validationTooltip05">Zip</label>
                           <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                           <div class="invalid-tooltip">
                              Please provide a valid zip.
                           </div>
                        </div>
                     </div>
                     <button class="btn btn-primary" type="submit">Save</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
   </body>
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