<?php

class Movie
{

    public $title;
    public $director;
    public $date;
    public $rating;
    public array $genres;

    public $urlImg;

    public function __construct($title, $director, $date, $rating, array $genres, $urlImg)
    {
        $this->title = $title;
        $this->director = $director;
        $this->date = $date;
        $this->rating = $rating;
        $this->genres = $genres;
        $this->urlImg = $urlImg;

    }


    public function getGenre()
{
    $genreList = [];
    foreach ($this->genres as $genre) {
        $genreList[] = "[" . $genre->genreName . "]";
    }
    return implode(", ", $genreList);
}



}

?>