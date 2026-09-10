<?php

require_once("./Models/date.php");
require_once("./Models/genre.php");
class Movie
{

    public $title;
    public $director;
    public $date;
    public $rating;

    public $genre;



    public function __construct($title, $director, $date, $rating, Genre $genre)
    {
        $this->title = $title;
        $this->director = $director;
        $this->date = $date;
        $this->rating = $rating;
        $this->genre = $genre;

    }


    public function getMovieDirector()
    {
        return $this->director;

    }



}

$dateAvengers = new Date("12", "11", "2020");

$datePacificRim = new Date("30", "10", "2018");

$fantasyGenre = new Genre("Fantasy");

$sciFiGenre = new Genre("Sci-Fi");


$PacificRim = new Movie("Pacific Rim", "John McTiernan", $dateAvengers, "PG-13", $sciFiGenre);

$Avengers = new Movie("Avengers", "Jhon Smith", $datePacificRim, "PG-14", $fantasyGenre);

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