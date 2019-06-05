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
    <?php $reponse = get_all_films($bdd);
    if(isset($_GET['del']) AND !empty($_GET['del'])) {
      $suppr = $bdd->prepare('DELETE FROM Film WHERE ID_Film = ?');
      $suppr->execute(array($_GET['del']));
    }
    ?>
    <ul class="list-group list-group-horizontal">
      <a class="btn btn-primary btn-sm" href="modif.php">Ajout</a>
    </ul>
      <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titre</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($donnees = $reponse->fetch())
        {
          ?>
      <tr>
        <th scope="row"><?php echo $donnees["ID_Film"]; ?></th>
        <td><?php echo $donnees["Titre"]; ?></td>
        <td><a class="btn btn-primary btn-sm" href="modif.php?id=<?php echo $donnees["ID_Film"]; ?>"><i class="fas fa-edit"></i></a></td>
        <td><a class="btn btn-primary btn-sm" href="index.php?del=<?php echo $donnees["ID_Film"]; ?>"><i class="far fa-trash-alt"></i></a></td>
      </tr>
      <?php
        }
        ?>
    </tbody>
  </table>

    <?php
      $reponse->closeCursor();
      ?>
    </main>
  </body>
</html>
