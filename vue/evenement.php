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
                <h1>Journal d'évènements</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="span9">
                <!--Blog Post-->

                <?php

                foreach ($affiche_eventf as $rec) {

                    if (($rec->ladate) > $date) {

                        ?>

                        <div class="blog-post">
                            <h2> <?= $rec->jour . "/" . strftime($rec->mois) . "/" . $rec->annee ?>
                                - <?= $rec->titre ?> </h2>
                            <p> <?= nl2br($rec->description) ?></p>
                            <div class="postmetadata">
                                <ul>
                                    <li>
                                        <i class="icon-bookmark"></i><?= $rec->lieu ?>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                <!--/.Blog Post-->

                <!--Pagination-->


                <!--/.Pagination-->
            </div>


            <div class="span3">
                <div class="side-bar">
                    <h3> Evènements passés </h3>
                    <ul class="recent-post">
                        <?php
                        foreach ($affiche_eventp as $rec) {
                            if (($rec->ladate) < $date) { ?>

                                <li><a href=""><strong><?= $rec->titre ?></strong></a>
                                    <small><i class="icon-bookmark"></i><?= $rec->lieu ?><br/><i
                                            class="icon-calendar"></i> <?= $rec->jour . "/" . strftime($rec->mois) . "/" . $rec->annee ?>
                                    </small>
                                </li>
                                <?php
                            }
                        }
                        ?>


                    </ul>


                </div>


            </div>


            <!--==================-->
        </div>
    </div>


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