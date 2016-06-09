<?php


// Lancement de la session
session_start();

//recu de connexion db
require_once "config.php";
require_once "modele/db.php";

//verification si connecter ou non

if (!isset($_SESSION["id"])|| $_SESSION["id"]!= session_id()) {
    require_once "controleur/routuer.php";
}else{
    require_once "controleur/routeuradmin.php";
}
