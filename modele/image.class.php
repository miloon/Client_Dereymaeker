<?php

/**
 * Created by PhpStorm.
 * User: webform
 * Date: 19/05/2016
 * Time: 10:08
 */
class image
{
    // attributs
    protected $titre;
    protected $name;
    protected $tmp_name;
    protected $ext_valides;
    protected $chemin;
    protected $ext_fichier;
    protected $urlFichier;
    protected $chemin2;
    protected $chemin3;

    // constructeur
    public function __construct(Array $file, $titre, $chemin2, $chemin, $chemin3, Array $ext_valides = ['.jpg','.jpeg'] )
    {
        $this->setTitre($titre);
        $this->setChemin2($chemin2);
        $this->setChemin3($chemin3);
        $this->setChemin($chemin);
        $this->setName($file['name']);
        $this->setTmpName($file['tmp_name']);
        $this->setExtValides($ext_valides);
        $this->setExtFichier($this->name);
        $this->envoyerFichier();

    }

    // méthodes "actions"

    // affichage du chemin du fichier uploadé

    public function prendreUrlFichier()
    {
        return $this->chemin.$this->urlFichier;
    }

    public function recupURL()
    {
        return $this->urlFichier;
    }

    // envoi du fichier
    protected function envoyerFichier(){
        if($this->verifierExtension()){
            $this->urlFichier = $this->creeNom();

            if(@move_uploaded_file($this->tmp_name, $this->chemin.$this->urlFichier )){
                return true;
            }else{
                echo "Echec lors du tranfert";
            }

        }else{
            echo "Extension non valide !";
        }
    }

    // vérification extension
    protected function verifierExtension(){
        if(in_array($this->ext_fichier,$this->ext_valides )){
            return true;
        }else{
            return false;
        }
    }

    // création du nouveau nom
    protected function creeNom(){

        $sortie= mt_rand(1000,9999);
        $sortie.= $this->ext_fichier;
        return $sortie;

    }

    // setters
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {

        $this->name = htmlspecialchars(strip_tags($name),ENT_QUOTES);
    }

    public function setExtFichier($nom_fichier)
    {
        $ext_fichier = strrchr($nom_fichier,"." );
        $ext_fichier = strtolower($ext_fichier);
        $this->ext_fichier = $ext_fichier;
    }

    public function setTmpName($tmp_name)
    {
        $this->tmp_name = $tmp_name;
    }

    public function setExtValides($ext_valides)
    {
        $this->ext_valides = $ext_valides;
    }

    public function setChemin($chemin)
    {
        $this->chemin = $chemin;
    }


    public function getChemin2()
    {
        return $this->chemin2;
    }
    public function setChemin2($chemin2)
    {
        $this->chemin2 = $chemin2;
    }

    public function getChemin3()
    {
        return $this->chemin3;
    }
    public function setChemin3($chemin3)
    {
        $this->chemin3 = $chemin3;
    }

    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

}