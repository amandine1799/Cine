<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/allo_films.css">
    <link rel="shortcut icon" href="https://www.cinemet.fr/favicon.ico">
  </head>

  <body>
    <?php include('header.php');?>

    <div class="header_films">
      <h1>NOS FILMS</h1>
    </div>
    <ul class="list-group list-group-horizontal">
      <li class="list-group-item">Action</li>
      <li class="list-group-item">Science-Fiction</li>
      <li class="list-group-item">Fantastique</li>
    </ul>
    <?php include('bdd.php');?>
    <?php include('requete.php');?>
    <?php $reponse = get_all_films($bdd); ?>
    <div class="titre">Nouveautés</div>
    <div class="affiches-films">
      <?php
        while($donnees = $reponse->fetch())
        {
          ?>
      <a href="content.php?id=<?php echo $donnees["ID_Film"];?>">
        <img class="effect" src="img/<?php echo $donnees["Image"]; ?>" id="action">
        <p><?php echo $donnees["Titre"]; ?></p>
      </a>
      <?php
        }
        ?>
    </div>

    <?php
      $reponse->closeCursor();
      ?>
    <?php include('footer.php');?>
  </body>
</html>
