<?php

include __DIR__ . '/model/Movie.php';
include __DIR__ . '/model/Genre.php';

//* array dei film
$movies = [
  new Movie("../img/ironman.jpg", "Iron Man", "2h 5m", "2008", new Genre('Fantascienza')),
  new Movie("../img/thor.jpg", "Thor", "1h 54m", "2011", new Genre('Fantascienza')),
  new Movie("../img/endgame.jpg", "Avengers: Endgame", "3h 2m", "2019", new Genre('Fantascienza')),
  new Movie("../img/captainamerica.jpg", "Captain America: The First Avenger", "2h 4m", "2011", new Genre('Fantascienza')),
  new Movie("../img/blackwidow.jpg", "Black Widow", "2h 13m", "2021", new Genre('Fantascienza')),
  new Movie("../img/guardiansofthegalaxy.jpg", "Guardians of the Galaxy", "2h 1m", "2014", new Genre('Fantascienza')),
  new Movie("../img/avengers.jpg", "The Avengers", "2h 23m", "2012", new Genre('Fantascienza')),
  new Movie("../img/captainmarvel.jpg", "Captain Marvel", "2h 3m", "2019", new Genre('Fantascienza')),
  new Movie("../img/antman.jpg", "Ant-Man", "1h 57m", "2015", new Genre('Fantascienza')),
  new Movie("../img/spiderman.jpg", "Spider-Man: Homecoming", "2h 13m", "2017", new Genre('Fantascienza')),
  new Movie("../img/wintersoldier.jpg", "Captain America: The Winter Soldier", "2h 16m", "2014", new Genre('Fantascienza')),
  new Movie("../img/doctorstrange.jpg", "Doctor Strange", "1h 55m", "2016", new Genre('Fantascienza')),
  new Movie("../img/thor_ragnarok.jpg", "Thor: Ragnarok", "2h 10m", "2017", new Genre('Fantascienza')),
  new Movie("../img/blackpanther.jpg", "Black Panther", "2h 14m", "2018", new Genre('Fantascienza')),
  new Movie("../img/civilwar.jpg", "Captain America: Civil War", "2h 27m", "2016", new Genre('Fantascienza')),
  new Movie("../img/loki.jpg", "Loki", "Variabile", "2021", new Genre('Fantascienza'))
];




?>
  
<?php

include __DIR__ . '/Views/layout/head.php';
include __DIR__ . '/Views/layout/header.php';
include __DIR__ . '/Views/partials/movies.php';
include __DIR__ . '/Views/layout/footer.php';

?>

