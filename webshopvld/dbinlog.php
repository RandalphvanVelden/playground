<?php

$username = $_POST['username'];
$wachtwoord = $_POST['wachtwoord'];

try{ $conn = new PDO("mysql:host=127.0.0.1; dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT wachtwoord, id FROM users WHERE username=:fusername");

    $stmt->execute([
        'fusername' => $username
    ]);

    While($row=$stmt->fetch()){
        $dbwachtwoord = $row['wachtwoord'];
        $dbid = $row['id'];
     }
    
if ($wachtwoord== $dbwachtwoord){
    session_start();
    $_SESSION['id'] = $dbid;
    $_SESSION['name'] = $username;
}
else{
   echo "wachtwoord klopt niet met opgegeven gebruikersnaam";
}
}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = NULL;

header("Location: index.php");






?>