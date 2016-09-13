<?php
try {
    $eventsupprime = $dbh->exec("DELETE FROM creation WHERE id= $sup;");
    header("Location: ?creation");
}catch (Exception $e) {
    echo "Erreur :".$e->getMessage();
    die();
}