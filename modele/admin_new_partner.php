<?php
if (empty($_POST['inserer'])) {
    $affiche_insertion = true;
    $affiche_success = false;
} else { // le formulaire est envoyé
    $affiche_insertion = false;
    $lenom = htmlspecialchars(strip_tags(trim($_POST['lenom'])), ENT_QUOTES);
    $url = htmlspecialchars(strip_tags(trim($_POST['url'])), ENT_QUOTES);

    try {

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->beginTransaction();

        $prepare = $dbh->prepare("
        INSERT INTO partenaire (`nom`, `logohref`)
        VALUES (:lenom,:url);
        ");

        $prepare->bindValue(":lenom", $lenom, PDO::PARAM_STR);
        $prepare->bindValue(":url", $url, PDO::PARAM_STR);


        $prepare->execute();

        $dbh->commit();

        $affiche_success = true;
    } catch (Exception $e) {
        $dbh->rollBack();
        echo "Erreur : " . $e->getMessage();
    }
}