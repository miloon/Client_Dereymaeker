<?php
$requete = $dbh->prepare("SELECT id, titre, DAY(ladate) AS jour, MONTH(ladate) AS mois, YEAR(ladate) AS annee, HOUR(ladate) AS heure, MINUTE(ladate) AS minute, SECOND(ladate) AS seconde, description, lieu FROM evenement ORDER BY id DESC;");
$requete->execute();

$affiche_event = $requete->fetchAll(PDO::FETCH_OBJ);
