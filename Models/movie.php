<?php

class Movie
{

    public $title;
    public $director;
    public $date;
    public $rating;
    public array $genres;



    public function __construct($title, $director, $date, $rating, array $genres)
    {
        $this->title = $title;
        $this->director = $director;
        $this->date = $date;
        $this->rating = $rating;
        $this->genres = $genres;

    }


    public function GetGenre()
    {
        foreach ($this->genres as $genre) {
            echo "[" . $genre->genreName .  "]". "," ;
        }
    }

    public function getMovieDirector()
    {
        return $this->director;

    }



}

?>