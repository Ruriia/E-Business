<?php
  $islogin = ($_SESSION['islogin'] == 1) ? 1 : 0 ;
?>

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sovents-Solo Event's</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/sovents-small.ico">

        <!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>
<body>
       
       <!-- Preloader Start -->
       <div id="preloader-active">
           <div class="preloader d-flex align-items-center justify-content-center">
               <div class="preloader-inner position-relative">
                   <div class="preloader-circle"></div>
                   <div class="preloader-img pere-text">
                       <img src="assets/img/logo/logo-sovents.png" alt="">
                   </div>
               </div>
           </div>
       </div>
       <!-- Preloader Start -->
   
       <header>
           <!-- Header Start -->
          <div class="header-area">
               <div class="main-header ">
                   <div class="header-top top-bg-white d-none d-lg-block">
                      <div class="container-fluid">
                          <div class="col-xl-12">
                               <div class="row d-flex justify-content-end "> 
                                   <div class="header-info-right">
                                    <?php
                                      if($islogin == 0):
                                    ?>

                                      <ul>                                          
                                          <li><a href="jadivendor.php">Become A Vendor </a></li><!--belum dibuat html nya-->
                                          <li><a href="product_list.php">My Account  </a></li>
                                      </ul>

                                      <?php
                                      else:
                                      ?>

                                      <ul>
                                        <li>Hi, <a href="profile.php"><?php echo $_SESSION['name']; ?></a>!</li>
                                      </ul>

                                      <?php
                                      endif;
                                      ?>
                                   </div>
                               </div>
                          </div>
                      </div>
                   </div>
                  <div class="header-bottom  header-sticky">
                       <div class="container-fluid">
                           <div class="row align-items-center">
                               <!-- Logo -->
                               <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                   <div class="logo">
                                     <a href="index.php"><img src="assets/img/logo/logo-header.png" alt=""></a>
                                   </div>
                               </div>
                               <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                   <!-- Main-menu -->
                                   <div class="main-menu f-right d-none d-lg-block">
                                       <nav>                                                
                                           <ul id="navigation">                                                                                                                                     
   
                                               <li><a href="index.php">Home</a></li>
                                               <li><a href="Event.php">Event</a></li>
                                               <li><a href="#">Vendor</a>
                                                   <ul class="submenu">
                                                       <li><a href="Vendor.php">Vendor List</a></li>
                                                       <li><a href="becomeVendor.php">Become a Vendor</a></li>
                                                   </ul>
                                               </li>   
                                               <li><a href="contact.php">Contact</a></li>
   
                                           </ul>
                                       </nav>
                                   </div>
                               </div> 
                               <div class="col-xl-5 col-lg-3 col-md-3 fix-card">
                                   <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                       <li class="d-none d-xl-block">
                                           <div class="form-box f-right ">
                                               <input type="text" name="Search" placeholder="Search products">
                                               <div class="search-icon">
                                                   <i class="fas fa-search special-tag"></i>
                                               </div>
                                           </div>
                                        </li>
                                       <li>
                                           <div class="shopping-card">
                                              <?php
                                                
                                              ?>
                                               <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                                           </div>
                                       </li>
                                       <?php
                                        if($islogin == 0):
                                       ?>
                                      <li class="d-none d-lg-block"> <a href="login.php" class="btn header-btn">Sign in</a></li>
                                      <?php
                                        endif;
                                      ?>
                                   </ul>
                               </div>
                               <!-- Mobile Menu -->
                               <div class="col-12">
                                   <div class="mobile_menu d-block d-lg-none"></div>
                               </div>
                           </div>
                       </div>
                  </div>
               </div>
          </div>
           <!-- Header End -->
       </header>