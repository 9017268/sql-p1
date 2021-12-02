<?php

try{
$db = new PDO("mysql:host=localhost;dbname=3dplus""root","root");
}
catch(PDOexception $e){
    die("Error!!!! : " . $e-> getMessage());
}


?>
