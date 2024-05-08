<?php
$servername = "localhost";
$username = "id20197455_alex";
$password = "QkR!2Lk.N!gQsuq";
$database = "id20197455_bdsite";

// Ouverture de la connexion avec la BD
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $bat="";
    $stmt = $conn->query('SELECT Nom_bat FROM Batiment ORDER BY Nom_bat ASC');
    foreach ($stmt as $row) {
        $bat .= $row['Nom_bat'].'|';
    }

    echo $bat;
    } catch(PDOException $e) {    
        echo "Connection failed: " . $e->getMessage();
}
catch(Exception $e) {    
    echo "Exception: " . $e->getMessage();
}