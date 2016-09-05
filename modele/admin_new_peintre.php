<?php
/*
 * 
 * AJOUTER LE SYSTEME DE MINIATURE
 * 
 * */
$ext = array('.jpg', '.jpeg', '.gif', '.png');
if (empty($_POST['inserer'])) {
    // création d'une variable pour afficher le formulaire
    $affiche_insertion = true;
    $affiche_success = false;
} else { // le formulaire est envoyé
    $affiche_insertion = false;
    // on prend le dernier "." de la chaine comme séparateur, et on garde le contenu à droite du séparateur strrchr( $chaine, $separateur)
    $ext_fichier = strrchr($_FILES['photo']['name'], ".");
    // on met l'extension en minuscule
    $ext_fichier = strtolower($ext_fichier);
    $imghref = $imgsrc = strtolower($_FILES['photo']['name']);
    $imgtitle = htmlspecialchars(strip_tags(trim($_POST['titrephoto'])), ENT_QUOTES);
    $chemin = "vue/img/peinture/";
    $vendu = 0;
    try {
        // DEBUT IMAGES
        // on vérifie que l'extension soit valide grâce à notre tableau $ext (in_array(recherche, tableau)
        if (in_array($ext_fichier, $ext) && in_array($ext_fichier, $ext)) {
            // création d'un nom et remise de l'extension
            $nouveau_nomg = strtolower($_FILES['photo']['name']);
            // on envoie le fichier temp vers le dossier choisi avec le nouveau nom
            if (@move_uploaded_file($_FILES['photo']['tmp_name'], $chemin . $nouveau_nomg)) {
                $message = "<h2>L'upload s'est bien passé !</h2></p>";
            } else {
                $message = "Erreur lors de l'envoi de l'image";
            }
        } else {
            echo "<h1>Format de l'image non pris en charge</h1>";
            exit();
        }
        // FIN IMAGES
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->beginTransaction();
        $prepare = $dbh->prepare("
        INSERT INTO `peinture`( `nom`, `imghref`, `imgsrc`, `vendu`) VALUES (:nom,:imghref,:imgsrc,:vendu)
        ");
        $prepare->bindValue(":nom", $imgtitle, PDO::PARAM_STR);
        $prepare->bindValue(":imghref", $imghref, PDO::PARAM_STR);
        $prepare->bindValue(":imgsrc", $imgsrc, PDO::PARAM_STR);
        $prepare->bindValue(":vendu", $vendu, PDO::PARAM_INT);
        $prepare->execute();
        $dbh->commit();
        $affiche_success = true;
    } catch (Exception $e) {
        $dbh->rollBack();
        echo "Erreur : " . $e->getMessage();
    }
}