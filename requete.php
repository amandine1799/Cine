<?php

function get_film($bdd, $idfilm) {
    $resFilm = $bdd->prepare("SELECT * FROM Film WHERE ID_Film=?");
    $resFilm->execute(array($idfilm));
    $film = $resFilm->fetch();
    $resFilm->closeCursor();
    return $film;
}

function get_acteurs($bdd, $idfilm) {
    $resActeur = $bdd->prepare("SELECT * FROM Role, Acteur WHERE ID_Film=? AND Role.ID_Acteur=Acteur.ID_Acteur");
    $resActeur->execute(array($idfilm));
    return $resActeur;
}

function get_realisateurs($bdd, $idfilm) {
    $resRea = $bdd->prepare("SELECT * From Realisateur WHERE ID_Rea=?");
    $resRea->execute(array($idfilm));
    return $resRea;
}

function get_all_films($bdd) {
    $requete = "SELECT ID_Film, Titre, Description, Image FROM Film";
    $reponse = $bdd->query($requete);
    return $reponse;
}
?>
