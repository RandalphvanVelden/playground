<?php
include ("navbar.php");

$productNaam = $_POST['productnaam'];
$productPrijs = $_POST['productprijs'];



try{ $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("INSERT INTO producten(naam,prijs) VALUES(:fnaam, :fprijs)");

$stmt -> execute([
    'fnaam' => $productNaam,
    'fprijs' => $productPrijs,
    
]);
 
}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = NULL;

header("Location: index.php");

?>