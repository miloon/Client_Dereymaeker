<?php


/*
* PARTIE EVENEMENTS
* */

/*$requetefuture = $dbh->prepare("SELECT ladate, titre, description, lieu, DAY(ladate) AS jour, MONTH(ladate) AS mois, YEAR(ladate) AS annee, HOUR(ladate) AS heure, MINUTE(ladate) AS minute, SECOND(ladate) AS seconde FROM evenement ORDER BY ladate DESC LIMIT " . (($cPage - 1) * $perPage) . ",$perPage;");*/
$requetefuture = $dbh->prepare("SELECT ladate, titre, description, lieu, DAY(ladate) AS jour, MONTH(ladate) AS mois, YEAR(ladate) AS annee, HOUR(ladate) AS heure, MINUTE(ladate) AS minute, SECOND(ladate) AS seconde FROM evenement ORDER BY ladate ASC");
$requetefuture->execute();
$affiche_eventf = $requetefuture->fetchAll(PDO::FETCH_OBJ);

if(empty($affiche_eventf)){
    $message = "Aucun évènement à venir";
}


$requetepasse = $dbh->prepare("SELECT ladate, titre, description, lieu, DAY(ladate) AS jour, MONTH(ladate) AS mois, YEAR(ladate) AS annee, HOUR(ladate) AS heure, MINUTE(ladate) AS minute, SECOND(ladate) AS seconde FROM evenement ORDER BY ladate DESC");
$requetepasse->execute();
$affiche_eventp = $requetepasse->fetchAll(PDO::FETCH_OBJ);

if(empty($affiche_eventp)){
    $messagep = "Aucun évènement passé pour le moment. Le meilleur est à venir !";
}

$date = date("Y-m-d H:i:s", time());

