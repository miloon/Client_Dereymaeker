<?php
// var_dump($_SESSION);
$titre = "";
// accueil de l'admin
if(empty($_GET)){
    $titre = "Menu d'administration";
    require_once "modele/admin_accueil.php";
    require_once "vue/admin_accueil.php";

// déconnexion
}elseif(isset($_GET['deco'])){
    require_once "modele/deco.php";

    
}elseif(isset($_GET['dash_evenement'])){
    $titre = "Menu d'administration de mes évènements";
    require_once "modele/admin_dash_event.php";
    require_once "vue/admin_dash_event.php";
}elseif(isset($_GET['dash_citation'])){
    $titre = "Menu d'administration des citations";
    require_once "modele/admin_dash_citation.php";
    require_once "vue/admin_dash_citation.php";
}elseif(isset($_GET['dash_creation'])){
    $titre = "Menu d'administration de mes créations";
    require_once "modele/admin_dash_creation.php";
    require_once "vue/admin_dash_creation.php";
}elseif(isset($_GET['dash_peinture'])){
    $titre = "Menu d'administration de mes peintures";
    require_once "modele/admin_dash_peintre.php";
    require_once "vue/admin_dash_peintre.php";
}elseif(isset($_GET['dash_partner'])){
    $titre = "Menu d'administration de mes partenaires";
    require_once "modele/admin_dash_partner.php";
    require_once "vue/admin_dash_partner.php";
}elseif(isset($_GET['dash_temoignage'])){
    $titre = "Menu d'administration des témoignages";
    require_once "modele/admin_dash_temoin.php";
    require_once "vue/admin_dash_temoin.php";
}

elseif(isset($_GET['modif_evenement'])){
    $titre = "Menu d'administration de mes évènements";
    require_once "modele/admin_modif_event.php";
    require_once "vue/admin_modif_event.php";
}elseif(isset($_GET['modif_citation'])){
    $titre = "Menu d'administration des citations";
    require_once "modele/admin_modif_citation.php";
    require_once "vue/admin_modif_citation.php";
}elseif(isset($_GET['modif_creation'])){
    $titre = "Menu d'administration de mes créations";
    require_once "modele/admin_modif_creation.php";
    require_once "vue/admin_modif_creation.php";
}elseif(isset($_GET['modif_peinture'])){
    $titre = "Menu d'administration de mes peintures";
    require_once "modele/admin_modif_peintre.php";
    require_once "vue/admin_modif_peintre.php";
}elseif(isset($_GET['modif_partner'])){
    $titre = "Menu d'administration de mes partenaires";
    require_once "modele/admin_modif_partner.php";
    require_once "vue/admin_modif_partner.php";
}elseif(isset($_GET['modif_temoignage'])){
    $titre = "Menu d'administration des témoignages";
    require_once "modele/admin_modif_temoin.php";
    require_once "vue/admin_modif_temoin.php";
}

elseif(isset($_GET['nveau_evenement'])){
    $titre = "Insérer un nouvel évènement";
    require_once "modele/admin_new_event.php";
    require_once "vue/admin_new_event.php";
}elseif(isset($_GET['nveau_citation'])){
    $titre = "Insérer une nouvelle citation";
    require_once "modele/admin_new_citation.php";
    require_once "vue/admin_new_citation.php";
}elseif(isset($_GET['nveau_creation'])){
    $titre = "Insérer une nouvelle création";
    require_once "modele/admin_new_creation.php";
    require_once "vue/admin_new_creation.php";
}elseif(isset($_GET['nveau_peinture'])){
    $titre = "Insérer une nouvelle peinture";
    require_once "modele/admin_new_peintre.php";
    require_once "vue/admin_new_peintre.php";
}elseif(isset($_GET['nveau_partner'])){
    $titre = "Insérer un nouveau partenaire";
    require_once "modele/admin_new_partner.php";
    require_once "vue/admin_new_partner.php";
}elseif(isset($_GET['nveau_temoignage'])){
    $titre = "Insérer un nouveau témoignage";
    require_once "modele/admin_new_temoin.php";
    require_once "vue/admin_new_temoin.php";
}




else{
    $titre = "Menu d'administration";
    require_once "modele/admin_accueil.php";
    require_once "vue/admin_accueil.php";
}

