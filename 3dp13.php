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

require_once("dbconn3dp.php");

$query = $db-> prepare("SELECT voornaam, achternaam, gebdatum FROM `klant` WHERE gebdatum < '2000-01-01'");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);
foreach ($resultq as $data){
    echo "Voornaam: " . $data["voornaam"];
    echo "Achternaam : " . $data["achternaam"];
    echo "Gebdatum : " . $data["gebdatum"];
    echo"<br>";

}

    ?> 
</body>
</html>