<?php 

// include __DIR__ . '/model/Genre.php';

//* definire una classe
class Movie
{
  public $poster;
  public $title;
  public $filmDuration;
  public $year;
  public $genre;

  //* definire un construttore
  public function __construct($_poster, $_title, $_filmDuration, $_year, Genre $_genre)
  {
    $this->poster = $_poster;
    $this->title = $_title;
    $this->filmDuration = $_filmDuration;
    $this->year = $_year;
    $this->genre = $_genre;
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
  public function getGenreName()
  {
    echo $this->genre->name;
  }
}

?>
