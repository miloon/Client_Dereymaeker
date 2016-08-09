<?php
// var_dump($_SESSION);

// accueil de l'admin
if(empty($_GET)){
    require_once "modele/admin_accueil.php";
    require_once "vue/admin_accueil.php";

// déconnexion
}elseif(isset($_GET['deco'])){
    require_once "modele/deco.php";
}

