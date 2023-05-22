<?php

//* definire una classe
class Movie{
  public $title;
  public $filmDuration;
  public $year;
}

//* Dichiarati attributi/variabili d’istanza
$ironMan = new Movie();
$ironMan->title = "Iron Man";
$ironMan->filmDuration = "2h 5m";
$ironMan->year = "2008";

var_dump($ironMan);

$thor = new Movie();
$thor->title = "Thor";
$thor->filmDuration = "1h 54m";
$thor->year = "2011";

var_dump($thor);

$endgame = new Movie();
$endgame->title = "Avengers: Endgame";
$endgame->filmDuration = "3h 2m";
$endgame->year = "2019";

var_dump($endgame);

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
//
//






?>








<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <title>PHP HOTEL</title>
</head>

<body class="bg-dark text-white">
  
  
  
</body>

</html>