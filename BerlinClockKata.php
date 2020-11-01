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
        $nombreLumiereAllumee = $minute/5;
        $compteurMultiple3 = 1;
        $aReturn = "";
        for ($i=0; $i < $nombreLumiereAllumee; $i++){
            if ($compteurMultiple3%3 ===0){
                $aReturn .= "R";
                $compteurMultiple3 = 0;
            }else{
                $aReturn .= "Y";
            }
            $compteurMultiple3++;
        }
        for ($i = 0; $i < 11-$nombreLumiereAllumee; $i++){
            $aReturn .= "O";
        }
        echo $aReturn;
        return $aReturn;
    }

    public function afficher_par_heures($heure) : string{
        $nombreDHeures = substr($heure, -1);
        $difference = 4 - $nombreDHeures;
        $aReturn = "";
        for($i=0; $i<$nombreDHeures; $i++){
            $aReturn .= "R";
        }
        for($i=0; $i< $difference; $i++){
            $aReturn .= "O";
        }
        echo ($aReturn);
        return $aReturn;
    }


}