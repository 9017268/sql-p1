<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bier 01 Query</title>
</head>
<body>
    <?php

// leg de verbinding met de database

require_once("dbconnbieren.php");

$query = $db-> prepare("SELECT * FROM kroeg");
$query->execute();
$resultq = $query->fetchALL(PDO::FETCH_ASSOC);
foreach ($resultq as $data){
    echo "code kroeg: " . $data["kroegcode"];
    echo "Naam : " . $data["naam"];
    echo "Adres : " . $data["adres"];
    echo "Plaats : " . $data["plaats"];
    echo"<br>";

}

    ?>
</body>
</html>