<?php

	session_start();
	require "CONFIG.php";

	$key = getConnection();

	$sql = "SELECT * FROM tabel_user WHERE user_username=? or email=?";
	$result = $key->prepare($sql);
	$username = $_POST['name'];
	$result->execute([$username, $username]);
	$upassword = $_POST['password'];


	if($fetchdata = $result->fetch()){
		if(password_verify($upassword, $fetchdata['user_password'])){
			$_SESSION['islogin'] = 1;
			$_SESSION['id'] = $fetchdata['user_id'];
			$_SESSION['name'] = $fetchdata['name'];
			$_SESSION['region'] = $fetchdata['region'];
			$_SESSION['email'] = $fetchdata['email'];
			$_SESSION['wa'] = $fetchdata['contact_wa'];
			$_SESSION['ig'] = $fetchdata['contact_ig'];
			$_SESSION['web'] = $fetchdata['contact_web'];
			header("location:index.php"); 
		}else{
			header("location:login.php");
		}

		 

	} else {
		header("location:login.php"); 
	}
?>