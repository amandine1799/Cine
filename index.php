<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.cinemet.fr/favicon.ico">
    <title>AllocineMet</title>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <?php include('requete.php'); ?>
    <?php include('header.php'); ?>
    <?php include('bdd.php'); ?>
    <?php $reponse = get_all_films($bdd); ?>

    <div onmouseover="nav2()" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/THE-VILLAINESS.jpg" class="d-block w-100 img" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/hobbit_3.jpg" class="d-block w-100 img" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slide1.jpg" class="d-block w-100 img" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="bg1">
      <h1 id="caffiche">à l' affiche</h1>
      <div class="carousel mt-5" data-flickity>
        <?php
          while($donnees = $reponse->fetch())
          {
            ?>
        <div class="carousel-cell"><a href="content.php?id=<?php echo $donnees["ID_Film"];?>">
            <img class="img_caroussel" src="img/<?php echo $donnees["Image"]; ?>"></a></div>
        <?php
            }
            ?>
      </div>
    </div>
    <div class="parallax-window" data-parallax="scroll" data-image-src="./img/salle-cinema.jpg"></div>

    <div class="descrip">
      <h1>ALLOCINEMET</h1>
      <div class="container-fluid col-12 mx-auto my-5">
        <div class="image float-left col-4">
          <img src="img/metropolis.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="text-descrip">
          <h2>Lorem Ipsum</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga error reiciendis repellat, aut quos
            culpa
            distinctio tempora a laudantium voluptatem eligendi possimus nesciunt quas maiores, asperiores
            beatae
            esse? Nulla, totam.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
            eligendi
            repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
            quis?</p>
        </div>
      </div>
    </div>
    <?php
          $reponse->closeCursor();
          ?>
    <?php include('footer.php');?>

    <script src="js/app.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/parallax.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>

</html>
