<?php
namespace BerlinClockKata;
class BerlinClockKata{

    public function afficher_par_minute($minute) : string{
        $nombreDeMinutes = substr($minute, -1);
        $difference = 4 - $nombreDeMinutes;
        $aReturn = "";
        for($i=0; $i<$nombreDeMinutes; $i++){
            $aReturn .= "Y";
        }
        for($i=0; $i< $difference; $i++){
            $aReturn .= "O";
        }
        //echo ($aReturn);
        return $aReturn;
    }

    public function afficher_par_5_minutes($minute) : string{
        $nombreLumieresAllumees = $minute/5;
        $compteurMultiple3 = 1;
        $aReturn = "";
        for ($i=0; $i < $nombreLumieresAllumees; $i++){
            if ($compteurMultiple3%3 ===0){
                $aReturn .= "R";
                $compteurMultiple3 = 0;
            }else{
                $aReturn .= "Y";
            }
            $compteurMultiple3++;
        }
        for ($i = 0; $i < 11-$nombreLumieresAllumees; $i++){
            $aReturn .= "O";
        }
        //echo $aReturn;
        return $aReturn;
    }

    public function afficher_par_heure($heure) : string{
        $nombreDHeures = substr($heure, -1);
        $difference = 4 - $nombreDHeures;
        $aReturn = "";
        for($i=0; $i<$nombreDHeures; $i++){
            $aReturn .= "R";
        }
        for($i=0; $i< $difference; $i++){
            $aReturn .= "O";
        }
        //echo ($aReturn);
        return $aReturn;
    }

    public function afficher_par_5_heures($heure) : string{
        $nombreLumieresAllumees = $heure/5;
        $aReturn = "";
        for ($i = 0; $i < $nombreLumieresAllumees; $i++){
            $aReturn .= "R";
        }
        for ($i = 0; $i < 4 - $nombreLumieresAllumees; $i++){
            $aReturn .= "O";
        }
        //echo($aReturn);
        return $aReturn;
    }

    public function afficher_par_seconde($seconde) : string{
        $aReturn = "";
        if ($seconde%2 === 0){
            $aReturn = "R";
        }else{
            $aReturn = "O";
        }
        //echo($aReturn);
        return $aReturn;
    }

    public function afficher_horloge_entiere($time) {
        $separation = explode(":", $time);
        $seconde = strval($separation[2]);
        $minute = strval($separation[1]);
        $heure = strval($separation[0]);
        $moduloHeure = $heure%5;
        $heurePar5 = $heure - $moduloHeure;
        $moduloMinute = $minute%5;
        $minutePar5 = $minute - $moduloMinute;
        $aReturn = $this->afficher_par_seconde($seconde)."\n".$this->afficher_par_5_heures($heurePar5)."\n".$this->afficher_par_heure($moduloHeure)."\n"
            .$this->afficher_par_5_minutes($minutePar5)."\n".$this->afficher_par_minute($moduloMinute);
        echo "$aReturn";
        return $aReturn;
    }
}