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
  public $title;
  public $filmDuration;
  public $year;

  //* definire un construttore
  public function __construct($_title, $_filmDuration, $_year)
  {
    $this->title = $_title;
    $this->filmDuration = $_filmDuration;
    $this->year = $_year;
    //*inserito metodo nella classe
    $this->getMovieDetails();
  }
  
  //* dichiarato un metodo 
  public function getMovieDetails()
  {
    return "Titolo film: $this->title <br> Durata: $this->filmDuration <br> Anno: $this->year";
    // OPPURE
    // return 'Titolo film:' . ' ' . $this->title . ' ' . 'Durata:' . ' ' . $this->filmDuration . ' ' . 'Anno:' . ' ' . $this->year;
  }
}

//* INVOCARE attributi/variabili d’istanza
// Iron Man
$ironMan = new Movie("Iron Man", "2h 5m", "2008");
//? COSì NON FUNZIONA SE C'è IL __construct
// $ironMan->title = "Iron Man";
// $ironMan->filmDuration = "2h 5m";
// $ironMan->year = "2008";

var_dump($ironMan);
var_dump($ironMan->title);

// Thor
$thor = new Movie("Thor", "1h 54m", "2011");
//? COSì NON FUNZIONA SE C'è IL __construct
// $thor->title = "Thor";
// $thor->filmDuration = "1h 54m";
// $thor->year = "2011";

var_dump($thor);
var_dump($thor->filmDuration);

// Avengers: Endgame
$endgame = new Movie("Avengers: Endgame", "3h 2m", "2019");
//? COSì NON FUNZIONA SE C'è IL __construct
// $endgame->title = "Avengers: Endgame";
// $endgame->filmDuration = "3h 2m";
// $endgame->year = "2019";

var_dump($endgame);
var_dump($endgame->year);

//* stampare un metodo
var_dump($ironMan->getMovieDetails());
var_dump($thor->getMovieDetails());
var_dump($endgame->getMovieDetails());



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

  <!-- //* stampare un metodo in pagina -->
  <div class="alert alert-primary my-3 mx-3" role="alert">
  <?php echo ($ironMan->getMovieDetails()); ?>
  </div>

  <div class="alert alert-primary my-3 mx-3" role="alert">
  <?php echo ($thor->getMovieDetails()); ?>
  </div>

  <div class="alert alert-primary my-3 mx-3" role="alert">
  <?php echo ($endgame->getMovieDetails()); ?>
  </div>



  <?php



  ?>


</body>

</html>