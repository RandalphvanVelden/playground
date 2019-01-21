<?php
session_start();
$productId=$_GET["productid"];
$userid= $_SESSION['id'];
$teBetalen = 0;

try{$conn = new PDO("mysql:host=127.0.0.1; dbname=webshopdb","root","" );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $conn->prepare("SELECT * FROM producten WHERE id =:fid");
$sql ->execute([
'fid' => $productId
]);

    While($row=$sql->fetch()){
        $teBetalen=$teBetalen + $row['prijs'];   
    }

$stmt= $conn->prepare("INSERT INTO bestellingen(productid, userid, tebetalen) VALUES (:fid, :fuserid, :fprijs)");

$stmt -> execute([
'fid'=>$productId,
'fprijs'=>$teBetalen,
'fuserid'=>$userid
]);
}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

header("Location: bestellingindex.php");


?>