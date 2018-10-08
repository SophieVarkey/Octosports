<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <!-- Title  -->
      <title>Octosports - Catalog - Sophie Varkey</title>
      <!-- Favicon  -->
      <link rel="icon" href="img/core-img/favicon.ico">
      <!-- Core Style CSS -->
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/core-style.css">
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
                                 <li><a href="shop.php">Baseball</a></li>
                                 <li><a href="shop.php">Basketball</a></li>
                                 <li><a href="shop.php">Soccer</a></li>
                                 <li><a href="shop.php">Football</a></li>
                                 <li><a href="shop.php">Golf</a></li>
                                 <li><a href="shop.php">Hockey</a></li>
                                 <li><a href="shop.php">Fishing</a></li>
                                 <li class="active"><a href="shop.php">Wellness</a></li>
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
      <!-- ##### Breadcumb Area Start ##### -->
      <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
         <div class="container h-100">
            <div class="row h-100 align-items-center">
               <div class="col-12">
                  <div class="page-title text-center">
                     <h2>Wellness Products</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ##### Breadcumb Area End ##### -->
      <!-- pull products from database --> 
      <!-- ##### Shop Grid Area Start ##### -->
      <section class="shop_grid_area section-padding-80">
         <div class="container">
         <div class="row">
         <div class="col-12 col-md-4 col-lg-3">
            <div class="shop_sidebar_area">
               <!-- ##### Single Widget ##### -->
               <div class="widget catagory mb-50">
                  <!-- Widget Title -->
                  <h6 class="widget-title mb-30">Catagories</h6>
                  <!--  Catagories  -->
                  <div class="catagories-menu">
                     <ul id="menu-content2" class="menu-content collapse show">
                        <!-- Single Item -->
                        <li data-toggle="collapse" data-target="#clothing">
                           <a href="#">Team Sports</a>
                           <ul class="sub-menu collapse show" id="clothing">
                              <li><a href="#">All</a></li>
                              <li><a href="#">Baseball</a></li>
                              <li><a href="#">Basketball</a></li>
                              <li><a href="#">Football</a></li>
                              <li><a href="#">Hockey</a></li>
                              <li><a href="#">Golf</a></li>
                              <li><a href="#">Fishing</a></li>
                              <li><a href="#">Soccer</a></li>
                              <li><a href="#">Wellness</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-8 col-lg-9">
            <div class="shop_grid_product_area">
               <div class="row">
                  <div class="col-12">
                     <div class="product-topbar d-flex align-items-center justify-content-between">
                        <!-- Total Products -->
                        <div class="total-products">
                           <p><span>10</span> products found</p>
                        </div>
                        <!-- Sorting -->
                        <div class="product-sorting d-flex">
                           <p>Sort by:</p>
                           <form action="#" method="get">
                              <select name="select" id="sortByselect">
                                 <option value="value">Highest Rated</option>
                                 <option value="value">Newest</option>
                                 <option value="value">Price: $$ - $</option>
                                 <option value="value">Price: $ - $$</option>
                              </select>
                              <input type="submit" class="d-none" value="">
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Single Product -->
               <div class="row">
                  <!-- end test -->
                  <div class="col-12 col-md-8 col-lg-9">
                     <div class="shop_grid_product_area">
                        <div class="row">
                           <div class="col-12">
                              <div class="product-topbar d-flex align-items-center justify-content-between">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                     include("connect.php");
                     
                       function fill_products($connection)
                         {
                           $output = ' ';
                           $count=1;
                           $sql = "SELECT * FROM products";
                           $result = mysqli_query($connection, $sql);
                     
                           while($row = mysqli_fetch_array($result))
                             {
                               if($count==1){
                               $output .= '<div class="row cleartop row-products">';}
                               $output .= '<div class="col s12 m6 l3 valign">';
                               $output .= '<div class="card-panel featured valign center-align hover-card" style="background-image: url(img/'.$row['productImage'].');"></div>';
                               $output .= '<div class="valign center-align">';
                               $output .= '<hr class="style1">';
                               $output .= '<p class="product-name">'.$row["productName"].'</p>';
                            $output .='    
                                           
                     <div class="rating">
                       <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                       <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                       <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                       <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                       <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                       <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                       <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                       <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                       <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                       <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                     </fieldset>                    </div>';
                               $output .= '<p class="price">$'.$row["price"].'</p>';
                               $output .= '</span>';
                               $output .= '<br>';
                               $output .= '<a href="products.php""><span class="view_btn">Add to Cart</span></a>';
                     
                               $output .= '</div>';
                               $output .= '</div>';
                               if($count==4){
                               $output .=     '</div>';
                               $count=1;
                               }
                               else{
                                   $count++;
                               }
                             }
                           return $output;
                         }?>
                  <div class="row">
                     <div class="container">
                        <h1 class="products">Product Catalog</h1>
                        <div class="input-field col s3">
                           <div id="fill_inventory">
                              <?php echo fill_products($connection); ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Pagination -->
         <nav aria-label="navigation">
            <ul class="pagination mt-50 mb-70">
               <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
               <li class="page-item"><a class="page-link" href="#">1</a></li>
               <li class="page-item"><a class="page-link" href="#">2</a></li>
               <li class="page-item"><a class="page-link" href="#">3</a></li>
               <li class="page-item"><a class="page-link" href="#">...</a></li>
               <li class="page-item"><a class="page-link" href="#">21</a></li>
               <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
         </nav>
      </section>
      <!-- ##### Shop Grid Area End ##### -->
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