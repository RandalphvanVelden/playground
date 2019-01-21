<!DOCTYPE html>
<html>
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

if(isset($_GET['naamzoeken'])){
$naamzoeken=$_GET['naamzoeken'];
}
else {
    $naamzoeken= '';
}
try{
    $conn = new PDO("mysql:host=127.0.0.1; dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SELECT * FROM producten WHERE naam LIKE '%$naamzoeken%'");

echo "<table class='table table-striped' id = 'table1'>
    <thead>
    <tr>
    <th>product</th>
    <th>prijs</th>
    </tr>
    </thead>
    <tbody>";
    While($row=$stmt->fetch()){
        echo "<tr>";
        echo "<td>" . $row['naam'] . "</td><td>" . $row['prijs'] . "</td>";
        echo "<td><a class='btn1' href='dbverwijderen.php?productid=" . $row['id'] . "'><i class='fas fa-trash-alt butt' ></i></a></td>";
        echo "<td><a class='btn2' href='formulierbewerken.php?productid=" . $row['id'] . "'><i class='fas fa-edit butt'></i></td>";
        echo "<td><a class='btn3' href='koopproduct.php?productid=" . $row['id'] . "'><i class='fas fa-shopping-cart butt'></i></td>";
    echo"</tr>";
    }
     echo "</tbody>
    </table>";
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

<a href="index.html" class="btn btn-success" id="pt">Product toevoegen</a>

  






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>
