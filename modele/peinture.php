<?php

$requete = $dbh->prepare("SELECT * FROM peinture;");
$requete->execute();


$affiche_creation = $requete->fetchAll(PDO::FETCH_OBJ);

