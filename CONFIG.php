<?php

  function getConnection(){
        try{
            $a = "mysql:host=localhost; dbname=soventsc_database";
            $key = new PDO($a,"root","");
            return $key;
        }catch(PDOExcption $e){

        }
    }

?>