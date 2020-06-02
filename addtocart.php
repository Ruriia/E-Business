<?php
	session_start();
    require 'CONFIG.php';
    $key = getConnection();

    $sql = "INSERT INTO cart VALUES (?,?)";
    $result = $key->prepare($sql);
    if(isset($_SESSION['id'])){
    	$result->execute([$_GET['prodid'], $_SESSION['id']]);
    	#echo ("Product has been added to cart");
    	$query = $_GET['vendor'];
    	header("refresh:2;Vendor_detail.php?product=".$query);
    }else{
    	header("location:login.php");
    }
    

?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
  function sweetclick(){
    Swal.fire({
      icon: 'success',
      title: 'Berhasil menambahkan kedalam cart!',
      showConfirmButton: false,
      timer: 3000,
  })
  }
  window.onload = sweetclick;
</script>