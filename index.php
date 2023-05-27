<?php

//* DATI
// Iron Man
// 2h 5m
// 2008
// 
//Thor
//1h 54m
//2011 
//
//Avengers: Endgame
//3h 2m
//2019 

//! ESERCIZIO PARTE 1   Dichiarare attributi/variabili d’istanza

// //* definire una classe
// class Movie{
//   public $title;
//   public $filmDuration;
//   public $year;
// }

// //* Dichiarati attributi/variabili d’istanza
// // Iron Man
// $ironMan = new Movie();
// $ironMan->title = "Iron Man";
// $ironMan->filmDuration = "2h 5m";
// $ironMan->year = "2008";

// var_dump($ironMan);

// var_dump($ironMan->title);

// // Thor
// $thor = new Movie();
// $thor->title = "Thor";
// $thor->filmDuration = "1h 54m";
// $thor->year = "2011";

// var_dump($thor);

// var_dump($thor->filmDuration);

// // Avengers: Endgame
// $endgame = new Movie();
// $endgame->title = "Avengers: Endgame";
// $endgame->filmDuration = "3h 2m";
// $endgame->year = "2019";

// var_dump($endgame);

// var_dump($endgame->year);


//! ESERCIZIO PARTE 2      definire un construttore


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

//* INVOCARE attributi/variabili d’istanza
// Iron Man
// $ironMan = new Movie("Iron Man", "2h 5m", "2008", ["Azione", "Fantascienza"]);
//? COSì NON FUNZIONA SE C'è IL __construct
// $ironMan->title = "Iron Man";
// $ironMan->filmDuration = "2h 5m";
// $ironMan->year = "2008";

//*stampo in pagina
// var_dump($ironMan);
// var_dump($ironMan->title);

// Thor
// $thor = new Movie("Thor", "1h 54m", "2011", ["Azione", "Avventura", "Fantasy"]);
//? COSì NON FUNZIONA SE C'è IL __construct
// $thor->title = "Thor";
// $thor->filmDuration = "1h 54m";
// $thor->year = "2011";

//*stampo in pagina
// var_dump($thor);
// var_dump($thor->filmDuration);

// Avengers: Endgame
// $endgame = new Movie("Avengers: Endgame", "3h 2m", "2019", ["Azione", "Fantascienza", "Supereroi"]);
//? COSì NON FUNZIONA SE C'è IL __construct
// $endgame->title = "Avengers: Endgame";
// $endgame->filmDuration = "3h 2m";
// $endgame->year = "2019";

//*stampo in pagina
// var_dump($endgame);
// var_dump($endgame->year);

//* stampare un metodo
// var_dump($ironMan->getMovieDetails());
// var_dump($thor->getMovieDetails());
// var_dump($endgame->getMovieDetails());

//* array dei film
$movies = [
  new Movie("img/ironman.jpg", "Iron Man", "2h 5m", "2008", ["Azione", "Fantascienza"]),
  new Movie("img/thor.jpg", "Thor", "1h 54m", "2011", ["Azione", "Avventura", "Fantasy"]),
  new Movie("img/endgame.jpg", "Avengers: Endgame", "3h 2m", "2019", ["Azione", "Fantascienza", "Supereroi"])

]


?>









<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <title>PHP OOP-1</title>
</head>

<body class="bg-dark text-white">

<div class="container d-flex flex-wrap align-items-center justify-content-between">

  <?php foreach($movies as $movie) : ?>
    <!-- //* stampare con un ciclo foreach -->
    <div class="text-black" style="width: 275px;">
      <div class="card">
        <img src="<?php $movie->getPoster()?>" class="card-img-top" alt="<?php $movie->getTitle() ?>" style="height: 405px;">
        <div class="card-body">
          <h5 class="card-title"><?php $movie->getTitle() ?></h5>
          <p class="card-text mb-2">Durata: <?php $movie->getFilmDuration() ?></p>
          <p class="card-text ">Anno: <?php $movie->getYear() ?></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div>




  <!-- //* stampare un metodo in pagina -->
  <!-- <div class="alert alert-primary my-3 mx-3" role="alert">
  <?php echo ($ironMan->getMovieDetails()); ?>
  </div>

  <div class="alert alert-primary my-3 mx-3" role="alert">
  <?php echo ($thor->getMovieDetails()); ?>
  </div>

  <div class="alert alert-primary my-3 mx-3" role="alert">
  <?php echo ($endgame->getMovieDetails()); ?>
  </div> -->






</body>

</html>