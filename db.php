<?php

require_once ("./Models/Date.php");
require_once ("./Models/Genre.php");
require_once ("./Models/Movie.php");

// Generi
$fantasyGenre = new Genre("Fantasy",141);
$sciFiGenre = new Genre("Sci-Fi",1514);
$actionGenre = new Genre("Action",1543);
$comedyGenre = new Genre("Comedy",1652);
$romanticGenre = new Genre("Romantic",1354);

// Date
$datePacificRim = new Date("30", "10", "2018");
$dateAvengers = new Date("20", "11", "2026");
$dateSpiderman = new Date("18", "09", "2004");

// Lista Film
$movies = [

    $PacificRim = new Movie("Pacific Rim", "John McTiernan", $dateAvengers, "7/10", [$sciFiGenre, $fantasyGenre],"https://musicart.xboxlive.com/7/a26b5100-0000-0000-0000-000000000002/504/image.jpg"),

    $Avengers = new Movie("Avengers", "Jhon Smith", $datePacificRim, "9/10", [$fantasyGenre, $actionGenre],"https://wallpapers.com/images/hd/marvel-avengers-team-battle-scene-7ghqv7ih0domruuq.jpg"),

    $Spiderman = new Movie("Spiderman", "Stan lee", $dateSpiderman, "10/10", [$comedyGenre, $actionGenre],"https://cdn.mos.cms.futurecdn.net/8aX68dFkFBNPS7anGtg9EA.jpg"),

    $TheLastSunrise = new Movie("The Last Sunrise", "Jhonatan Geli", $dateSpiderman, "10/10", [$romanticGenre],"https://image.tmdb.org/t/p/original/tvY4QPyopLVaRkPVOQb3Y1dyy7f.jpg"),

    $Spiderman2 = new Movie("The amazing spiderman 2", "Stan lee", $dateSpiderman, "9/10", [$actionGenre],"https://whatsondisneyplus.com/wp-content/uploads/2023/04/Amazing-Spider-man-2.jpg")

];



?>