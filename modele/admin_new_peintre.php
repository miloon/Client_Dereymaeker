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
    $ext_fichierp = strrchr($_FILES['photopetite']['name'], ".");
    // on met l'extension en minuscule
    $ext_fichierp = strtolower($ext_fichierp);
    // on prend le dernier "." de la chaine comme séparateur, et on garde le contenu à droite du séparateur strrchr( $chaine, $separateur)
    $ext_fichierg = strrchr($_FILES['photogrande']['name'], ".");
    // on met l'extension en minuscule
    $ext_fichierg = strtolower($ext_fichierg);


    $imgsrc = strtolower($_FILES['photogrande']['name']);
    $imgtitle = htmlspecialchars(strip_tags(trim($_POST['nom'])), ENT_QUOTES);

    list($cat_id, $catlurl) = explode("-", $_POST['data'], 2);
    $chemingrande = "vue/img/peinture/";
    $cheminpetite = "vue/img/peinture/";

    $vendu = 0;

    try {
        // DEBUT IMAGES



        // on vérifie que l'extension soit valide grâce à notre tableau $ext (in_array(recherche, tableau)
        if (in_array($ext_fichierp, $ext) && in_array($ext_fichierg, $ext)) {
            // création d'un nom et remise de l'extension
            $nouveau_nomg = strtolower($_FILES['photogrande']['name']);
            $nouveau_nomp = strtolower($_FILES['photopetite']['name']);

            // on envoie le fichier temp vers le dossier choisi avec le nouveau nom
            if (@move_uploaded_file($_FILES['photogrande']['tmp_name'], $chemingrande . $nouveau_nomg) && @move_uploaded_file($_FILES['photopetite']['tmp_name'], $cheminpetite . $nouveau_nomp)) {
                $message = "<h2>L'upload s'est bien passé !</h2></p>";
            } else {
                $message = "Erreur lors de l'envoi de l'image";
            }

        } else {
            echo "<h1>Format de l'image non pris en charge</h1>";
            exit();
        }
        // FIN IMAGES




        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->beginTransaction();

        $prepare = $connexion->prepare("
        INSERT INTO `peinture`( `nom`, `imghref`, `imgsrc`, `vendu`) VALUES (:nom,:description,:imghref,:imgsrc,:vendu)
        ");

        $prepare->bindValue(":nom", $imgtitle, PDO::PARAM_STR);
        $prepare->bindValue(":imghref", $imgdesc, PDO::PARAM_STR);
        $prepare->bindValue(":imgsrc", $imgdesc, PDO::PARAM_STR);
        $prepare->bindValue(":vendu", $vendu, PDO::PARAM_INT);


        $prepare->execute();

        $connexion->commit();



        $affiche_success = true;
    } catch (Exception $e) {
        $connexion->rollBack();
        echo "Erreur : " . $e->getMessage();
    }

}