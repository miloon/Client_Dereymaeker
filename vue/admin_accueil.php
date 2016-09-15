<!DOCTYPE html>
<html lang="fr">

<?php include "admin_header.php"; ?>
<!--je ferme la balise là ici au cas où vous souhaitier rajouter un truc (exemple : un fichier javascript) qui ne devrait pas être présent sur toutes les pages admin.-->
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
                        echo "<h2>Voici les évènements à venir :</h2>";
                    }
                    foreach ($affiche_eventf as $rec) {
                        ?>
                        <div class="blog-post">
                            <p><?php if (($rec->ladatefin) != NULL) {
                                    echo "Du " . date("d/m/Y", strtotime($rec->ladate)) . " au " . date("d/m/Y", strtotime($rec->ladatefin));
                                } else {
                                    echo "Le " . date("d/m/Y à H:i", strtotime($rec->ladate));
                                }
                                ?> - <?= $rec->titre ?></p>
                        </div>
                        <?php
                    }
                    ?>


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
