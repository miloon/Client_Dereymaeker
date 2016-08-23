<!DOCTYPE html>
<html lang="fr">

<?php include "admin_header.php"; ?>
<script>
    function confirmDelete(titre, id) {
        var question = confirm("Voulez-vous vraiment supprimer le témoignage de « " + titre + " »");
        if (question) {
            document.location.href = "?delete_evenement=" + id;
        }
    }
</script>
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
                    <p><a href="?nouvel_evenement" type="button" class="btn btn-default">Nouvel évènement à
                            insérer</a></p>
                    <table class="table table-striped">
                        <tr>
                            <th>Nom de l'évènement</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Adresse</th>
                            <th></th>
                            <th></th>
                        </tr>

                        <?php
                        foreach ($affiche_event as $event) {
                            ?>
                            <tr>
                                <td><?= $event->titre ?></td>
                                <td><?= $event->jour . "/" . strftime($event->mois) . "/" . $event->annee ?> - <?= $event->heure . ":" . $event->minute ?><br/><?= $event->titre ?></td>
                                <td><?= substr(nl2br($event->description), 0, 250) ?>...</td>
                                <td><?= $event->lieu ?></td>
                                <td><a href="?modif_evenement=<?= $event->id ?>"><img src="vue/img/modify.png"/></a></td>
                                <td><img onmouseover="this.style.cursor='pointer';" onclick='confirmDelete("<?= $event->titre ?>",<?= $event->id ?>)' src="vue/img/delete.png"/>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
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
