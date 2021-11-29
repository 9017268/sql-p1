<?php

try{
$db = new PDO("mysql:host=localhost;dbname=3dplus""root","");
}
catch(PDOexception $e){
    die("Error!!!! : " . $e-> getMessage());
}


?>
