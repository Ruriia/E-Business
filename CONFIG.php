<?php

  function getConnection(){
        try{
            $a = "mysql:host=localhost; dbname=sovents";
            $key = new PDO($a,"root","");
            return $key;
        }catch(PDOExcption $e){

        }
    }

?>