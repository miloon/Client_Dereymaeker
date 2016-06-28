<?php
include_once "header.php"
?>
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


<?php
include_once "footer.php"
?>

</body>
</html>


