<?php
try {
    $temoignagesupprime = $dbh->exec("DELETE FROM temoignage WHERE id= $sup;");
    header("Location: ?admindashboard");
}catch (Exception $e) {
    echo "Erreur :".$e->getMessage();
    die();
}