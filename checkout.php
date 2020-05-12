<!doctype html>
<html lang="zxx">
<?php include('header.php');?>

  <!--================Checkout Area =================-->
  <section class="checkout_area section_padding">
    <div class="container">
      <div class="returning_customer">
        <div class="check_title">
          <h2>
            Payment Method
          </h2>
        </div>
        <p>
          Please choose one of the payment method and pay using it
        </p>
          <div class="col-md-12 form-group">
            <a href="#" class="card-button block">go-pay</a>
              <img src="assets/img/payment/gopay.jpg" class="payment-qrcode">
            <a href="#" class="card-button block">ovo</a>
              <img src="assets/img/payment/ovo.jpg" class="payment-qrcode">
          </div>
        </form>
      </div>
    </div>
  </section>

    <!--================Checkout Area =================-->
    <section class="checkout_area section_padding">
    <div class="container">
      <div class="returning_customer">
        <div class="check_title">
          <h2>
            Upload Payment Proof
          </h2>
        </div>
        <p>
          Please upload your payment proof. Our team will be with you shortly.
        </p>
          <div class="col-md-12 form-group">
          <input type="file" id="myFile" name="filename" class="button">
          <input type="submit" class="button">
          </div>
        </form>
      </div>
    </div>
  </section>
      
<?php include('footer.php');?>

</html>