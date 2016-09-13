<?php
try {
    $eventsupprime = $dbh->exec("DELETE FROM peinture WHERE id= $sup;");
    header("Location: ?peinture");
}catch (Exception $e) {
    echo "Erreur :".$e->getMessage();
    die();
}