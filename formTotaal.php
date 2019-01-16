<?php
    try{
        $conn = new PDO("mysql:host=127.0.0.1;dbname=testserver", "root", "");
        
       
    
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset ($_POST["naam"])) {
                $naam= $_POST["naam"];
                $woonplaats=$_POST["woonplaats"];
                $kopjes=$_POST["aantalkopjes"];

                $statement = $conn -> prepare( "INSERT INTO deelnemers (naam,woonplaats,aantalkopjes) 
                VALUES (:fnaam, :fwoonplaats, :fkopjes)");
        
                $statement -> execute([
                    'fnaam' => $naam,
                    'fwoonplaats' => $woonplaats, 
                    'fkopjes' => $kopjes
                ]);
            }
            if(isset ($_POST["id"])){
                $id=$_POST['id'];
                
                $statement = $conn -> prepare( "DELETE FROM deelnemers WHERE id = :fid");
            
                $statement -> execute([
                'fid' => $id
                ]);  
            }

        
        }           
        $stmt = $conn->query("SELECT * FROM deelnemers");

        while ($row = $stmt->fetch()){

            echo "<li>".$row["id"]." ".$row["naam"]." ".$row["woonplaats"]
            ." ".$row["aantalkopjes"];
        }
        
        


        
    }
    catch(PDOException $e){
        echo $sql."<br>".$e -> getMessage();
    } 

$conn = NULL;



include ("formulier.html");
include ("formRem.html");
?>