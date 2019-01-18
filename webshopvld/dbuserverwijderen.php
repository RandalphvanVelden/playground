<?php

$userid=$_GET["userid"];

try{
    $conn = new PDO("mysql:host=127.0.0.1; dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("DELETE FROM users WHERE id=:fid");

$stmt->execute([
    'fid' => $userid
]);

}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = NULL;

header("Location: userindex.php");

?>