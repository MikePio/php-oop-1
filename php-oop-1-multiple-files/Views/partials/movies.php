<div class="container d-flex flex-wrap align-items-center my-5">

  <?php foreach ($movies as $movie) : ?>
    <!-- //* stampare con un ciclo foreach -->
    <div class="text-black my-3 ms-4 me-4" style="width: 275px;">
      <div class="card">
        <img src="<?php $movie->getPoster() ?>" class="card-img-top" alt="<?php $movie->getTitle() ?>" style="height: 405px;">
        <div class="card-body">
          <h5 class="card-title"><?php $movie->getTitle() ?></h5>
          <p class="card-text mb-2">Durata: <?php $movie->getFilmDuration() ?></p>
          <p class="card-text ">Anno: <?php $movie->getYear() ?></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div>