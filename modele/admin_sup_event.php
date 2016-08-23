<?php
try {
    $eventsupprime = $dbh->exec("DELETE FROM evenement WHERE id= $sup;");
    header("Location: ?evenement");
}catch (Exception $e) {
    echo "Erreur :".$e->getMessage();
    die();
}