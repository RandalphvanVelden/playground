<?php


$naam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$adres = $_POST['adres'];
$postcode = $_POST['postcode'];
$plaats = $_POST['plaats'];
$wachtwoord = $_POST['wachtwoord'];
$wachtwoord2 = $_POST['wachtwoord2'];
$rechten = 'customer';


if ($wachtwoord == $wachtwoord2){

    try{ $conn = new PDO("mysql:host=127.0.0.1;dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO users(voornaam, achternaam, email, adres, postcode, plaats, wachtwoord, rechten) VALUES(:fvoornaam, :fachternaam, :femail, :fadres, :fpostcode, :fplaats, :fwachtwoord, :frechten)");

    $stmt -> execute([
        'fvoornaam' => $naam,
        'fachternaam' => $achternaam,
        'femail' => $email, 
        'fadres' => $adres, 
        'fpostcode' => $postcode, 
        'fplaats' => $plaats, 
        'fwachtwoord' => $wachtwoord, 
        'frechten' => $rechten  
    ]);
    }
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
header('Location: userindex.php');    
}
else { 
    header('Location: userform.php');
    echo "wachtwoord verkeerd" ;
}
$conn = NULL;



?>