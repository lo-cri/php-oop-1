<?php

require_once __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <title>PHP OOP Movie</title>
</head>

<body class="bg-dark">
  <h1 class="fw-bold text-white text-center my-5">Movies</h1>
  <div class="container">
    <div class="row row-cols-4">
      <?php foreach ($movies as $movie) : ?>
        <div class="col mb-5">
          <div class="card rounded-0 p-2">
            <div class="card-img">
              <img class="img-fluid w-100" src="<?php echo $movie->poster ?>">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"><?php echo $movie->title ?></h5>
              <p class="card-text mb-1">Genre : 
                <?php foreach ($movie->genres as $index=>$genre) {
                  if($index != 0) {
                    echo " / "; 
                  }
                  echo $genre; 
                } ?>
              </p>
              <p class="card-text">Duration : <?php echo $movie->getDuration() ?></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</body>

</html>