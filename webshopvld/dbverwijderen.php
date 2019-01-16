<?php

$productid=$_GET["productid"];

try{
    $conn = new PDO("mysql:host=127.0.0.1; dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("DELETE FROM producten WHERE id=:fid");

$stmt->execute([
    'fid' => $productid
]);
}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = NULL;

header("Location: index.php");

?>