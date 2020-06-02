<!doctype html>
<html lang="zxx">
<?php 
  include ('header.php');
  require 'CONFIG.php';

  $key = getConnection();
  $query = "SELECT * FROM cart WHERE user_id = ?";
  $res = $key->prepare($query);
  if(isset($_SESSION['id'])) {
    $res->execute([$_SESSION['id']]);
  } else {
      //header("location:login.php");
  }
  
  $totalbiaya = 0;





?>

  <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            
            <!-- 4 Kolom di cart -->
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Subtotal</th>
              </tr>
            </thead>

            <!-- Barang-barang di cart -->
            <tbody>
              <?php 
                while($cartproduct = $res->fetch()): 
                  $curproduct = "SELECT * FROM partner_product WHERE product_id = ?";
                  $rescurproduct = $key->prepare($curproduct);
                  $rescurproduct->execute([$cartproduct['product_id']]);
                  $fetchcurproduct = $rescurproduct->fetch();
                  $totalbiaya = $totalbiaya + $fetchcurproduct['product_price'];
                ?>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <!-- GAMBAR PRODUK DISINI -->
                      <img src="<?=$fetchcurproduct['image_path'] ?>" alt="" />
                    </div>
                    <div class="media-body">
                      <!-- NAMA PRODUK DISINI -->
                      <p><?=$fetchcurproduct['product_title'];?></p> 
                    </div>
                  </div>
                </td>
                <td>
                  <!-- HARGA SATUAN BARANG DISINI -->
                  <h5>Rp. <?=$fetchcurproduct['product_price'] ?></h5>
                </td>
                <td>
                  <div class="product_count">
                    <!-- BUTTON TAMBAH DAN KURANGI QTY PRODUK -->
                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="1">
                    <div class="input-number-increment"> <i class="ti-plus"></i></div>
                  </div>
                </td>
                <td>
                  <!-- HARGA SATUAN * QTY PRODUK -->
                  <h5>Rp. <?=$fetchcurproduct['product_price'] ?></h5>
                </td>
              </tr>
            <?php endwhile; ?>
            <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Total</h5>
                </td>
                <td>
                  <h5>Rp. <?=$totalbiaya ?></h5>
                </td>
            </tr>
            

            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="Vendor.php">Continue Explore</a>
            <a class="btn_1 checkout_btn_1" href="checkout.php">Proceed to checkout</a>
          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->
  <?php include ('footer.php');?>

</html>