<?php

abstract class Mens{
    public $naam;
    private $lengte;
    private $gewicht;
  
    function __construct($pnaam, $plengte = 0, $pgewicht = 0){
            $this->naam = $pnaam;
            $this->lengte = $plengte;
            $this->gewicht = $pgewicht;
        }   

    public function bmi(){
        // if ($this->lengte <=0 || $this->gewicht <=0){
        // throw new exception('ik kan geen BMI berekenen vanwege ongeldig lengte/gewicht.');
        // }
        // else{
        $resultaat=$this->gewicht/($this->lengte*$this->lengte);
        return $resultaat;
        // }
    }
    
    public function geefnaam(){
        return $this->naam;
    }

     
}

class Coach extends Mens{
    public $personeelsnummer;

    public function geefantwoordopvraag($vraag){
       return 'geen idee';
    }

}

class Deelnemer extends Mens{
    public $score;

    function __construct($pnaam, $plengte = 0, $pgewicht = 0, $pscore){
        parent:: __construct($pnaam, $plengte, $pgewicht);
        $this->score = $pscore;
    }   
}





// $m1= new Deelnemer("Piet",1.67, 63.5,8);
// echo $m1->geefnaam()." ".$m1->bmi();
// $m2= new Deelnemer("Klaas", 1.83,100,7);
// $m3= new Deelnemer("Jan", 1.93,93,9);
// $m4 = new Coach("Chee Lan",1.56,70,67);
// echo $m4->geefnaam()." ".$m4->bmi();

// $iemand = new Coach("Floris",1.50,40.0,5);
// echo $iemand->geefnaam()." ".$iemand->bmi();

$iemand2 = new Deelnemer("Sjaak",0,0,10);
echo $iemand2->geefnaam()." ".$iemand2->bmi()." ".$iemand2->score;







?>