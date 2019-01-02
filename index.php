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
for($x = 0; $x <= 10; $x++){
    echo "Het nummer is: $x <br>";
}

$x = -5;

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

</body>
</html>