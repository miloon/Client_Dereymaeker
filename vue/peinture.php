<?php
include_once "header.php"
?>
<body>
<!--HEADER ROW-->
                        <?php include 'vue/menu.php' ?>
<!-- /HEADER ROW -->


<div class="container">
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Artiste peintre</h1>
            </div>
        </div>
    </div>

    <!--Carousel
    ==================================================-->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                <div class='carousel-outer'>
                    <!-- Wrapper for slides -->
                    <div class='carousel-inner'>

                        <?php
                        // on fait une variable égale à 1 pour pouvoir afficher la class "active" uniquement à la première image du carousel, sinon, le carousel fait de la merde et y'a plus rien qui marche.
                        $i = 1;
                        foreach ($affiche_peinture as $recbig) {

                            if($recbig->vendu){
                                $vendu = " <small>[vendu !]</small>";
                            }else{
                                $vendu ="";
                            }

                            ?>
                            <?php if ($i == 1): ?>
                                <div class='item active'>
                                    <img src='vue/img/peinture/<?= $recbig->imgsrc ?>' alt='<?= $recbig->nom ?>' title='<?= $recbig->nom ?>'/>
                                    <h3><?= $recbig->nom ?><?=$vendu?></h3>

                                </div>
                            <?php else: ?>
                                <div class='item'>
                                    <img src='vue/img/peinture/<?= $recbig->imgsrc ?>' alt='<?= $recbig->nom ?>' title='<?= $recbig->nom ?>'/>
                                    <h3><?= $recbig->nom ?><?=$vendu?></h3>
                                </div>
                            <?php endif; ?>

                            <?php
                            $i++;
                        }
                        ?>

                    </div>

                    <!-- Controls -->
                    <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                        <span class='glyphicon glyphicon-chevron-left'></span>
                    </a>
                    <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                        <span class='glyphicon glyphicon-chevron-right'></span>
                    </a>
                </div>

                <!-- Indicators -->
                <ol class='carousel-indicators mCustomScrollbar'>
                    <?php
                    // pour l'affichage de la class active
                    $i = 1;
                    // pour le numéro de slide dans data-slide-to (parce qu'il doit commencer à 0)
                    $y = 0;
                    foreach ($affiche_peinture as $rec) {
                        ?>
                        <?php if ($i == 1): ?>
                            <li data-target='#carousel-custom'
                                data-slide-to='<?= $y ?>'
                                class='active'>
                                <img src='vue/img/peinture/<?= $rec->imgsrc ?>'
                                     alt='<?= $rec->nom ?>'
                                />
                            </li>
                        <?php else: ?>
                            <li data-target='#carousel-custom'
                                data-slide-to='<?= $y ?>'>
                                <img src='vue/img/peinture/<?= $rec->imgsrc ?>'
                                     alt='<?= $rec->nom ?>'/>
                            </li>
                        <?php endif; ?>

                        <?php
                        $i++;
                        $y++;
                    }
                    ?>

                </ol>

            </div>
        </div>
    </div>
    <!-- /Carousel -->






    <!--Footer
    ==========================-->

    <?php
    include_once "footer.php"
    ?>

    <!--/.Footer-->

</body>
</html>