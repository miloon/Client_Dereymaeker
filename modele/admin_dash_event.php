<?php
$requete = $dbh->prepare("SELECT id, titre, ladate, ladatefin, DAY(ladate) AS jour, MONTH(ladate) AS mois, YEAR(ladate) AS annee, HOUR(ladate) AS heure, MINUTE(ladate) AS minute, SECOND(ladate) AS seconde, description, lieu FROM evenement ORDER BY ladate DESC;");
$requete->execute();

$affiche_event = $requete->fetchAll(PDO::FETCH_OBJ);

// date de référence : la date du jour en cours d'aujourd'hui de maintenant right now
$date = date("Y-m-d H:i:s", time());