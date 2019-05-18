<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">
  <link rel="stylesheet" href="../css/contact.css">
  <link rel="shortcut icon" href="https://www.cinemet.fr/favicon.ico">
</head>

<body>
  <?php
  include('header.php');
  include('../bdd.php');
  include('../requete.php');
  ?>
  <div class="content">

  <?php
  // On initialise les variables du formulaire
  $id_film = "";
  $titre = "";
  $descrip = "";
  $image = "";
  $video = "";
  $rea = "";

  // Logique qui permet d'ajouter ou modifier un film
  if (isset($_POST["valider"])) {
      // Si un champ est vide, on affiche une erreur
      if ($_POST["titre"] == "" || $_POST["descrip"] == "" || $_POST["image"] == "" || $_POST["video"] == "") {
         echo "Erreur";
      }
      else {
	 // L'ID est pas vide alors on MET A JOUR
	 if ($_POST["id_film"] != "") {
             $ajoutfilm = $bdd->prepare("UPDATE Film SET Titre = ?, Description = ?, Image = ?, Video = ?, ID_Rea = ? WHERE ID_Film = ?");
             $ajoutfilm->execute(array($_POST["titre"], $_POST["descrip"], $_POST["image"], $_POST["video"], $_POST["rea"], $_POST["id_film"]));
             echo "Le film a bien été modifié";
	 } else { // L'ID est défini du coup, on insert
             $ajoutfilm = $bdd->prepare("INSERT INTO Film (Titre, Description, Image, Video, ID_Rea) VALUES (?, ?, ?, ?, ?)");
             $ajoutfilm->execute(array($_POST["titre"], $_POST["descrip"], $_POST["image"], $_POST["video"], $_POST["rea"]));
             echo "Le film a bien été ajouté";
         }
      }
  }

  // On récupère les données du films SI on est en mode edition
  if (isset($_GET['id'])) {
      $film = get_film($bdd, $_GET['id']);
      $id_film = $film["ID_Film"];
      $titre = $film["Titre"];
      $descrip = $film["Description"];
      $image = $film["Image"];
      $video = $film["Video"];
      $rea = $film["ID_Rea"];
  }
  ?>
    <p><a href="index.php">Retour</a></p>
    <form method="post">
        <input type="hidden" name="id_film" value="<?php echo $id_film; ?>">
        <div class="form-group">
          <label for="titreInput">Titre</label>
          <input type="text" name="titre" class="form-control" value="<?php echo $titre; ?>" id="titreInput" placeholder="Titre">
        </div>
        <div class="form-group">
          <label for="descripTextarea">Description</label>
          <textarea class="form-control" name="descrip" id="descripTextarea" placeholder="Description" rows="3"><?php echo $descrip; ?></textarea>
        </div>
        <div class="form-group">
          <label for="imageInput">Image</label>
          <input type="text" name="image" class="form-control" value="<?php echo $image; ?>" id="imageInput" placeholder="Image">
        </div>
        <div class="form-group">
          <label for="videoInput">Video</label>
          <input type="text" name="video" class="form-control" value="<?php echo $video; ?>" id="videoInput" placeholder="Video">
        </div>
        <div class="form-group">
          <label for="reaInput">Réalisateur</label>
          <input type="text" name="rea" class="form-control" value="<?php echo $rea; ?>" id="reaInput" placeholder="Réalisateur">
        </div>
        <button type="submit" name="valider" class="btn btn-dark btn-lg">Envoyer</button>
    </form>
  </div>
</body>
