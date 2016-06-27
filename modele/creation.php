<?php
/*
 * PARTIE D'AFFICHAGE DES IMAGES
 * */
$requete = $dbh->prepare("SELECT * FROM creation;");
$requete->execute();

$affiche_creation = $requete->fetchAll(PDO::FETCH_OBJ);
