<?php
$pname = "Bob";
$position = "Blitzer";
$mov = 6;
$str = 3;
$ag = 3;
$av = 9;
$skills = "block";
$inj = "none";
$compl = 1;
$td = 6;
$int = 1;
$cas = 5;
$mvp = 2;
$spp = $compl + ($td * 3) + ($int * 2) + ($cas * 2) + ($mvp * 5);


try{
    $connection = new PDO($dsn, $user_name, $pass_word);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO teams (playername, position, movement, strength, agility, armourvalue, skills, injury, completion, toughdown, intercept, csualties, mvp, spp, cost)".
            "Values ('$pname','$position','$mov','$str','$ag','$av',$skills',$inj','$compl','$td','$int','$cas','$mvp','$spp')";
            
            $connection->exec($sql);
            echo $pname . "added to database";           
}
catch(PDOEception $e){
    echo $sql."<br>".$e->getMessage();
}

$connection = null; //close connection

?>