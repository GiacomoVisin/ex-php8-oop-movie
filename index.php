<?php 
 
 require_once("./date.php");
 Class Movie {

public $title;
public $director;
public $date;
public $rating;


public function __construct($title,$director,$date,$rating){
    $this->title = $title;
    $this->director = $director;
    $this->date = $date;
    $this->rating = $rating;
}


public function getMovieDirector(){
    return $this->director;

}



 }

 $dateAvengers = New Date ("12","11","2020");

 $datePacificRim = New Date ("30","10","2018");

 $PacificRim = New Movie ("Pacific Rim","John McTiernan",$dateAvengers,"PG-13");

 $Avengers = New Movie ("Avengers","Jhon Smith",$datePacificRim,"PG-14");

 var_dump($PacificRim);

 var_dump($Avengers);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-MOVIE</title>
</head>
<body>
    
</body>
</html>