<?php
include_once "header.php"
?>
<body>
<?php include("menu.php"); ?>
<div class="container">
    <!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>
                    Contact
                </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="span12">

                <?php


                if (isset($message)) {
                    echo $message;
                } else {
                    ?>

                    <form class="well" method=POST action="contact.php">
                        <div class="form-group">
                            <label>Votre nom</label>
                            <input name="lenom" type="text" placeholder="Votre nom" required/>
                        </div>
                        <div class="form-group">
                            <label>Votre e-mail</label>
                            <input name="lemail" type="text" placeholder="Votre email" required/>
                        </div>
                        <div class="form-group">
                            <label>Votre profession (optionnel)</label>
                            <input name="profession" type="text" placeholder="Votre profession"/>
                        </div>
                        <div class="form-group">
                            <label for="lobjet">Veuillez choisir l'objet de votre message</label>
                            <select name="lobjet">
                            <option value="conseillere en image">conseillère en image</option>
                            <option value="peintures">peintures</option>
                            <option value="bijoux et customisation">bijoux et customisation</option>
                            <option value="devis">devis</option>
                            <option value="apporter un temoignage">apporter un témoignage</option>
                            <option value="autres">autres</option>
                            </select></div>
                        <textarea name="letexte" class="form" placeholder="Votre message"></textarea><br/>
                        <input type="submit" value="Envoyer"/>
                    </form>

                    <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    include_once "footer.php"
    ?>

</body>
</html>


