<?php

  function getConnection(){
        try{
            $a = "mysql:host=localhost; dbname=soventsc_database";
            $key = new PDO($a,"root","");
            return $key;
        }catch(PDOExcption $e){

        }
    }

    #connection


    $n=70; 
	function getName($n) { 
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
		$randomString = ''; 

		for ($i = 0; $i < $n; $i++) { 
			$index = rand(0, strlen($characters) - 1); 
			$randomString .= $characters[$index]; 
		} 

		return $randomString; 
	} 

?>