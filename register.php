<?php
	require 'CONFIG.php';

	$key = getConnection();

	$checkuser = "SELECT * FROM tabel_user WHERE email = ? or username = ?";
	$runcheck = $key->prepare($checkuser);
	$runcheck->execute([$_POST['email'], $_POST['username']]);

	if($fetchdata = $runcheck->fetch()){
		header("location:create_account.php");

	} 
	else{
		$sql = "INSERT INTO tabel_user(email, name, user_username, user_password, user_type) values (?,?,?,?,?)";
		$insertuser = $key->prepare($sql);

		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

		$insertuser->execute([$_POST['email'], $_POST['name'], $_POST['username'], $password, $_POST['utype']]);

		header("location:login.php");
	}


	

	
?>