<?php
include_once "header.php"
?>
<body>
<div class="container" id="logorappel">
    <!--HEADER ROW-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Connexion au <br>panneau d'administration <br>du site !</h1>
            </div>
        </div>
    </div>
    <!-- /HEADER ROW -->
    <div class="span12">
        <div class="col-sm-6">
            <form class="well" class="form" method="post" action="">
                <input type="text" name="lelogin" placeholder="Mon identifiant" required><br/>
                <input type="password" name="lepass" placeholder="Mon mot de passe" required><br/>
                <input type="submit" class="submit" value="Se connecter">
            </form>
        </div>
    </div>
</div>
</body>
</html>