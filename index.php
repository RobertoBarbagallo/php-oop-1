<?php

include "./Classes/movie.php";


$database = include "./FakeDBs/fakeMovieDb.php";



foreach ($database as $film) {


   $myMovie = new Movie($film["titolo"], $film["anno"], $film["attori"], $film["recensione"], $film["locandina"]);

   echo $myMovie->renderFilm();
   $myMovie->renderActors();
}
