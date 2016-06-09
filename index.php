<?php


// Lancement de la session
session_start();

//recu de connexion db
require_once "config.php";


//verification si connecter ou non

if (!isset($_SESSION["id"])|| $_SESSION["id"]!= session_id()) {
    require_once "controleur/routeur.php";
}else{
    require_once "controleur/routeuradmin.php";
}
