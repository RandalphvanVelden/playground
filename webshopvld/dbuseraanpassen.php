<?php
$userid = $_POST['userid'];
$username = $_POST['username'];
$naam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$adres = $_POST['adres'];
$postcode = $_POST['postcode'];
$plaats = $_POST['plaats'];


try{ $conn = new PDO("mysql:host=127.0.0.1; dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare('UPDATE users SET username = :fusername, voornaam = :fvoornaam, achternaam = :fachternaam, email = :femail, adres = :fadres, postcode = :fpostcode, plaats = :fplaats WHERE id=:fid');

    $stmt -> execute([
        'fid' => $userid,
        'fusername' => $username,
        'fvoornaam' => $naam,
        'fachternaam' => $achternaam,
        'femail' => $email, 
        'fadres' => $adres, 
        'fpostcode' => $postcode, 
        'fplaats' => $plaats, 
        
         
    ]);
}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = NULL;

header("Location: userindex.php");



?>






