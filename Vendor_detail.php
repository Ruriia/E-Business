<!doctype html><!--ISINYA LIST LIST VENDOR -->
<?php

    session_start();
    require 'CONFIG.php';
    $key = getConnection();

    $sql = "SELECT * FROM tabel_user WHERE user_id = ?";
    $result = $key->prepare($sql);
    $result->execute([$_GET['product']]);
    $fetchdata = $result->fetch();

    $reviewsql = "SELECT SUM(rating) as rating, COUNT(rating) as total FROM review_vendor WHERE vendor_id = ?";
    $reviewresult = $key->prepare($reviewsql);
    $reviewresult->execute([$fetchdata['user_id']]);
    $reviewfetch = $reviewresult->fetch();
    $rating = 0;
    if($reviewfetch['total'] != 0){
        $rating = $reviewfetch['rating'] / $reviewfetch['total'];
    }
?>

<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eCommerce HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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
        <link rel="stylesheet" href="assets/css/card.css">
        <link rel="stylesheet" href="assets/css/vendor_detail.css">
</head>

<body>
    
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg-white d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-end "> 
                                <div class="header-info-right">
                                   <ul>                                          
                                       <li><a href="jadivendor.php">Become A Vendor </a></li><!--belum dibuat html nya-->
                                       <li><a href="product_list.php">My Account  </a></li>
                                   </ul>
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
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                     </li>
                                    <li class=" d-none d-xl-block">
                                        <div class="favorit-items">
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-card">
                                            <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>
                                   <li class="d-none d-lg-block"> <a href="login.php" class="btn header-btn">Sign in</a></li>
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

    <!-- MAIN CONTENT -->
        <div class="wrapper row">
            <div class="col col-4">
                <div class="card-border">
                    <img src="<?= $fetchdata['user_img']?>" class="info-picture">
                    <div class="product-title"><?= $fetchdata['name']?> </div>
                    <div class="product-caption"><?= $fetchdata['vendor_type']?></div>
                    <div class="product-caption"><?= $fetchdata['region']?></div>

                    <div class="subinfo-border"> 
                        <!-- Rating Bintang Vendor -->
                        <span class="product-rating">
                            <?php 
                                    if($rating < 1):
                                ?>
                                <i class="fa fa-star grey"></i>
                                <i class="fa fa-star grey"></i>
                                <i class="fa fa-star grey"></i>
                                <i class="fa fa-star grey"></i>
                                <i class="fa fa-star grey"></i>

                                <?php
                                    elseif($rating >= 1 && $rating < 2):
                                ?>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star grey"></i>
                                <i class="fa fa-star grey"></i>
                                <i class="fa fa-star grey"></i>
                                <i class="fa fa-star grey"></i>

                                <?php
                                    elseif($rating >= 2 && $rating < 3):
                                ?>

                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star grey"></i>
                                <i class="fa fa-star grey"></i>
                                <i class="fa fa-star grey"></i>

                                <?php 
                                    elseif($rating >= 3 && $rating < 4):
                                ?>

                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star grey"></i>
                                <i class="fa fa-star grey"></i>

                                <?php
                                    elseif($rating >= 4 && $rating < 5):
                                ?>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star grey"></i>

                                <?php
                                    else:
                                ?>

                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>

                                <?php
                                    endif;
                                ?>
                        <!-- Rating Angka Vendor -->
                        <span class="badge-new">
                            <?= $rating?> / 5
                        </span>
                        <!-- Review yang sudah diterima si Vendor -->
                        <span class="badge-new">
                            <?= $reviewfetch['total']?> Review
                        </span>
                    </div>

                    <div class="subinfo-border"> 
                        <div class="social-info"> 
                            <img src="assets/img/icon/email.svg" class="icon-size">
                            <span class="sosial-content"> 
                                <?php
                                    if(is_null($fetchdata['email'])):
                                ?>
                                -
                                <?php 
                                    else:
                                ?>
                                <?= $fetchdata['email']?>
                                <?php
                                    endif;
                                ?>
                            </span>
                        </div>
                        <div class="social-info"> 
                            <img src="assets/img/icon/whatsapp.svg" class="icon-size">
                            <span class="sosial-content"> 
                                <?php
                                    if(is_null($fetchdata['contact_wa'])):
                                ?>
                                -
                                <?php 
                                    else:
                                ?>
                                <?= $fetchdata['contact_wa']?>
                                <?php
                                    endif;
                                ?>
                            </span>
                        </div>
                        <div class="social-info"> 
                            <img src="assets/img/icon/instagram.svg" class="icon-size">
                            <span class="sosial-content"> 
                                <?php
                                    if(is_null($fetchdata['contact_ig'])):
                                ?>
                                -
                                <?php 
                                    else:
                                ?>
                                <?= $fetchdata['contact_ig']?>
                                <?php
                                    endif;
                                ?>
                            </span>
                        </div>
                        <div class="social-info"> 
                            <img src="assets/img/icon/web.svg" class="icon-size">
                            <span class="sosial-content"> 
                                <?php
                                    if(is_null($fetchdata['contact_web'])):
                                ?>
                                -
                                <?php 
                                    else:
                                ?>
                                <?= $fetchdata['contact_web']?>
                                <?php
                                    endif;
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-8">
                <div class="vendor-about">
                    <div class="description-title">About us</div>
                    <div class="desc-content">
                        <!-- 50 Words -->
                        <?php
                            if(is_null($fetchdata['vendor_detail'])):
                        ?>
                        -
                        <?php 
                            else:
                        ?>
                        <?= $fetchdata['vendor_detail']?>
                        <?php
                            endif;
                        ?>
                    </div>
                </div>

                <div class="vendor-info-tab"> 
                    <div class="tab-title">PRICE LIST</div>
                    
                    <div class="vendor-package">
                        <?php 
                            $productsql = "SELECT * FROM partner_product WHERE partner_id = ?";
                            $resultproduct = $key->prepare($productsql);
                            $resultproduct->execute([$_GET['product']]);
                            while($fetchproduct = $resultproduct->fetch()):

                        ?>
                        <div class="wrapper-package row"> 
                            
                            <div class="col col-3">
                                <div class="gallery-align">
                                    <img src="<?= $fetchproduct['image_path']?>" class="package-pic">
                                </div>
                            </div>
                            <div class="col col-6">
                                <div class="description-title"><?= $fetchproduct['product_title']?></div>
                                <div class="desc-content">
                                    <!-- 50 Words -->
                                    <?php
                                        if(is_null($fetchproduct['product_desc'])):
                                    ?>
                                    -
                                    <?php 
                                        else:
                                    ?>
                                    <?= $fetchproduct['product_desc']?>

                                    <?php
                                        endif;
                                    ?>
                                </div>
                            </div>
                            <div class="col col-3">
                                <div class="price">
                                    <div class="price-currency">Rp</div>
                                    <div class="price-title"><?= $fetchproduct['product_price']?></div>
                                    <div class="package-button">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <?php 
                            endwhile;
                        ?>
                    </div>
                    
                </div>

                <div class="vendor-info-tab"> 
                    <div class="tab-title">Review</div>
                    <?php
                        if($reviewfetch['total'] != 0):
                            $reviewquery = "SELECT * FROM review_vendor WHERE vendor_id = ?";
                            $reviewresult = $key->prepare($reviewquery);
                            $reviewresult = $key->execute([$_GET['product']]);
                            while($reviewvendor = $reviewresult->fetch()):
                                $detailreviewer = "SELECT * FROM tabel_user WHERE user_id = ?";
                                $resultdetail = $key->prepare($detailreviewer);
                                $resultdetail->execute([$reviewvendor['reviewer_id']]);
                                $reviewdetail = $resultdetail->fetch();

                    ?>
                    <div class="wrapper-package row">
                            
                            <div class="col col-3">
                                <div class="gallery-align">
                                    <img src="<?= $reviewdetail['user_img']?>" class="package-pic">
                                </div>
                            </div>
                            <div class="col col-6">
                                <div class="description-title"><?= $reviewdetail['name']?></div>
                                <div class="desc-content">
                                    <!-- 50 Words -->
                                    <?= $reviewvendor['review_desc']?>
                                </div>
                            </div>
                            <div class="col col-3">
                            <div class="price">
                                <div class="price-currency">Rp</div>
                                <div class="price-title"><?= $fetchproduct['product_price']?></div>
                                <div class="package-button">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                    <?php
                        echo "<br>";
                    endwhile;
                endif;
                    ?>
                </div>
            </div>
        </div>
    


    <footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="single-footer-caption mb-30">
                        <!-- logo -->
                        <div class="footer-logo">
                            <a href="index.php"><img src="assets/img/logo/logo-footer.png" alt=""></a>
                        </div>
                        <div class="footer-tittle">
                            <div class="footer-pera">
                                <p>Sovents build bla bla bla 
                                    lala lala saya ga tau mohon diisi
                                </p> <!---MOHON DIBENERIN INIH-->
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Offers & Discounts</a></li>
                                <li><a href="#"> Get Coupon</a></li>
                                <li><a href="#">  Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>New Products</h4>
                            <ul>
                                <li><a href="#">Woman Cloth</a></li>
                                <li><a href="#">Fashion Accessories</a></li>
                                <li><a href="#"> Man Accessories</a></li>
                                <li><a href="#"> Rubber made Toys</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Support</h4>
                            <ul>
                            <li><a href="#">Frequently Asked Questions</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Report a Payment Issue</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer bottom -->
            <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7">
                <div class="footer-copy-right">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                   </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5">
                <div class="footer-copy-right f-right">
                    <!-- social -->
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Footer End-->

    </footer>
    <!-- JS here -->
            <!-- All JS Custom Plugins Link Here here -->
            <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
            
            <!-- Jquery, Popper, Bootstrap -->
            <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
            <script src="./assets/js/popper.min.js"></script>
            <script src="./assets/js/bootstrap.min.js"></script>
            <!-- Jquery Mobile Menu -->
            <script src="./assets/js/jquery.slicknav.min.js"></script>

            <!-- Jquery Slick , Owl-Carousel Plugins -->
            <script src="./assets/js/owl.carousel.min.js"></script>
            <script src="./assets/js/slick.min.js"></script>

            <!-- One Page, Animated-HeadLin -->
            <script src="./assets/js/wow.min.js"></script>
            <script src="./assets/js/animated.headline.js"></script>
            
            <!-- Scrollup, nice-select, sticky -->
            <script src="./assets/js/jquery.scrollUp.min.js"></script>
            <script src="./assets/js/jquery.nice-select.min.js"></script>
            <script src="./assets/js/jquery.sticky.js"></script>
            <script src="./assets/js/jquery.magnific-popup.js"></script>

            <!-- contact js -->
            <script src="./assets/js/contact.js"></script>
            <script src="./assets/js/jquery.form.js"></script>
            <script src="./assets/js/jquery.validate.min.js"></script>
            <script src="./assets/js/mail-script.js"></script>
            <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
            
            <!-- Jquery Plugins, main Jquery -->	
            <script src="./assets/js/plugins.js"></script>
            <script src="./assets/js/main.js"></script>

</body>
</html>