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
    $ext_fichier = strrchr($_FILES['oeuvre']['name'], ".");
    // on met l'extension en minuscule
    $ext_fichier = strtolower($ext_fichier);
    $imghref = $imgsrc = strtolower($_FILES['oeuvre']['name']);
    $imgtitle = htmlspecialchars(strip_tags(trim($_POST['titrephoto'])), ENT_QUOTES);
    $chemin = "vue/img/peinture/";

    /*
     * TEST
     */

    $taille_origine = getimagesize($chemin.$_FILES['oeuvre']['name']);
    $largeur_ori = $taille_origine[0];
    $hauteur_ori = $taille_origine[1];

    if ($hauteur_ori > 600){
        $largeur_fin = round(600*$largeur_ori/$hauteur_ori);
        $hauteur_fin=600;
    }else{
        $hauteur_fin = $hauteur_ori;
        $largeur_fin = $largeur_ori;
    }


    switch ($taille_origine['mime']){
        case "image/jpeg":
        case "image/pjpeg": // autre manière de nommer le jpg
            $nouvelles = imagecreatefromjpeg($chemin.$_FILES['oeuvre']['name']);
            break;
        case "image/png":
            $nouvelles = imagecreatefrompng($chemin.$_FILES['oeuvre']['name']);
            break;
        case "image/gif":
            $nouvelles = imagecreatefromgif($chemin.$_FILES['oeuvre']['name']);
            break;
    }

    $cree_nouvelle = imagecreatetruecolor($largeur_fin,$hauteur_fin );

    imagecopyresampled($cree_nouvelle,$nouvelles ,0 ,0 ,0 ,0 ,$largeur_fin ,$hauteur_fin ,$largeur_ori ,$hauteur_ori);

    /**
     *
     * AVANT DE CREER LA MINATURE FAUDRAIT QUE JE SUPPRIME L'ORIGINALE HISTOIRE DE LAISSER SUR LE SERVEUR QUE L'IMAGE AUX BONNES DIMENSIONS.
     *
     */

   /* switch ($taille_origine['mime']){
        case "image/jpeg":
        case "image/pjpeg": // autre manière de nommer le jpg

            // création physique de l'image
            imagejpeg($cree_nouvelle,$chemin.$_FILES['oeuvre']['name'], 80);
            break;
        case "image/png":
            $nouvelles = imagecreatefrompng($chemin.$_FILES['oeuvre']['name']);
            break;
        case "image/gif":
            $nouvelles = imagecreatefromgif($chemin.$_FILES['oeuvre']['name']);
            break;
    }*/



    $vendu = 0;
    try {
        // DEBUT IMAGES
        // on vérifie que l'extension soit valide grâce à notre tableau $ext (in_array(recherche, tableau)
        if (in_array($ext_fichier, $ext) && in_array($ext_fichier, $ext)) {
            // création d'un nom et remise de l'extension
            $nouveau_nomg = strtolower($_FILES['oeuvre']['name']);
            // on envoie le fichier temp vers le dossier choisi avec le nouveau nom
            if (@move_uploaded_file($_FILES['oeuvre']['tmp_name'], $chemin . $nouveau_nomg)) {
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