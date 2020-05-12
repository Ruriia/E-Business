<!doctype html>
<html lang="zxx">
<?php include ('header.php');?>

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
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <!-- GAMBAR PRODUK DISINI -->
                      <img src="assets/img/logo/logo-sovents.png" alt="" />
                    </div>
                    <div class="media-body">
                      <!-- NAMA PRODUK DISINI -->
                      <p>NATURAL RED BIRTHDAY PACK</p> 
                    </div>
                  </div>
                </td>
                <td>
                  <!-- HARGA SATUAN BARANG DISINI -->
                  <h5>Rp.00.0</h5>
                </td>
                <td>
                  <div class="product_count">
                    <!-- BUTTON TAMBAH DAN KURANGI QTY PRODUK -->
                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="99">
                    <div class="input-number-increment"> <i class="ti-plus"></i></div>
                  </div>
                </td>
                <td>
                  <!-- HARGA SATUAN * QTY PRODUK -->
                  <h5>Rp.o.oo</h5>
                </td>
              </tr>
              
              <!-- Total semua biaya -->
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Total</h5>
                </td>
                <td>
                  <h5>Rp.o.oo</h5>
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