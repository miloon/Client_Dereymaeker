<?php



if (empty($_POST['edition'])) { // si le formulaire d'édition est vide
    $affiche_modif = true;
    $affiche_success = false;

    $requete = $dbh->prepare("SELECT id, nom, description, imgsrc , imghref, vendu FROM creation ORDER BY id DESC;");
    $requete->execute();

    $affiche_creation= $requete->fetchAll(PDO::FETCH_OBJ);


} else { // le formulaire est envoyé

    $affiche_modif = false;



    try {
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->beginTransaction();


        foreach($_POST['vendu'] as $idvendu) {
            $prepare = $dbh->prepare("
        UPDATE creation
        SET vendu = :vendu
        WHERE id=$idpartner");

            $prepare->bindValue(":lenom", $lenom, PDO::PARAM_STR);
            $prepare->bindValue(":url", $url, PDO::PARAM_STR);
            $prepare->execute();
            $dbh->commit();
        }
        $affiche_success = true;

    } catch (Exception $e) {
        $dbh->rollBack();
        echo "Erreur : " . $e->getMessage();
    }
}
// à remplir en fonction de la page que tu fais
$titre = "Création";

