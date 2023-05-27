<?php

//* definire una classe
class Movie
{
  public $poster;
  public $title;
  public $filmDuration;
  public $year;
  public $genresArray;

  //* definire un construttore
  public function __construct($_poster, $_title, $_filmDuration, $_year, $_genresArray)
  {
    $this->poster = $_poster;
    $this->title = $_title;
    $this->filmDuration = $_filmDuration;
    $this->year = $_year;
    $this->genresArray = $_genresArray;
    //*inserito metodo nella classe
    $this->getMovieDetails();
  }

  //* dichiarato un metodo 
  public function getMovieDetails()
  {
    //* essendo un array deve essere trasformato prima in stringa e successivamente stampato
    $genreString = implode(", ", $this->genresArray);
    // OPPURE
    // $genreString = join(", ", $this->genresArray);
    return "Titolo film: $this->title <br> Durata: $this->filmDuration <br> Anno: $this->year <br> Generi: $genreString";
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
}

//* array dei film
$movies = [
  new Movie("../img/ironman.jpg", "Iron Man", "2h 5m", "2008", ["Azione", "Fantascienza"]),
  new Movie("../img/thor.jpg", "Thor", "1h 54m", "2011", ["Azione", "Avventura", "Fantasy"]),
  new Movie("../img/endgame.jpg", "Avengers: Endgame", "3h 2m", "2019", ["Azione", "Fantascienza", "Supereroi"]),
  new Movie("../img/captainamerica.jpg", "Captain America: The First Avenger", "2h 4m", "2011", ["Azione", "Avventura"]),
  new Movie("../img/blackwidow.jpg", "Black Widow", "2h 13m", "2021", ["Azione", "Avventura", "Spionaggio"]),
  new Movie("../img/guardiansofthegalaxy.jpg", "Guardians of the Galaxy", "2h 1m", "2014", ["Azione", "Avventura", "Fantascienza"]),
  new Movie("../img/avengers.jpg", "The Avengers", "2h 23m", "2012", ["Azione", "Fantascienza"]),
  new Movie("../img/captainmarvel.jpg", "Captain Marvel", "2h 3m", "2019", ["Azione", "Fantascienza"]),
  new Movie("../img/antman.jpg", "Ant-Man", "1h 57m", "2015", ["Azione", "Fantascienza"]),
  new Movie("../img/spiderman.jpg", "Spider-Man: Homecoming", "2h 13m", "2017", ["Azione", "Avventura"]),
  new Movie("../img/wintersoldier.jpg", "Captain America: The Winter Soldier", "2h 16m", "2014", ["Azione", "Avventura"]),
  new Movie("../img/doctorstrange.jpg", "Doctor Strange", "1h 55m", "2016", ["Azione", "Fantasy"]),
  new Movie("../img/thor_ragnarok.jpg", "Thor: Ragnarok", "2h 10m", "2017", ["Azione", "Avventura"]),
  new Movie("../img/blackpanther.jpg", "Black Panther", "2h 14m", "2018", ["Azione", "Avventura"]),
  new Movie("../img/civilwar.jpg", "Captain America: Civil War", "2h 27m", "2016", ["Azione", "Fantascienza"]),
  new Movie("../img/loki.jpg", "Loki", "Variabile", "2021", ["Azione", "Fantascienza", "Supereroi"])
];




?>
  
  <?php

  include __DIR__ . '/Views/layout/head.php';
  include __DIR__ . '/Views/layout/header.php';
  include __DIR__ . '/Views/partials/movies.php';
  include __DIR__ . '/Views/layout/footer.php';

  ?>

