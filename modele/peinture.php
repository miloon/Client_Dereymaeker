<?php
/*
 * PARTIE D'AFFICHAGE DES IMAGES
 * */
$requete = $dbh->prepare("SELECT * FROM peinture;");
$requete->execute();

$affiche_peinture = $requete->fetchAll(PDO::FETCH_OBJ);
