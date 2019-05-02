<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Films</title>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link src="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/allo_films.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="shortcut icon" href="https://www.cinemet.fr/favicon.ico">

</head>

<body>
  <?php include('header.php');?>
    <div class="header_films">
        <h1>NOS FILMS</h1>
    </div>
    <?php include('bdd.php');?>
    <?php
    $requete = "SELECT ID_Film, Titre, Description, Duree, Image FROM Film";
    $reponse = $bdd->query($requete);
    ?>


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


    <!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
    <script src="js/siema.min.js"></script>
    <script src="js/allo_films.js"></script>

</body>

</html>
