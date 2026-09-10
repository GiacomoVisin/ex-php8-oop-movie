<?php 

Class Date {

public $day;
public $month;
public $year;


public function __construct($day,$month,$year){
    $this -> day = $day;
    $this -> month = $month;
    $this -> year = $year;

}


public function getDate(){
    return $this->day . "/" . $this->month . "/" . $this->year;

}
}


?>