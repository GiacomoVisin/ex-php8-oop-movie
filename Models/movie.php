<?php



class Movie
{

    // Proprietà del film

    public $title;
    public $director;
    public $date;
    public $rating;
    protected array $genres;
    public $urlImg;

    // funzione costrutto per passare le proprietà del film alla classe

    public function __construct($title, $director, $date, $rating, array $genres, $urlImg)
    {
        $this->title = $title;
        $this->director = $director;
        $this->date = $date;
        $this->rating = $rating;
        $this->genres = $genres;
        $this->urlImg = $urlImg;

    }

    // funzione per leggere il genere del film

    public function getGenre()
    {
        $genreList = [];
        foreach ($this->genres as $genre) {
            $genreList[] = "[" . $genre->genreName . "]";
        }
        return implode(", ", $genreList);
    }

    // funzione per leggere il titolo del film

    public function getTitle()
    {
        return $this->title;
    }

    // funzione per leggere il rating del film

    public function setRating($rating)
    {
        $this->rating = $rating;
    }



}

?>