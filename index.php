<?php
#call config.php to establish connection with localhost
require 'CONFIG.php';

?>

<!doctype html>
<html class="no-js" lang="zxx">
    

   <?php include('header.php'); ?>
    <main>

        <!-- slider Area Start -->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height" data-background="assets/img/hero/bannerhome2.jpg">
                    <div class="container">
                        <div class="row d-flex align-items-flex-end justify-content-start">
                            <div class="col-xl-5 col-lg-8 col-md-5">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInRight" data-delay=".6s">Welcome to SOVENTS</h1>
                                    <p data-animation="fadeInRight" data-delay=".8s">Best Choice for you to make your own event !</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="assets/img/hero/hero_man.png" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInRight" data-delay=".4s">60% Discount</span>
                                    <h1 data-animation="fadeInRight" data-delay=".6s">Winter <br> Collection</h1>
                                    <p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2020!</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                        <a href="industries.php" class="btn hero-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
       <!-- client review part here -->
                <div class="section-tittle text-center mb-85">
                            <h2>Event Review</h2>
                </div>
    <section class="client_review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="client_review_slider owl-carousel">
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="assets/img/user_profile/jessica.png" alt="#">
                            </div>
                            <p>"Saya sangat senang dengan adanya sovent, karena saya malas dan bingung mencari vendor” cake dan table decor di social media atau internet secara satu”. 
                            Dengan adanya sovent, saya dapat menemukan vendor dengan cepat dan sesuai budget, sangat recommended!!"</p>
                            <h4>- Jesica Caroline-</h4>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="assets/img/user_profile/bianca.png" alt="#">
                            </div>
                            <p>"Melaui Sovent, saya dapat dengan mudah menemukan dan terhubung dengan vendor
                             yang tepat untuk membantu proyek event sekolah berdasarkan budget saya. 
                            Sekarang, beban kerja saya jauh menurun semuanya lebih mudah dikelola."</p>
                            <h4>- Bianca Yoana -</h4>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="assets/img/user_profile/brenda.png" alt="#">
                            </div>
                            <p>"Sovent sangat membantu saya dalam menemukan
                            vendor- vendor berkualitas untuk acara ulang tahun saya,
                             tentunya dengan harga yang terjangkau."</p>
                            <h4>- Brenda Paramitha -</h4>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="assets/img/user_profile/kresta.png" alt="#">
                            </div>
                            <p>"Sovent bener2 bantu aku banget buat cari-cari vendor buat acara ulang tahunku! 
                            Disini aku punya banyak banget pilihan vendor dan yang pasti vendor2nya bukan vendor abal-abal. 
                            Tinggal sesuain deh sama budget aku. Thank you Sovent!!"</p>
                            <h4>- Christina Krestanti-</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client review part end -->
        <!-- Shop Method Start-->
        <div class="shop-method-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-package"></i>
                            <h6>Free Shipping Method</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
    </main>
    <?php include('footer.php'); ?>
</html>