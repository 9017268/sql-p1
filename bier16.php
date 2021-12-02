<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// leg de verbinding met de database

require_once("dbconnbieren.php");

$query = $db-> prepare("SELECT naam, biercode, brouwcode FROM `bier` WHERE brouwcode > 1200");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);
foreach ($resultq as $data){
    echo "code brouwer : " . $data["brouwcode"];
    echo "Naam : " . $data["naam"];
    echo "Brouwcode : " . $data["brouwcode"];
    echo "Biercode : " . $data["biercode"];
    echo"<br>";

}

    ?>
</body>
</html>