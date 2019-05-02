<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    $requete = "SELECT ID_Acteur, Nom, Naissance, Bio, Image FROM Acteur";
    $reponse = $bdd->query($requete);
    ?>
    <?php
        while($donnees = $reponse->fetch())
        {
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

  <iframe class="shadow p-3 mb-5 bg-light rounded" src="img/<?php echo $donnees['Image']; ?>" height="450px" width="350px"></iframe>

</div>
<div class="col-3 col-sm-3 col-md-2 col-lg-2 col-xl-1"></div>

</div>
</div>


<!--  pour la descrition du parcours cinématographique de l'acteur  -->


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

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

      $('.m-nav-toggle').click(function(e){
        e.preventDefault();
        $('#Navbar').toggleClass('is-open');
    })

document.addEventListener('DOMContentLoaded', function () {
    window.onscroll = function (ev) {
        document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" :
            "cInvisible";
    };
});

$('#sidebarCollapse').click(function (e) {
    e.preventDefault();
    $('#sidebar').toggleClass('active');
})

function openModal() {
    document.getElementById("modal").style.top = "0px";
}

function closeModal() {
    document.getElementById("modal").style.top = "-780px";
}</script>

</body>
</html>
