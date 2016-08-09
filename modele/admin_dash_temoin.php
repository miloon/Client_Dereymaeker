<?php

$requete = $dbh->prepare("SELECT id, nom, texte FROM temoignage ORDER BY id DESC;");
$requete->execute();

$affiche_temoin = $requete->fetchAll(PDO::FETCH_OBJ);