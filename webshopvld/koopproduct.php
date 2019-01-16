<?php
$productId=$_GET["productid"];
$email = "randalph@gmail.com";
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

$stmt= $conn->prepare("INSERT INTO bestellingen(productid,email, tebetalen) VALUES (:fid, :femail, :fprijs)");

$stmt -> execute([
'fid'=>$productId,
'femail'=>$email,
'fprijs'=>$teBetalen
]);
}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}




?>