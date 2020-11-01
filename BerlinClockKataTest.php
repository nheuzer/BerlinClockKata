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
        $actual = $test->afficher_par_minutes($minute);
        //Assert
        $this->assertEquals("OOOO",$actual);
    }

    public function test_diplay_given01_shouldReturnYOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "01";
        //Act
        $actual = $test->afficher_par_minutes($minute);
        //Assert
        $this->assertEquals("YOOO",$actual);
    }

    public function test_diplay_given02_shouldReturnYYOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "02";
        //Act
        $actual = $test->afficher_par_minutes($minute);
        //Assert
        $this->assertEquals("YYOO",$actual);
    }

    public function test_diplay_given03_shouldReturnYYYO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "03";
        //Act
        $actual = $test->afficher_par_minutes($minute);
        //Assert
        $this->assertEquals("YYYO",$actual);
    }

    public function test_diplay_given04_shouldReturnYYYY(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "04";
        //Act
        $actual = $test->afficher_par_minutes($minute);
        //Assert
        $this->assertEquals("YYYY",$actual);
    }

    public function test_diplay_given00_shouldReturnOOOOOOOOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "00";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("OOOOOOOOOOO",$actual);
    }

    public function test_diplay_given05_shouldReturnYOOOOOOOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "05";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YOOOOOOOOOO",$actual);
    }

    public function test_diplay_given10_shouldReturnYYOOOOOOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "10";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYOOOOOOOOO",$actual);
    }

    public function test_diplay_given15_shouldReturnYYROOOOOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "15";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYROOOOOOOO",$actual);
    }

    public function test_diplay_given20_shouldReturnYYRYOOOOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "20";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYRYOOOOOOO",$actual);
    }

    public function test_diplay_given25_shouldReturnYYRYYOOOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "25";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYRYYOOOOOO",$actual);
    }




}
