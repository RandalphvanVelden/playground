<html>
<ul>

<?php
$persoon1 =array(
    "klantnummer" => 105,
    "naam" => "Toos",
    "woonplaats" => "Amsterdam"
    
);

$persoon2 =array(
    "klantnummer" => 180,
    "naam" => "Piet",
    "woonplaats" => "Enschede"
    
);

$klanten = [$persoon1,$persoon2];

foreach($klanten as $klant)
echo "<li>".$klant['klantnummer']."-".$klant['naam']."-".$klant['woonplaats']."</li>";



?>
</ul>

</html>