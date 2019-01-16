

<a href="index.html" class="btn">Product toevoegen</a>

<?php

try{
    $conn = new PDO("mysql:host=127.0.0.1; dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SELECT * FROM producten");

    While($row=$stmt->fetch()){
        echo "<tr>";
        echo "<td>" . $row['naam'] . "</td><td>" . $row['prijs'] . "</td>";
        echo "<td><a class='btn1' href='dbverwijderen.php?productid=" . $row['id'] . "'>Verwijder</a></td> ";
        echo "<td><a class='btn2' href='formulierbewerken.php?productid=" . $row['id'] . "'>Wijzigen</td>";
        echo "<td><a class='btn3' href='koopproduct.php?productid=" . $row['id'] . "'>Kopen</td>";
    echo"</tr>";
    }
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>