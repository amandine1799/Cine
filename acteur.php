<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.cinemet.fr/favicon.ico">
    <title>Acteur</title>
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
    <?php
      $idacteur = $_GET["id"];
      $res = $bdd->prepare("SELECT * FROM Acteur WHERE ID_Acteur=?");
      $res->execute(array($idacteur));
      $donnees = $res->fetch();
      $res->closeCursor();
      ?>
    <main id="acteur">

      <!--  pour le titre -->
      <div class="hoofd">
        <h1 class="text-uppercase"><?php echo $donnees['Nom']; ?></h1>
      </div>

      <!-- pour la partie carte d'identité et sa photo -->

      <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
        <div class="col-10 col-sm-10 col-md-5 col-lg-5 col-xl-6">
          <div class="list-group CI">
            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Naissance</h5>
              </div>
              <p class="mb-1"><?php echo $donnees['Naissance']; ?></p>
            </div>
            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Biographie</h5>
              </div>
              <p class="mb-1"><?php echo $donnees['Bio']; ?></p>
            </div>
          </div>
        </div>

        <div class="col-3 col-sm-3 col-md-1 col-lg-1 col-xl-1"></div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
          <iframe class="shadow p-3 mb-5 bg-light rounded" src="img/<?php echo $donnees['Image']; ?>" height="439px" width="340px"></iframe>
        </div>
        <div class="col-3 col-sm-3 col-md-2 col-lg-2 col-xl-1"></div>
      </div>
      <!--  pour la descrition du parcours cinématographique de l'acteur  -->
      <p class="filmo"><?php echo $donnees['Filmographie']; ?>
      </p>
    </main>
    <?php include('footer.php');?>
  </body>
</html>
