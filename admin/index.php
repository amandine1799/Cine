<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">
    <link rel="stylesheet" href="admin.css">
    <link rel="shortcut icon" href="https://www.cinemet.fr/favicon.ico">
</head>

<body>
  <?php include('header.php');?>
  <?php include('../bdd.php');?>
  <?php include('../requete.php');?>
  <?php $reponse = get_all_films($bdd); ?>
  <?php
  // Vérifie si le formulaire a été envoyé
  if (isset($_POST["envoyer"])) {
       { // Sinon, ben on insère le message en base
        $modiffilm = $bdd->prepare("INSERT INTO Film (Titre, Description, Image) VALUES (?, ?, ?)");
        $modiffilm->execute(array($_POST["titre"], $_POST["descrip"], $_POST["image"]));
        echo "Envoyé";
      }
  }
  ?>
  <div class="content">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titre</th>
          <th scope="col">Description</th>
          <th scope="col">Image</th>
          <th scope="col">Valider</th>
        </tr>
      </thead>
      <?php
        while($donnees = $reponse->fetch())
        {
          ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $donnees["ID_Film"]; ?></th>
          <td>
          <input type="text" name="titre" class="form-control" id="inputEmail4" placeholder="<?php echo $donnees["Titre"]; ?>"></td>
          <td>
          <input type="text" name="descrip" class="form-control" id="inputEmail4" placeholder="<?php echo $donnees["Description"]; ?>"></td>
          <td>
          <input type="text" name="image" class="form-control" id="inputEmail4" placeholder="<?php echo $donnees["Image"]; ?>"></td>
          <td><button type="submit" name="envoyer" class="btn btn-dark btn-lg">Envoyer</button></td>
        </tr>
        <?php
          }
          ?>
          <?php
            $reponse->closeCursor();
            ?>
      </tbody>
    </table>
  </div>

</body>
</html>
