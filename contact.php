<!DOCTYPE html>
<html>

<head>
    <title>Contact Allocinemet</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
  <?php include('header.php');?>

  <form>
    <div class="content">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nom</label>
          <input type="nom" class="form-control" id="inputEmail4" placeholder="Nom">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Prénom</label>
          <input type="prenom" class="form-control" id="inputPassword4" placeholder="Prénom">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Adresse Mail</label>
        <input type="mail" class="form-control" id="inputAddress" placeholder="Mail">
      </div>
        <div class="mb-3">
          <label for="textarea">Message</label>
            <textarea class="form-control" id="textarea" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
  </form>

  <?php include('footer.php');?>
</body>

</html>
