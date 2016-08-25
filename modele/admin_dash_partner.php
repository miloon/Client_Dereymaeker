<?php
$requete = $dbh->prepare("SELECT id, nom, logohref, logosrc FROM partenaire ORDER BY id DESC;");
$requete->execute();

$affiche_partner= $requete->fetchAll(PDO::FETCH_OBJ);