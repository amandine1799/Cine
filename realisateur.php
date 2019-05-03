<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réalisateur</title>

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
    <link rel="stylesheet" href="css/footer.css">

</head>

<body>
<?php include('header.php');?>
<?php include('bdd.php');?>
<?php
  $idrea = $_GET["id"];
  $res = $bdd->prepare("SELECT * FROM Realisateur WHERE ID_Rea=?");
  $res->execute(array($idrea));
  $donnees = $res->fetch();
  $res->closeCursor();
  ?>
  <main id="real">

        <!--  pour le titre -->
        <div class="hoofd">
          <h1 class="text-uppercase"><?php echo $donnees['Nom']; ?></h1>
      </div>

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


<!--  pour la descrition de l'oeuvre du réalisateur  -->


    <p class="text-center shadow-lg p-3 mb-5 bg-light rounded">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
      esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
      non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

    </main>
    <?php include('footer.php');?>
</body>
</html>
