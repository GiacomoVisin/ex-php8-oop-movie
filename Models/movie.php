<?php

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

?>