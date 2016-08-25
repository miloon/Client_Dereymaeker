<?php
/*
* PARTIE EVENEMENTS
* */

// date de référence : la date du jour en cours d'aujourd'hui de maintenant right now
$date = date("Y-m-d H:i:s", time());

$requetefuture = $dbh->prepare("SELECT ladate, titre, description, lieu, DAY(ladate) AS jour, MONTH(ladate) AS mois, YEAR(ladate) AS annee, HOUR(ladate) AS heure, MINUTE(ladate) AS minute, SECOND(ladate) AS seconde
FROM evenement
WHERE ladate > LOCALTIMESTAMP()
ORDER BY ladate ASC
;");
$requetefuture->execute();
$affiche_eventf = $requetefuture->fetchAll(PDO::FETCH_OBJ);


if (empty($affiche_eventf)) {
    $message = "Aucun évènement prévu pour le moment.";
}

$requetepasse = $dbh->prepare("SELECT ladate, titre, description, lieu, DAY(ladate) AS jour, MONTH(ladate) AS mois, YEAR(ladate) AS annee, HOUR(ladate) AS heure, MINUTE(ladate) AS minute, SECOND(ladate) AS seconde 
FROM evenement 
WHERE ladate < LOCALTIMESTAMP()
ORDER BY ladate DESC LIMIT 5");
$requetepasse->execute();
$affiche_eventp = $requetepasse->fetchAll(PDO::FETCH_OBJ);

if (empty($affiche_eventp)) {
    $messagep = "Aucun évènement passé pour le moment. Le meilleur est à venir !";
}

