<?php

require_once __DIR__ . "/models/Movie.php";

$movies = [
  new Movie("img/avengers-endgame.webp", "Avengers Endgame", ["Sci-fi","Action"], "182"),
  new Movie("img/harry-potter.webp", "Harry Potter", ["Fantasy", "Adventure"], "152"),
  new Movie("img/the-batman.webp", "The Batman", ["Action", "Adventure"], "176"),
  new Movie("img/the-lord-of-the-rings.webp", "The Lord of the Rings", ["Fantasy", "Adventure"], "178"),
];