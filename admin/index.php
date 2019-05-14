<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">
    <link rel="stylesheet" href="../css/style_pages_cont_real_act.css">
    <link rel="stylesheet" href="../css/allo_films.css">
    <link rel="shortcut icon" href="https://www.cinemet.fr/favicon.ico">
</head>

  <body>
    <?php include('header.php');?>
    <main id="content">
    <div class="hoofd">
      <h1 class="text-uppercase">ADMINISTRATION</h1>
    </div>
    <?php include('../bdd.php');?>
    <?php include('../requete.php');?>
    <?php $reponse = get_all_films($bdd); ?>
    <div class="affiches-films">
      <?php
        while($donnees = $reponse->fetch())
        {
          ?>
      <a href="modif.php?id=<?php echo $donnees["ID_Film"];?>">
        <img class="effect" src="../img/<?php echo $donnees["Image"]; ?>" id="action">
        <p><?php echo $donnees["Titre"]; ?></p>
      </a>
      <?php
        }
        ?>
    </div>

    <?php
      $reponse->closeCursor();
      ?>
    </main>
  </body>
</html>
