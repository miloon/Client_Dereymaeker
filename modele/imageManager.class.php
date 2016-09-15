<?php

/**
 * Created by PhpStorm.
 * User: webform
 * Date: 19/05/2016
 * Time: 10:08
 */
class imageManager
{
    private $dbh;

    public function __construct(PDO $thePDO)
    {
        $this->dbh = $thePDO;
    }


    public function ajouterImage(image $monImage)
    {
        // requête préparée
        $req = $this->dbh->prepare("INSERT INTO creation (nom,imghref,imgsrc) VALUES (?,?,?);");
        // attribution des valeurs
        $req->bindValue(1, $monImage->getName(), PDO::PARAM_STR);
        $req->bindValue(2, $monImage->recupURL(), PDO::PARAM_STR);
        $req->bindValue(3, $monImage->recupURL(), PDO::PARAM_STR);
        $bon = $req->execute();

        if ($bon) {
                $this->redimension($monImage->prendreUrlFichier(),$monImage->getChemin2());

        }else{
            echo "erreur";
        }
    }

    public function redimension($source,$destination, $hauteur_max=600, $qualite=80)
    {
        // on récupère des infos sur l'image d'origine (taille principalement)
        $taille_origine = getimagesize($source);
        $largeur_ori = $taille_origine[0];
        $hauteur_ori = $taille_origine[1];

        // si l'image a une hauteur plus grande que 600
        if ($hauteur_ori > $hauteur_max) {
            $largeur_fin = ($hauteur_max * $largeur_ori) / $hauteur_ori;
            $hauteur_fin = $hauteur_max;
        }else{
            $largeur_fin = $largeur_ori;
            $hauteur_fin = $hauteur_ori;
        }

        // on crée une image temporaire vierge en partant de l'originale en utilisant le type de l'image plutôt que son extension (voir Envoi.class.php)
        switch ($taille_origine['mime']){
            case "image/jpeg":
            case "image/pjpeg": // autre manière de nommer le jpg
                $nouvelles = imagecreatefromjpeg($source);
                break;
            case "image/png":
                $nouvelles = imagecreatefrompng($source);
                break;
            case "image/gif":
                $nouvelles = imagecreatefromgif($source);
                break;
        }

        // création de l'image vierge à la bonne taille (temporaire)
        $cree_nouvelle = imagecreatetruecolor($largeur_fin,$hauteur_fin );

        // on copie l'ancienne image dans la nouvelle (temporaire)
        imagecopyresampled($cree_nouvelle,$nouvelles ,0 ,0 ,0 ,0 ,$largeur_fin ,$hauteur_fin ,$largeur_ori , $hauteur_ori);

        // récupération du nom de fichier sans dossier
        $nom = strrchr($source, "/" );

        switch ($taille_origine['mime']){
            case "image/jpeg":
            case "image/pjpeg": // autre manière de nommer le jpg

                // création physique de l'image
                imagejpeg($cree_nouvelle,$destination.$nom, $qualite);
                break;
            case "image/png":
                $nouvelles = imagecreatefrompng($source);
                break;
            case "image/gif":
                $nouvelles = imagecreatefromgif($source);
                break;
        }
    }

}