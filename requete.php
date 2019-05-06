<?php
/* Page content : id des pages / affiche les films, noms etc */
    $idfilm = $_GET["id"];
    $resFilm = $bdd->prepare("SELECT Titre, Description, Duree, Image, Video FROM Film WHERE ID_Film=?");
    $resFilm->execute(array($idfilm));
    $film = $resFilm->fetch();
    $resFilm->closeCursor();
/* Page content : affiche réa */
    $resActeur = $bdd->prepare("SELECT * FROM Role, Acteur WHERE ID_Film=? AND Role.ID_Acteur=Acteur.ID_Acteur");
    $resActeur->execute(array($idfilm));
/* Page content : affiche réa */
    $resRea = $bdd->prepare("SELECT * From Realisateur WHERE ID_Rea=?");
    $resRea->execute(array($idfilm));
?>
