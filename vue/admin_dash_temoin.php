<!DOCTYPE html>
<html lang="fr">

<?php include "admin_header.php"; ?>

<body>

<div id="wrapper">

    <?php include "admin_menu.php"; ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?= $titre ?></h1>
                        <table class="table table-striped">
<tr><th>Nom</th><th>Témoignage</th><th>Modifier</th><th>Supprimer</th></tr>

                            <?php
                            foreach ($affiche_temoin as $tem) {
                                ?>
                                <tr>
                                    <td><?= $tem->nom ?></td>
                                    <td><?= substr(nl2br($tem->texte),0,250) ?>...</td>
                                    <td><a href="?modif_temoignage=<?= $tem->id ?>"><img src="vue/img/modify.png"/></a></td>
                                    <td><img src="vue/img/delete.png"/></td>
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
