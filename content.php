<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="https://www.cinemet.fr/favicon.ico">
  <title>Film</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--  pour la police des titres  -->
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <!-- pour les autres textes -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <!--mon CSS -->
  <link rel="stylesheet" href="css/style_pages_cont_real_act.css">

</head>
  <body>
    <?php include('header.php');?>
    <?php include('bdd.php');?>
    <?php include('requete.php');?>
    <?php $film = get_film($bdd, $_GET['id']); ?>
    <?php $resRea = get_realisateurs($bdd, $_GET['id']); ?>
    <?php $resActeur = get_acteurs($bdd, $_GET['id']); ?>
    <main id="content">
      <div class="hoofd">
        <h1 class="text-uppercase"><?php echo $film['Titre']; ?></h1>
      </div>


      <!-- pour l'image du film -->
      <div id="affiche-img">
        <img src="img/<?php echo $film['Image']; ?>" class="mr-3" alt="...">
      </div>
      <!-- pour la description du film -->

      <p class="text-center bg-light"><?php echo $film['Description']; ?>
      </p>

      <!-- pour la partie récap d'infos et la bande annonce -->

      <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-5">

          <div class="list-group">
            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Réalisateur</h5>
              </div>
              <?php
                  While ($rea = $resRea->fetch()) {
              ?>
              <p class="mb-1">
                <a href="realisateur.php?id=<?php echo $rea["ID_Rea"]; ?>"><?php echo $rea["Nom"]; ?></a>
              </p>
              <?php
                    }
                    $resRea->closeCursor();
              ?>
            </div>
            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Acteurs</h5>
              </div>
              <?php
                    While ($acteur = $resActeur->fetch()) {
                ?>
              <p class="mb-1">
                <ul><li><a href="acteur.php?id=<?php echo $acteur["ID_Acteur"]; ?>"><?php echo $acteur["Nom"]; ?></a></li></ul>
              </p>
              <?php
                    }
                    $resActeur->closeCursor();
              ?>
            </div>
          </div>
        </div>

        <div class="col-1 col-sm-3 col-md-3 col-lg-1 col-xl-1"></div>
        <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4">
          <iframe class="shadow-lg p-3 mb-5 bg-light rounded" src="<?php echo $film['Video']; ?>" height="320px" width="530px"></iframe>
        </div>

        <div class="col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1"></div>

      </div>

    </main>
    <?php include('footer.php');?>
  </body>
</html>
