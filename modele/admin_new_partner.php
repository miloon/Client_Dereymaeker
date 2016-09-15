<?php
require_once "modele/image.class.php";
require_once "modele/imageManager.class.php";

$manager = new imageManager($dbh);
$chemin="vue/img/partenaire/originales/";
$chemin2="vue/img/partenaire/";


if (empty($_POST['inserer'])) {
    $affiche_insertion = true;
    $affiche_success = false;

} else { // le formulaire est envoyé
    $affiche_insertion = false;
    $chemin3=$_POST['url'];
    $titre=$_POST['titrephoto'];
    $objet_envoye = new image($_FILES['oeuvre'] , $titre, $chemin2, $chemin, $chemin3);
    $manager->ajouterImagePartner($objet_envoye);

    if($manager) {
        $affiche_success = true;
    }else{
        echo "erreur";
    }

}