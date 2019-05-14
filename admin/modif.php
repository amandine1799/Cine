<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">
  <link rel="stylesheet" href="../css/style_pages_cont_real_act.css">
  <link rel="shortcut icon" href="https://www.cinemet.fr/favicon.ico">
</head>

<body>
  <?php include('header.php');?>
  <?php include('../bdd.php');?>
  <?php include('../requete.php');?>
  <?php $film = get_film($bdd, $_GET['id']); ?>
    <?php $reponse = get_all_films($bdd); ?>
  <main id="content">
    <div class="hoofd">
      <h1 class="text-uppercase"><?php echo $film['Titre']; ?></h1>
    </div>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Titre</th>
          <th scope="col">Description</th>
          <th scope="col">Image</th>
          <th scope="col">Vidéo</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">#</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td><button type="submit" name="valider" class="btn btn-dark btn-lg">Valider</button></td>
        </tr>
      </tbody>
    </table>
  </main>
</body>
