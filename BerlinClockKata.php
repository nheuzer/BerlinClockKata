<?php
namespace BerlinClockKata;
class BerlinClockKata{

    public function afficher_par_minutes($minute) : string{
        $nombreDeMinutes = substr($minute, -1);
        $difference = 4 - $nombreDeMinutes;
        $aReturn = "";
        for($i=0; $i<$nombreDeMinutes; $i++){
            $aReturn .= "Y";
        }
        for($i=0; $i< $difference; $i++){
            $aReturn .= "O";
        }
        echo ($aReturn);
        return $aReturn;
    }

    public function afficher_par_5_minutes($minute) : string{
        if ($minute === "00"){
            echo("OOOOOOOOOOO");
            return "OOOOOOOOOOO";
        }
        if ($minute === "05"){
            echo("YOOOOOOOOOO");
            return "YOOOOOOOOOO";
        }
    }
}