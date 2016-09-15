<?php

$titre = "Bonjour Sophie !";

// requête récupérant les évènements postérieurs à NOW
$requetefuture = $dbh->prepare("SELECT ladatefin, ladate, titre, description, lieu, DAY(ladate) AS jour, MONTH(ladate) AS mois, YEAR(ladate) AS annee, HOUR(ladate) AS heure, MINUTE(ladate) AS minute, SECOND(ladate) AS seconde
FROM evenement
WHERE ladate > LOCALTIMESTAMP()
ORDER BY ladate ASC
;");
$requetefuture->execute();
$affiche_eventf = $requetefuture->fetchAll(PDO::FETCH_OBJ);

// s'il n'y a pas dévènement à venir alors on affichera ce message.
if (empty($affiche_eventf)) {
    $message = "Aucun évènement prévu pour le moment.";
}