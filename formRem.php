<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$id=$_POST['id'];

try{
    $conn = new PDO("mysql:host=127.0.0.1;dbname=testserver", "root", "");

    $statement = $conn -> prepare( "DELETE FROM deelnemers WHERE id = :fid");
        
$statement -> execute([
    'fid' => $id
            ]);  
    }
    catch(PDOException $e){
        echo $sql."<br>".$e -> getMessage();
    }
    $conn = null;
}

try{
$conn = new PDO("mysql:host=127.0.0.1;dbname=testserver", "root", "");


$stmt = $conn->query("SELECT * FROM deelnemers");

while ($row = $stmt->fetch()){

echo "<li>".$row["id"]." ".$row["naam"]." ".$row["woonplaats"]." ".$row["aantalkopjes"];
}
}
catch(PDOException $e){
    echo $sql."<br>".$e -> getMessage();
}

$conn = NULL;



include ("formRem.html");








?>