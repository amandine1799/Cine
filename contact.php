<!DOCTYPE html>
<html>
  <head>
      <title>Contact Allocinemet</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      <link rel="stylesheet" href="css/contact.css">
      <link rel="shortcut icon" href="https://www.cinemet.fr/favicon.ico">
  </head>

  <body>
    <?php include('header.php');?>
    <?php include('bdd.php');?>

    <?php
    // Vérifie si le formulaire a été envoyé
    if (isset($_POST["valider"])) {
        // Si un champ est vide, on affiche une erreur
        if ($_POST["nom"] == "" || $_POST["prenom"] == "" || $_POST["mail"] == "" || $_POST["message"] == "" ) {
           echo "Erreur";
        }
        else { // Sinon, si tout est bon ça fonctionnera
          $rescontact = $bdd->prepare("INSERT INTO Contact (nom, prenom, mail, message) VALUES (?, ?, ?, ?)");
          $rescontact->execute(array($_POST["nom"], $_POST["prenom"], $_POST["mail"], $_POST["message"]));
          echo "Envoyé";
        }
    }
    ?>
    <form method="post">
      <div class="content">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nom</label>
            <input type="text" name="nom" class="form-control" id="inputEmail4" placeholder="Nom">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="inputPassword4" placeholder="Prénom">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Mail</label>
          <input type="mail" name="mail" class="form-control" id="inputAddress" placeholder="Mail">
        </div>
          <div class="mb-3">
            <label for="textarea">Message</label>
              <textarea class="form-control" name="message" id="textarea" placeholder="Message"></textarea>
          </div>
          <button type="submit" name="valider" class="btn btn-dark btn-lg btn-block">Envoyer</button>
      </div>
    </form>

    <?php include('footer.php');?>
  </body>
</html>
