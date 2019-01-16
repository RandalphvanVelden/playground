

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $naam= $_POST["naam"];
    $woonplaats=$_POST["woonplaats"];
    $kopjes=$_POST["aantalkopjes"];


try{
    $conn = new PDO("mysql:host=127.0.0.1;dbname=testserver", "root", "");

    $statement = $conn -> prepare( "INSERT INTO deelnemers (naam,woonplaats,aantalkopjes) 
    VALUES (:fnaam, :fwoonplaats, :fkopjes)");
    
    $statement -> execute([
        'fnaam' => $naam,
        'fwoonplaats' => $woonplaats, 
        'fkopjes' => $kopjes
        ]);
    echo $naam." and ".$woonplaats." and ".$kopjes." added to database";

    
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

echo "<li>".$row["naam"]." ".$row["woonplaats"]." ".$row["aantalkopjes"];
}
}
catch(PDOException $e){
    echo $sql."<br>".$e -> getMessage();
}

$conn = NULL;



include ("formadd.html");


?>

