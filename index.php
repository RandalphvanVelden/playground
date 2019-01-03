<html>
<body>
hallo
<br>
<?php
echo 1+2;
echo "<br>";

$naam="Randalph van Velden";
echo "van $naam <br>";

$txt ="Dit is een string";
$aantal_dagen = 5;
$prijs = 10.5;

echo "$aantal_dagen <br>";

$txt = "PHP";
echo "ik leer $txt! <br>";
echo "ik programmeer graag in ".$txt."! <br>";

$x = 7;
$y = 3;
echo $x + $y;
echo "<br>";
?>
<?php
$a = 1;
$b = 2;
function sum(){
    global $a, $b;
    $b = $a + $b;
}
sum();
echo $b;
echo "<br>";

function Sum2(){
    $GLOBALS["b"]=$GLOBALS["a"] + $GLOBALS["b"];
}

sum2();
echo $b;
echo"<br>";

$count = 199; /* global scope */
function showValue()
{ $count = 200;
    echo $count; /*reference to local scope variable */
}
showValue();

function first_test()
{
    $a = 0;
    echo $a;
    $a++;
}
first_test();

echo"<br>";

function second_test()
{
    static $a = 0;
    echo $a;
    $a++;
}
second_test();

echo "<br>";

function test()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10){
        test();
    }
    $count--;
}

$MyString = "Dit is een \"escaped\" string <br>";
$MySingleString = 'Dit \'zal\' werken';
$MyNonVariale = "Ik ben in \$PHP aan het programmeren";
$MyNewline = "Deze regel eindigt met een line return\nhoop ik";
$MyFile = "c:\\windows\\system32\\myfile.txt";
echo $MyString;
echo $MySingleString;
echo $MyNonVariale;
echo $MyNewline;
echo $MyFile;
echo "<br>";

function eigenFunctie(){
// het gebruik van variabele naam genereert een foutmelding
echo "<p>Variabele naam binnen deze fuction is: $naam</p>";
}
eigenFunctie();

$naam = "Maarten";
$leeftijd = 29;
$prijs = 50;

if($leeftijd <=18)
{$x = $prijs * 0.75;
echo "$naam je toegangsprijs is: \$ $x";
}
else{
    echo "$naam je toegangsprijs is: \$ $prijs";
}
echo "<br>";

// alle startwaarden
$prijsArtikel = 100;
$leeftijdKoper = 70;
$teBetalen = $prijsArtikel;
$woonplaatsKoper = "Enschede";

// alle bewerkingen
if ($woonplaatsKoper == "Almelo")
{$teBetalen = $teBetalen * 2;
}
else{
    if ($leeftijdKoper <= 18)
    $korting = $prijsArtikel*0.1;

    if ($leeftijdKoper >= 65)
    $korting = $prijsArtikel*0.05;

    $teBetalen = $prijsArtikel - $korting;
}


// alle output
// verwacht: iedereen ouder dan 18 volle mep betalen
//verwacht: idereen 18 jaar of jonger 10% korting
// verwacht: iedereen van 65 jaar of ouder 5% korting
// verwacht: iedereen uit enschede, 2* zo duur
echo $teBetalen;

echo "<br>";
for($x = 0; $x <= 10; $x++){
    echo "Het nummer is: $x <br>";
}


// tel 1t/m5 op met een loop
$totaal = 0;

for($getal = 1; $getal <= 50; $getal = $getal + 2){
$totaal = $totaal + $getal;
echo "$getal <br>";
//echo "$totaal<br>";
}
 echo $totaal;
echo "<br><hr><br>";

$totaal = 0;
$getal = 1;

while($getal <= 100){
$totaal = $totaal + ($getal *10);
echo "($getal * 10)=".($getal*10). "<br>";
$getal = $getal + 1;
}
echo "totaal is $totaal";

echo "<br><hr><br>";

$x = 1;

while($x <= 5){
    echo "Het nummer is: $x <br>";
    $x++;
}
?>

<form action="index.php" method = "POST">
Voornaam:<br>
<input type="text" name="voornaam"><br>
Achternaam:<br>
<input type="text" name="achternaam"><br>
<input type="submit" value="Verzenden">
</form>

<?php
$naam = $_POST["voornaam"]." ".$_POST["achternaam"];
echo "$naam <br>";

?>

<script>
xhttp.open("GET","index.php?voornaam=Jan&leeftijd=45",true);
xhttp.send();
</script>

<?php 
echo $_GET["voornaam"]."<br>";
echo "De leeftijd is".$_GET["leeftijd"]."jaar oud<br>";
?>

<?php
//tel van een tot 100 met een while loop
$totaal = 0;
$getal = 1;

while($getal <= 100){
$totaal = $totaal + ($getal * 10);
echo "(getal * 10) =".($getal * 10)."<br>";
$getal++;
}
echo $totaal;
?>
</body>
</html>