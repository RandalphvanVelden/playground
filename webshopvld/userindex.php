<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GroentenBoer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="index.css" />
    <!-- <script src="main.js"></script> -->
</head>
<body>

<?php
session_start();
include ("navbar.php");
$userid=$_SESSION['id'];
try{
    $conn = new PDO("mysql:host=127.0.0.1; dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SELECT*FROM users WHERE id = $userid");

echo "<table class='table table-striped' id = 'table1'>
    <thead>
    <tr>
    <th>voornaam</th>
    <th>achternaam</th>
    <th>email</th>
    <th>adres</th>
    <th>postcode</th>
    <th>woonplaats</th>
    </tr>
    </thead>
    <tbody>";
    While($row=$stmt->fetch()){
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td><td>" . $row['voornaam'] . "</td><td>" . $row['achternaam'] . "</td><td>" . $row['email'] . "</td><td>".$row['adres'] . "</td>" . "</td><td>".$row['postcode'] . "</td>" . "</td><td>".$row['plaats'] . "</td>";
        echo "<td><a class='btn1' href='dbuserverwijderen.php?userid=" . $row['id'] . "'><i class='fas fa-trash-alt butt' ></i></a></td>";
        echo "<td><a class='btn2' href='userformaanpassen.php?userid=" . $row['id'] . "'><i class='fas fa-edit butt'></i></td>";
    echo"</tr>";
    }
     echo "</tbody>
    </table>";
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>



</body>
</html>