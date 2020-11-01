<?php
require "vendor/autoload.php";
require "BerlinClockKata.php";

use BerlinClockKata\BerlinClockKata;
use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    private $berlin_clock_kata;

    protected function setUp() : void
    {
        parent::setUp();
        $this->berlin_clock_kata = new BerlinClockKata();
    }

    public function test_diplay_given00_shouldReturnOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "00";
        //Act
        $actual = $test->afficher_minutes($minute);
        //Assert
        $this->assertEquals("OOOO",$actual);
    }

    public function test_diplay_given01_shouldReturnYOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "01";
        //Act
        $actual = $test->afficher_minutes($minute);
        //Assert
        $this->assertEquals("YOOO",$actual);
    }

    public function test_diplay_given02_shouldReturnYYOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "02";
        //Act
        $actual = $test->afficher_minutes($minute);
        //Assert
        $this->assertEquals("YYOO",$actual);
    }

    public function test_diplay_given03_shouldReturnYYYO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "03";
        //Act
        $actual = $test->afficher_minutes($minute);
        //Assert
        $this->assertEquals("YYYO",$actual);
    }

}
