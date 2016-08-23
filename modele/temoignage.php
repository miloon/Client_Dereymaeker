<?php
if(!empty($_POST)) {

    $nom= htmlspecialchars(strip_tags(trim($_POST['nom'])),ENT_QUOTES);
    $texte= htmlspecialchars(strip_tags(trim($_POST['texte'])),ENT_QUOTES);

/*verification des entres de chaqu une des champs*/
    if(empty($_POST['age'])){
        $age = "";
    }elseif(!empty($_POST['age'])){
        $age = htmlspecialchars(strip_tags(trim($_POST['age'])),ENT_QUOTES);
    }

    if(empty($_POST['profession'])){
        $profession = "";
    }elseif(!empty($_POST['profession'])){
        $profession = htmlspecialchars(strip_tags(trim($_POST['profession'])),ENT_QUOTES);
    }

    if(empty($_POST['email'])){
        $email="";
    }elseif(!empty($_POST['email'])){
        $email = htmlspecialchars(strip_tags(trim($_POST['email'])),ENT_QUOTES);
    }

    $prepare = $connexion->prepare("INSERT INTO temoignage (nom, email, profession, age, texte)
  VALUES (:nom,:email,:profession,:age,:text);");

    $prepare->bindValue(":rid",$nom,PDO::PARAM_STR);
    $prepare->bindValue(":titre",$email,PDO::PARAM_STR);
    $prepare->bindValue(":ladesc",$profession,PDO::PARAM_STR);
    $prepare->bindValue(":an",$age,PDO::PARAM_STR);
    $prepare->bindValue(":text",$texte,PDO::PARAM_STR);

    $prepare->execute();


}