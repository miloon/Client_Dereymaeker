<?php
// création d'une constante contenant le mail du destinataitre (nous)
define("MON_MAIL","");

// si on a cliqué sur envoyer
if(isset($_POST['lenom'])){
    // récupération des valeurs du formulaire dans des variables locales
    $lenom = $_POST['lenom'];
    $lobjet = $_POST['lobjet'];
    $letexte = $_POST['letexte'];

    // création du titre
    $letitre = "Vous avez reçu un message depuis votre site";

    // création de l'entête en y mettant le lien vers le mail de l'expéditeur
    $entete = "From: $lenom <$lemail> \r\n ".
        "Reply-To: $lenom <$lemail> \r\n".
        "X-Mailer: PHP/".phpversion();

    // on envoie le mail avec cette fonction simple, $verif_envoi contiendra true si le mail est envoyé, false s'il y a un problème
    $verif_envoi = mail(MON_MAIL, $letitre, $letexte, $entete);

    // si réussi
    if($verif_envoi){
        $message = "<h3>Message envoyé</h3>";
    }else{
        $message = "<h3>Erreur lors de l'envoi, veuillez <a href='#' onclick='history.go(-1);'>réessayer</a></h3>";
    }
}
?>

