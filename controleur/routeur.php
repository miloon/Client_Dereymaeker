
<?php

if(isset($_GET['deco'])){
    require_once "deco.php";

}elseif($_GET['connect']){
    require_once "connect";
}



elseif(!isset($_GET['section'])) {
    include 'accueil.php';
}else{
    $section = $_GET['section'];
    switch($section){
        case "conseillere_en_image":
            include 'conseillere_en_image.php';
            break;
        case "creation":
            include 'creation.php';
            break;
        case "peinture":
            include 'peinture.php';
            break;
        case "contact":
            include 'contact.php';
            break;


        default :
            include 'accueil.php';
    }

}


