<?php 

// include __DIR__ . '/model/Genre.php';

//* definire una classe
class Movie
{
  public $poster;
  public $title;
  public $filmDuration;
  public $year;
  public $genres;

  //* definire un construttore
  public function __construct($_poster, $_title, $_filmDuration, $_year, $_genres)
  {
    $this->poster = $_poster;
    $this->title = $_title;
    $this->filmDuration = $_filmDuration;
    $this->year = $_year;
    $this->genres = $_genres;
    //*inserito metodo nella classe
    $this->getMovieDetails();
  }

  //* dichiarato un metodo 
  public function getMovieDetails()
  {
    //* essendo un array deve essere trasformato prima in stringa e successivamente stampato
    // $genreString = implode(", ", $this->genresArray);
    // OPPURE
    // $genreString = join(", ", $this->genresArray);
    // return "Titolo film: $this->title <br> Durata: $this->filmDuration <br> Anno: $this->year <br> Generi: $genreString";
    // senza generi/genres
    // return "Titolo film: $this->title <br> Durata: $this->filmDuration <br> Anno: $this->year";
    // OPPURE
    // return 'Titolo film:' . ' ' . $this->title . ' ' . 'Durata:' . ' ' . $this->filmDuration . ' ' . 'Anno:' . ' ' . $this->year;
  }

  public function getPoster()
  {
    echo $this->poster;
  }
  public function getTitle()
  {
    echo $this->title;
  }
  public function getFilmDuration()
  {
    echo $this->filmDuration;
  }
  public function getYear()
  {
    echo $this->year;
  }
  //* Stampare un sinoglo genere
  // public function getGenreName()
  // {
  //   echo $this->genre->name;
  // }
}

?>
