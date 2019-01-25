<?php

function myfile(){
$myfile = fopen("input.txt", "r");

echo fgets($myfile);
}

myfile()

// tekst inladen
//tekst opsplitsen naar naam,score per deelnemer
//sorteren op score
//wegschrijven in output.txt






// $myfile2 = fopen("output.txt"), "w")
// $txt = fgetc($myfile);

// fwrite($myfile2, $txt);
// fclose($myfile2);

?>