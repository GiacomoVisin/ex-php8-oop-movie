<?php


require_once("./db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

<!--  font-style   -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Oswald&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Caacupe+One&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Oswald&display=swap');
</style>

<!-- meta-data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-MOVIE</title>

<!-- bootstrap -->    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    
<!-- css -->   
    <link rel="stylesheet" href="index.css">

</head>

<body>

    <h1 class="text-center mb-5">PHP-OOP-MOVIE</h1>

    <div class="container d-flex flex-wrap">
    <?php
    foreach ($movies as $movie) {
        echo "<div class='card mb-3 mx-3 d-flex' style='width: 20rem';>
                <img src='$movie->urlImg' class='card-img-top' style='width: 20rem ; height: 12rem'>
                    <div class='card-header bg-dark' >
                        <span class='text-white'>{$movie->title}</span>
                    </div>
                    <div class='card-body'>
                        <p><strong>Regia:</strong> {$movie->director}</p>
                    </div>
                    <div class='card-footer'>
                        <span><strong>Generi:</strong> {$movie->getGenre()}</span>
                        <hr>
                        <p>  Rating: $movie->rating <i class='bi bi-star-fill'></i> </p> 
                    </div>
             </div>";
    }
    ?>
</div>

</body>

</html>