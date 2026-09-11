<?php

require_once("./Traits/validateDate.php");

class Date
{

    use validateDate;
    public $day;
    public $month;
    public $year;


    public function __construct($day, $month, $year)
    {
        if ($this->isValidDate($day, $month, $year)) {
            $this->day = $day;
            $this->month = $month;
            $this->year = $year;
        } else {

            echo "Attenzione: La data {$day}/{$month}/{$year} non è valida!<br>";

        }
    }

    public function getDate()
    {
        return $this->day . "/" . $this->month . "/" . $this->year;
    }
}



?>