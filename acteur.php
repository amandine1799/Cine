<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://www.cinemet.fr/favicon.ico">
    <title>Acteur</title>

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!-- pour les autres textes -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<!--mon CSS -->
    <link rel="stylesheet" href="css/style_pages_cont_real_act.css">


</head>

<body>
    <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include('header.php');?>
    <?php include('bdd.php');?>
    <?php
    $requete = "SELECT * FROM Role, Acteur WHERE ID_Film=" . $idfilm . " AND Role.ID_Acteur=Acteur.ID_Acteur";
    $reponse = $bdd->query($requete);
    ?>
    <?php
        while($donnees = $reponse->fetch())
        {
    ?>
  <main id="acteur">

        <!--  pour le titre -->
        <div class="hoofd">
          <h1 class="text-uppercase"><?php echo $donnees['Acteur']; ?></h1>
      </div>

<!-- pour la partie carte d'identité et sa photo -->

<div class="row">
  <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
  <div class="col-10 col-sm-10 col-md-5 col-lg-5 col-xl-6">

  <div class="list-group CI">
<a href="#" class="list-group-item list-group-item-action">
  <div class="d-flex w-100 justify-content-between">
    <h5 class="mb-1">Naissance</h5>
  </div>
  <p class="mb-1"><?php echo $donnees['Naissance']; ?></p>
</a>
<a href="#" class="list-group-item list-group-item-action">
  <div class="d-flex w-100 justify-content-between">
    <h5 class="mb-1">Biographie</h5>
  </div>
  <p class="mb-1"><?php echo $donnees['Bio']; ?></p>
</a>
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


    <div class="col-md-10">
        <div class="liens_films">
            <a href="#"><img class="affiche" src="img/1.jpg"></a>
            <a href="#"><img class="affiche" src="img/2.jpg"></a>
            <a href="#"><img class="affiche" src="img/3.jpg"></a>
            <a href="#"><img class="affiche" src="img/4.jpg"></a>
            <a href="#"><img class="affiche" src="img/5.jpg"></a>
            <a href="#"><img class="affiche" src="img/6.jpg"></a>
            <a href="#"><img class="affiche" src="img/7.jpg"></a>
            <a href="#"><img class="affiche" src="img/8.jpg"></a>
            <a href="#"><img class="affiche" src="img/9.jpg"></a>
            <a href="#"><img class="affiche" src="img/10.jpg"></a>

        </div>
    </div>

    </main>
    <?php
    }

    $reponse->closeCursor();
    ?>

<?php include('footer.php');?>

      <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>
</body>
</html>
