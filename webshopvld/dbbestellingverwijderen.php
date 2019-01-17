<?php

$bestellingid=$_GET["bestellingenid"];

try{
    $conn = new PDO("mysql:host=127.0.0.1; dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("DELETE FROM bestellingen WHERE id=:fid");

$stmt->execute([
    'fid' => $bestellingid
]);

}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = NULL;

header("Location: bestellingindex.php");

?>