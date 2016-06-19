<?php
/*
* PARTIE PAGINATION
* */
$requetepagination = $dbh->query("SELECT COUNT(id) as nbart FROM evenement");

$data = $requetepagination->fetch(PDO::FETCH_ASSOC);

$nbart = $data['nbart'];
// par page
$perPage = 2;
$nbPage = ceil($nbart / $perPage);

if (isset($_GET['p']) && $_GET['p'] > 0 && $_GET['p'] <= $nbPage) {
$cPage = $_GET['p'];
} else {
$cPage = 1;
}


for ($i = 1; $i <= $nbPage; $i++) {
if ($i == $cPage) {
echo " $i ";
} else {
echo "<a href='?section=peinture?p=$i'>$i</a>";
}
}


/*
* PARTIE EVENEMENTS
* */

/*$requetefuture = $dbh->prepare("SELECT ladate, titre, description, lieu, DAY(ladate) AS jour, MONTH(ladate) AS mois, YEAR(ladate) AS annee, HOUR(ladate) AS heure, MINUTE(ladate) AS minute, SECOND(ladate) AS seconde FROM evenement ORDER BY ladate DESC LIMIT " . (($cPage - 1) * $perPage) . ",$perPage;");*/
$requetefuture = $dbh->prepare("SELECT ladate, titre, description, lieu, DAY(ladate) AS jour, MONTH(ladate) AS mois, YEAR(ladate) AS annee, HOUR(ladate) AS heure, MINUTE(ladate) AS minute, SECOND(ladate) AS seconde FROM evenement ORDER BY ladate ASC");
$requetefuture->execute();
$affiche_eventf = $requetefuture->fetchAll(PDO::FETCH_OBJ);


$requetepasse = $dbh->prepare("SELECT ladate, titre, description, lieu, DAY(ladate) AS jour, MONTH(ladate) AS mois, YEAR(ladate) AS annee, HOUR(ladate) AS heure, MINUTE(ladate) AS minute, SECOND(ladate) AS seconde FROM evenement ORDER BY ladate DESC");
$requetepasse->execute();
$affiche_eventp = $requetepasse->fetchAll(PDO::FETCH_OBJ);


$date = date("Y-m-d H:i:s", time());

