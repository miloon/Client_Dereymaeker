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

    <!-- SCRIPT -->

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="vue/js/bootstrap.min.js"></script>

</head>
<body>
<!--HEADER ROW-->
<?php include 'vue/menu.php' ?>
<!-- /HEADER ROW -->


<div class="container">
    <!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>
                    Créatrice de Style
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- /HEADER ROW -->


<div class="container">
    <div class="row">
        <div class="span12">
            <!-- Citation statique -->
            <h3>"Vous n'aurez pas deux fois l'occasion de faire une première impression"</h3>
            <div class="row">
                <div class="span2" id="references">

                    <div class="btn-group-vertical btn-group-lg" role="group">
                        <a class="btn btn-default" id="colorimétrie" href="javascript:;" onclick="a();">Colorimétrie</a>
                        <a class="btn btn-default" id="analyse" href="javascript:;" onclick="b();">Analyse</a>
                        <a class="btn btn-default" id="tri" href="javascript:;" onclick="c();">Tri</a>
                        <a class="btn btn-default" id="accompagnement" href="javascript:;"
                           onclick="d();">Accompagnement</a>
                        <a class="btn btn-default" id="cours" href="javascript:;" onclick="e();">Cours</a>
                        <a class="btn btn-default" id="decoration" href="javascript:;" onclick="a();">décoration</a>

                    </div>
                </div>
                <div class="span10" id="corps">
                    <div id="menu">
                    </div>


                    <script>

                        function a() {
                            document.getElementById('menu').innerHTML = 'Nam quis varius est, a tincidunt nulla. In eget ex est. Cras dignissim maximus tincidunt. Class aptent taciti sociosqu ad."dapibus consectetur. Proin finibus orci ante, at tincidunt massa convallis sed". Proin consectetur sem quis iaculis pharetra. Nullam facilisis urna ac magna iaculis dapibus. Maecenas ac diam non risus malesuada pharetra. Praesent finibus ante';
                        }
                        function b() {
                            document.getElementById('menu').innerHTML = 'Nullam facilisis urna ac magna iaculis dapibus. Maecenas ac diam non risus malesuada pharetra. Praesent finibus ante';
                        }
                        function c() {
                            document.getElementById('menu').innerHTML = 'onsectetur sem quis iaculis pharetra. Nullam facilisis urna ac magna iaculis dapibus. Maecenas ac diam non risus malesuada pharetra. Praesent finibu';
                        }
                        function d() {
                            document.getElementById('menu').innerHTML = 's dapibus consectetur. Proin finibus orci ante, at tincidunt massa convallis sed. Proin consectetur sem quis iaculis pharetra. Nullam facilisis urna ac magna iaculis dapibus. Maecenas ac diam non risus malesuada pharetra. Praesent finibus anilisis urna ac magna';
                        }
                        function e() {
                            document.getElementById('menu').innerHTML = 'Venas ac diam non risus malesua';
                        }

                        window.onload = function () {
                            a();
                        };

                    </script>


                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <h2>Témoignages</h2>


                <!--Carousel
      ==================================================-->

                <div id="myCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        <?php
                        $i = 1;
                        foreach ($affiche_temoignage as $recbig) {
                            ?>
                            <?php if ($i == 1): ?>
                                <div class='item active'>
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-md-8 col-md-offset-1">
                                                <h3><?= $recbig->nom ?></h3>
                                                <p><?= nl2br($recbig->texte) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class='item'>
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-md-8 col-md-offset-1">
                                                <h3><?= $recbig->nom ?></h3>
                                                <p><?= nl2br($recbig->texte) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php
                            $i++;
                        }
                        ?>

                    </div>


                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left " href="#myCarousel" data-slide="prev"><i class="icon-chevron-left"></i></a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next"><i
                        class="icon-chevron-right"></i></a>
                <!-- /.Carousel nav -->

            </div>
            <!-- /Carousel -->

            <!-- Indicators -->

            <p style="text-align: center;">
                <script type="text/javascript"
                        src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            </p>

            </ol>
        </div>
    </div>


    <!--Footer
    ==========================-->

    <footer>
        <div class="container">
            <div class="row">
                <div class="span6">Sophie Dereymaeker<br>
                    <small>Créatrice de styles</small>
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