<!DOCTYPE html>
<html lang="fr">

<?php include "admin_header.php"; ?>

<script>
    function confirmDelete(nom, id) {
        var question = confirm("Voulez-vous vraiment supprimer la photo « " + nom + " »");
        if (question) {
            document.location.href = "?delete_partner=" + id;
        }
    }
</script>
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

                    <p><a href="?nouvelle_creation" type="button" class="btn btn-default">Nouvelle création à
                            insérer</a></p>


                        <?php
                        foreach ($affiche_creation as $creat) {
                            ?>
                         <div>
                             <img src='vue/img/creation/<?= $creat->imgsrc ?>' alt='<?= $creat->nom ?>' title='<?= $creat->nom ?>' height="100" width="100"/>


                             <img onmouseover="this.style.cursor='pointer';" onclick='confirmDelete("<?= $creat->nom ?>",<?= $creat->id ?>)' alt="supprimer" title="supprimer" src="vue/img/delete.png"/>
                         </div>
                            <?php


                            $vendu=$creat->vendu;
                            $vend="";
                            echo $vendu;

                            if($vendu == 1){

                                $vend="checked";

                            }elseif($vendu == 0){

                                $vend="";

                            }
                            ?>
                            <form>

                                    <label>vendu</label><input type="checkbox" name="vendu" <?= $vend ?>/>

                                </form>
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
