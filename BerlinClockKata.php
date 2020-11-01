<?php
namespace BerlinClockKata;
class BerlinClockKata{

    public function afficher_minutes($minute) : string{
        if($minute === "00") {
            echo("OOOO");
            return "OOOO";
        }
        if($minute === "01") {
            echo("YOOO");
            return "YOOO";
        }
        if($minute === "02") {
            echo("YYOO");
            return "YYOO";
        }
        if($minute === "03") {
            echo("YYYO");
            return "YYYO";
        }
    }
}