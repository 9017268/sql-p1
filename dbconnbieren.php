<?php

try{
$db = new PDO("mysql:host=localhost;dbname=bieren","root","");
} 
catch(PDOexception $e){
    die("Error!!!! : " . $e-> getMessage());
}

?>