<?php

class Genre
{
    public $genreName;
    public $genreId;

    public function __construct($genreName,$genreId)
    {
        $this->genreName = $genreName;
        $this->genreId = $genreId;
    }

}

?>