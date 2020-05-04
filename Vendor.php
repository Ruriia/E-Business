<!doctype html><!--ISINYA LIST LIST VENDOR -->
<html class="no-js" lang="zxx">

<?php 
    include('header.php'); 
    require 'CONFIG.php';

    $key = getConnection();
?>

    <!-- slider Area Start-->
    <!-- <div class="slider-area "> -->
        <!-- Mobile Menu -->
        <!-- <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/banner-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Future filter and sort area!!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- slider Area End -->

    <div class="wrapper-list row"> 
        <?php
            $sql = "SELECT * FROM tabel_user where user_type = 2";
            $result = $key->prepare($sql);
            $result->execute();
            $i = 1;
            while($fetchdata = $result->fetch()):

                $reviewsql = "SELECT SUM(rating) as rating, COUNT(rating) as total FROM review_vendor WHERE vendor_id = ?";
                $reviewresult = $key->prepare($reviewsql);
                $reviewresult->execute([$fetchdata['user_id']]);
                $reviewfetch = $reviewresult->fetch();
                $rating = 0;
                if($reviewfetch['total'] != 0){
                    $rating = $reviewfetch['rating'] / $reviewfetch['total'];
                }
                


                if($i > 3){
                    echo "<br>";
                    $i = 1;
                }
        ?> 
        <div class="col col-4"> 
            <!-- Card for vendor Start -->
            <!-- Container Start -->
            <div class="container-card">
                <!-- Card Start -->
                <div class="card"> 
                    <!-- Card : Head Start -->
                    <div class="card-head">
                        <img src="<?= $fetchdata['user_img']?>" class="card-picture">
                    </div>
                    <!-- Card : Head End -->

                    <!-- Card : Body Start -->
                    <div class="card-body">
                        <!-- Product Desc Start -->
                        <div class="product-desc">
                            <!-- Nama Vendor -->
                            <span class="product-title">
                                <?= $fetchdata['name'] ?>
                            </span>

                            <!-- Jenis Vendor -->
                            <span class="product-caption">
                                <?= $fetchdata['vendor_type'] ?>
                            </span>

                            <!-- Lokasi Vendor -->
                            <span class="product-caption">
                                <?= $fetchdata['region'] ?>
                            </span>

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
                            <span class="badge">
                                <?= $rating?> / 5
                            </span>
                            <!-- Review yang sudah diterima si Vendor -->
                            <span class="badge">
                                <?= $reviewfetch['total']?> Review
                            </span>

                            <!-- Tombol untuk akses info vendor -->
                            <div class="card-button block">
                                <a href="Vendor_detail.php?product=<?= $fetchdata['user_id']; ?>"> View Pricelist</a>
                            </div>

                        
                        </div> <!-- Product Desc End -->
                    </div> <!-- Card : Body End -->
                    <a href="vendor_detail.php" class="card-button block"> View Pricelist</a>
                </div> <!-- Container End -->
            </div> <!-- Card for vendor End -->
        </div>
        <?php
            $i = $i + 1;
        endwhile;
        ?>
    </div>


    <?php include('footer.php'); ?>
</html>