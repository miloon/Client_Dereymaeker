<?php

$requete = $dbh->prepare("SELECT * FROM temoignage;");
$requete->execute();


$affiche_temoignage = $requete->fetchAll(PDO::FETCH_OBJ);

$requete = $dbh->prepare("SELECT * FROM partenaire;");
$requete->execute();


$affiche_partenaire = $requete->fetchAll(PDO::FETCH_OBJ);