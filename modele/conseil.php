<?php

$requete = $dbh->prepare("SELECT * FROM temoignage;");
$requete->execute();


$affiche_temoignage = $requete->fetchAll(PDO::FETCH_OBJ);