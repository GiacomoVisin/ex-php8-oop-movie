<?php

require_once ("./Models/Date.php");
require_once ("./Models/Genre.php");
require_once ("./Models/Movie.php");

// Generi
$fantasyGenre = new Genre("Fantasy");
$sciFiGenre = new Genre("Sci-Fi");
$actionGenre = new Genre("Action");

// Date
$datePacificRim = new Date("30", "10", "2018");
$dateAvengers = new Date("20", "11", "2026");

// Lista Film
$movies = [

    $PacificRim = new Movie("Pacific Rim", "John McTiernan", $dateAvengers, "7/10", [$sciFiGenre, $fantasyGenre],"https://musicart.xboxlive.com/7/a26b5100-0000-0000-0000-000000000002/504/image.jpg"),

    $Avengers = new Movie("Avengers", "Jhon Smith", $datePacificRim, "9/10", [$fantasyGenre, $actionGenre],"https://wallpapers.com/images/hd/marvel-avengers-team-battle-scene-7ghqv7ih0domruuq.jpg")
];

?>