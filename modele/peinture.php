<?php
// requête pour l'affichage des images dans la galerie
$requete = $dbh->prepare("SELECT * FROM peinture;");
$requete->execute();

$affiche_peinture = $requete->fetchAll(PDO::FETCH_OBJ);

// requête pour l'affichage des évènements dans le journal d'évènements

$requete1 = $dbh->prepare("SELECT ladate, titre, description, lieu, DAY(ladate) AS jour, MONTH(ladate) AS mois, YEAR(ladate) AS annee, HOUR(ladate) AS heure, MINUTE(ladate) AS minute, SECOND(ladate) AS seconde FROM evenement ORDER by ladate DESC;");
$requete1->execute();


$affiche_event = $requete1->fetchAll(PDO::FETCH_OBJ);

$date = date("Y-m-d H:i:s",time());


