<?php

require_once("./Models/date.php");
require_once("./Models/genre.php");
require_once("./Models/movie.php");

$dateAvengers = new Date("20", "11", "2026");

$datePacificRim = new Date("30", "10", "2018");

$fantasyGenre = new Genre("Fantasy");

$sciFiGenre = new Genre("Sci-Fi");

$actionGenre = new Genre("Action");



$PacificRim = new Movie("Pacific Rim", "John McTiernan", $dateAvengers, "PG-13",[$sciFiGenre,$fantasyGenre]);

$Avengers = new Movie("Avengers", "Jhon Smith", $datePacificRim, "PG-14", [$fantasyGenre,$actionGenre]);

var_dump($PacificRim);

var_dump($Avengers);






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-MOVIE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

</body>

</html>