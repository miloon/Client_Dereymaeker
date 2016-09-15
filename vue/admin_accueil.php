<!DOCTYPE html>
<html lang="fr">

<?php include "admin_header.php"; ?>
<!--je ferme la balise là ici au cas où vous souhaitier rajouter un truc (exemple : un fichier javascript) qui ne devrait pas être présent sur toutes les pages admin.-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>
<body>

<div id="wrapper">

    <?php include "admin_menu.php"; ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?= $titre ?></h1>


                    <?php
                    if (isset($message)) {
                        echo "<p>" . $message . "</p>";
                    }else{
                        echo "<h2>Prochain évènement :</h2>";
                    }
                    foreach ($affiche_eventf as $rec) {
                        ?>
                        <div class="blog-post">
                            <p><span style="color:#FF6B20;"><?php if (($rec->ladatefin) != NULL) {
                                    echo "Du " . date("d/m/Y", strtotime($rec->ladate)) . " au " . date("d/m/Y", strtotime($rec->ladatefin));
                                } else {
                                    echo "Le " . date("d/m/Y à H:i", strtotime($rec->ladate));
                                }
                                ?> - <?= $rec->titre ?></span><br/><?= $rec->lieu ?></p>
                        </div>
                        <?php
                    }
                    ?>
                    <p><a href="mailto:webdevcf2m@gmail.com?Subject=Sophie%20demande%20de%20l%20aide"><img src="vue/img/contactenous.jpg" alt="contacte-nous"/></a></p>
                    <button href="?nouvelle_creation" type="button" class="btn btn-default btn-admin">
                        <p class="glyphicon glyphicon-pencil" aria-hidden="true"></p><br> Ajouter une création
                    </button>
                    <button href="?nouvelle_peinture" type="button" class="btn btn-default btn-admin">
                        <p class="glyphicon glyphicon-picture" aria-hidden="true"></p><br> Ajouter une peinture
                    </button>
                    <button href="?nouvel_evenement" type="button" class="btn btn-default btn-admin">
                        <p class="glyphicon glyphicon-calendar" aria-hidden="true"></p><br> Ajouter un évènement
                    </button>
                    <button href="?nouveau_temoignage" type="button" class="btn btn-default btn-admin">
                        <p class="glyphicon glyphicon-comment" aria-hidden="true"></p><br> Ajouter un témoignage
                    </button>
                    <button href="?nouveau_partner" type="button" class="btn btn-default btn-admin">
                        <p class="glyphicon glyphicon-briefcase" aria-hidden="true"></p><br> Ajouter un partenaire
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="vue/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vue/js/bootstrap.min.js"></script>

</body>
</html>
