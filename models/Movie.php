<?php

class Movie {
  public $poster;
  public $title;
  public $genres;
  public $duration;

  function __construct($_poster, $_title, $_genres, $_duration)
  {
    $this->poster = $_poster;
    $this->title = $_title;
    $this->genres = $_genres;
    $this->duration = $_duration;
  }

  public function getDuration() {
    return $this->duration . " min";
  }
}