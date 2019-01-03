<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ambachtelijke meubels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
</head>
<body>
<img src="tafel.jpg">
<form action = "index.php" method = "post">
lengte<input name = "lengte" type = "number" min = 50 max = 244>cm<br>
breedte<input name = "breedte" type = "number" min = 50 max = 122>cm<br>
hoogte<input name = "hoogte" type = "number" min = 40 max = 180>cm<br>
<input name = "Bouwen" type = "checkbox">laten bouwen<br>
<input name = "zelfBouwen" type = "checkbox">zelf bouwen<br>
<input name = "verfen" type = "checkbox">geverfd<br>
<input name = "zelfVerven" type = "checkbox">zelf verven<br>
kleur<br>
<input name = "blank" type = "checkbox">blank
<input name = "rood" type = "checkbox">rood
<input name = "blauw" type = "checkbox">blauw
<input name = "groen" type = "checkbox">groen
<input name = "geel" type = "checkbox">geel
<input name = "wit" type = "checkbox">wit
<input name = "rood" type = "checkbox">zwart<br>

<button type = "prijs">price</button>
<!-- <button type = "bestellen">Order</button> -->
</form>

<?php
// prijs berekenen. 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $lengteTotaal = $_POST["lengte"] + 2 *10;
    $breedteTotaal = $_POST["breedte"] + 2*10;
    $hoogte = $_Post["hoogte"];
    $prijs = 0;
// maximale grootte is 244 bij 122 cm 
//lengte is ingegeven lengte plus 2 maal hoogte zijkant = 2*10
//breedte is ingegeven breedte plus 2 maal hoogte zijkant = 2*10

// materiaal is 50 euro per plaat en 10 euro per balk

    if ($lengteTotaal<=244 && $breedteTotaal<=122){
        $prijs = $prijs + 50;
    }
    else{
        $prijs = $prijs + (2*50);
    }
// een balk maximaal 180 cm bij 4x4 cm
} 
echo $prijs;



//schilderen oppervlak is 15 euro per vierkante meter
//poten schilderen is 10% duurder

// bouwen kost 20 euro
// zelfbouw is materiaal 20% duurder
//ver zend kosten zijn 25 euro, vervallen als er meer dan 250 euro word besteld



?>





    
</body>
</html>


