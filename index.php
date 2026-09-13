<?php

require_once("./Models/date.php");
require_once("./Models/genre.php");
require_once("./Models/movie.php");
require_once("./db.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-MOVIE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1>PHP-OOP-MOVIE</h1>


    <div class="container">
    <?php
    foreach ($movies as $movie) {
        echo "<div class='card mb-3 d-flex'>
            <div class='card-header'>
                <img src='$movie->urlImg'>
                <span>{$movie->title}</span>
            </div>
            <div class='card-body'>
                <p><strong>Regia:</strong> {$movie->director}</p>
            </div>
            <div class='card-footer'>
                <span><strong>Generi:</strong> {$movie->getGenre()}</span>
                <p> $movie->rating <i class='bi bi-star-fill'></i> </p> 
            </div>
        </div>";
    }
    ?>
</div>




</body>

</html>