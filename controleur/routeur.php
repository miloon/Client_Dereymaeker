
<?php

if(isset($_GET['deco'])){
    require_once "modele/deco.php";

}elseif($_GET['connect']){
    require_once "modele/connect";
    require_once "vue/connect";

}



elseif(!isset($_GET['section'])) {
    include 'modele/accueil.php';
    include 'vue/accueil.php';
}else{
    $section = $_GET['section'];
    switch($section){
        case "conseillere_en_image":
            include 'modele/conseillere_en_image.php';
            include 'vue/conseillere_en_image.php';

            break;
        case "creation":
            include 'modele/creation.php';
            include 'vue/creation.php';

            break;
        case "peinture":
            include 'modele/peinture.php';
            include 'vue/peinture.php';

            break;
        case "contact":
            include 'modele/contact.php';
            include 'vue/contact.php';

            break;


        default :
            include 'modele/accueil.php';
            include 'vue/accueil.php';

    }

}


