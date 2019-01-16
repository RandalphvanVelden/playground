<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    



<form action="tryout.php" method = "POST">

<input type="number" name="getal1" placeholder = "getal 1.."><br>
<input type="number" name="getal2" placeholder = "getal 2.."><br>
<input type="submit" value="Verzenden">
</form>

<?php
$getal1 = $_POST["getal1"];
$getal2 = $_POST["getal2"];

if($getal1>$getal2){
$getal3 = $getal1;
$getal1 = $getal2;
$getal2 = $getal3;
}

for($x=$getal1; $x<=$getal2; $x++){
    echo $x.($x % 2 == 0 ? "E": "").($x < $getal2 ? "," : ".");
}

echo"<br>";


function maakKoffie($type, $aantal){
    $type = ($type == "" ? "cappuccino" : $type);
    return "Maak $aantal x een kop koffie van het type $type.<br>";
}

function hoogsteGetal($x , $y){
    return "het hoogste getal is". ($x >= $y ? $x : $y);
}

echo hoogsteGetal(1,6)."<br>";
echo hoogsteGetal (5,2)."<br>";
echo hoogsteGetal (59,78)."<br>";
echo"<br>";

function laagsteGetal($x , $y){
    return "het hoogste getal is". ($x >= $y ? $x : $y);
}

echo laagsteGetal(1,6)."<br>";
echo laagsteGetal (5,2)."<br>";
echo laagsteGetal (59,78)."<br>";

echo"<br>";

function gemiddeldeWaarde($getal1,$getal2){
    return "het gemiddelde is ".($getal1 + $getal2)/2;
}

echo gemiddeldeWaarde(5,10)."<br>";
echo gemiddeldeWaarde(2,2)."<br>";
echo gemiddeldeWaarde(2,5)."<br>";
echo gemiddeldeWaarde(-5,5)."<br>";

$fruit = array("bananen","appels","peren","sinaasappels");
for($i=0; $i<count($fruit); $i++){
echo $fruit[$i]."<br>";
}


for($i=count($fruit)-1; $i>=0; $i--){
echo $fruit[$i]."<br>";
}

?>

<?php
$namen = ["Piet", "Jan", "Klaas"];
print_r($namen);






?>

</body>
</html>