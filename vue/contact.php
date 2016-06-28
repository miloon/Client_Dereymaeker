<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sophie Dereymaeker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap -->
    <link href="vue/css/bootstrap.css" rel="stylesheet">
    <link href="vue/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="vue/css/style.css" rel="stylesheet">

    <!--Font-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet'
          type='text/css'>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

    <!-- SCRIPT
============================================================-->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="vue/js/bootstrap.min.js"></script>

</head>
<body>
<?php
include ("menu.php");

        if(isset($message)){
            echo $message;
        }else{
            ?>

<form method=POST action="contact.php">
      <input name="lenom" type="text" class="form" placeholder="Votre nom" /><br/>
      <label for="lobjet">Veuillez choisir l'objet de votre message</label>
      <select name"lobjet">
        <option value"conseillere en image">conseillère en image</option>
        <option value"peintures">peintures</option>
        <option value"bijoux et customisation">bijoux et customisation</option>
        <option value"devis">devis</option>
        <option value"apporter un temoignage">apporter un témoignage</option>
        <option value"autres">autres</option>
    </select><br/>
      <textarea name="letexte" class="form" placeholder="Votre message"></textarea><br/>
      <input type="submit" value="Envoyer"/>
                 </form>

 <?php
        }
?>



