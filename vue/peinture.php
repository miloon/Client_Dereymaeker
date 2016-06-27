<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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
                                    <img src='vue/img/peinture/<?= $recbig->imgsrc ?>' alt='<?= $recbig->nom ?>'/>
                                    <h3><?= $recbig->nom ?><?=$vendu?></h3>
                                    <p><?= $recbig->description ?></p>
                                </div>
                            <?php else: ?>
                                <div class='item'>
                                    <img src='vue/img/peinture/<?= $recbig->imgsrc ?>' alt='<?= $recbig->nom ?>'/>
                                    <h3><?= $recbig->nom ?><?=$vendu?></h3>
                                    <p><?= $recbig->description ?></p>
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

    <footer>
        <div class="container">
            <div class="row">
                <div class="span6"> Sophie Dereymaeker <br/>
                    <small> Créatrice de styles</small>
                </div>
                <div class="span6">
                    <div class="social pull-right">
                        <a href="#"><img src="vue/img/social/dribbble.png" alt=""></a>
                        <a href="#"><img src="vue/img/social/twitter.png" alt=""></a>
                        <a href="#"><img src="vue/img/social/dribbble.png" alt=""></a>
                        <a href="#"><img src="vue/img/social/rss.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--/.Footer-->

</body>
</html>