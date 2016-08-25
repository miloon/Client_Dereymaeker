<?php
try {
    $partnersup = $dbh->exec("DELETE FROM partenaire WHERE id= $sup;");
    header("Location: ?partner");
}catch (Exception $e) {
    echo "Erreur :".$e->getMessage();
    die();
}