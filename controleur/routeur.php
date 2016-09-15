<?php
if(isset($_GET['deco'])){
    require_once "modele/deco.php";
}elseif(isset($_GET['connect'])){
    require_once "modele/connect.php";
    require_once "vue/connect.php";
}elseif(!isset($_GET['section'])) {
    include 'vue/accueil.php';
}else{
    $section = $_GET['section'];
    switch($section){
        case "conseil":
            include 'modele/conseil.php';
            include 'vue/conseil.php';
            break;
        case "creation":
            include 'modele/creation.php';
            include 'vue/creation.php';
            break;
        case "evenement":
            include 'modele/evenement.php';
            include 'vue/evenement.php';
            break;
        case "peinture":
            include 'modele/peinture.php';
            include 'vue/peinture.php';
            break;
        case "contact":
            include 'modele/contact.php';
            include 'vue/contact.php';
            break;
        case "mentions":
            include 'vue/mentions.php';
            break;
        default :
            include 'vue/accueil.php';

    }

}


