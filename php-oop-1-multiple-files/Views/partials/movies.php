<div class="container d-flex flex-wrap align-items-start my-5">

  <?php foreach ($movies as $movie) : ?>
    <!-- //* stampare con un ciclo foreach -->
    <div class="text-black my-3 ms-4 me-4" style="width: 275px;">
      <!-- <div class="card" style="min-height: 621px;"> --> <!-- //* con lista (li) senza span  -->
      <div class="card" style="min-height: 575px;"> <!-- //* con span senza lista (li)  -->
        <img src="<?php $movie->getPoster() ?>" class="card-img-top" alt="<?php $movie->getTitle() ?>" style="height: 405px;">
        <div class="card-body">
          <h5 class="card-title"><?php $movie->getTitle() ?></h5>
          <p class="card-text mb-1">Durata: <?php $movie->getFilmDuration() ?></p>
          <p class="card-text mb-1">Anno: <?php $movie->getYear() ?></p>
          
          <div class="card-text ">Genere: 
            <?php foreach($movie->genres as $genre) : ?>
              <!-- //* con lista (li) senza span -->
              <!-- <li><?php $genre->getName()  ?></li> -->
              <!-- //* con span senza lista (li) -->
              <span><?php $genre->getName()  ?></span>
              <?php endforeach; ?>
            </div>
            <!-- <p class="card-text ">Genere: <?php // $movie->getGenreName() ?></p> -->
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div>