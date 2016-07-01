<?php
include_once "header.php"
?>

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

    <div class="container">
        <div class="row">
            <div class="span12">
                <!-- Citation statique -->
                <h3>"Vous n'aurez pas deux fois l'occasion de faire une première impression"</h3>
                <div class="row">
                    <div class="span3" id="references">

                        <div class="btn-group-vertical btn-group-lg" role="group">
                            <a class="btn btn-default" id="colorimétrie" href="javascript:;"
                               onclick="a();">Colorimétrie</a>
                            <a class="btn btn-default" id="analyse" href="javascript:;" onclick="b();">Analyse de
                                style</a>
                            <a class="btn btn-default" id="tri" href="javascript:;" onclick="c();">Tri garde-robe</a>
                            <a class="btn btn-default" id="accompagnement" href="javascript:;"
                               onclick="d();">Accompagnement shopping</a>
                            <a class="btn btn-default" id="cours" href="javascript:;" onclick="e();">Cours
                                auto-maquillage</a>
                            <a class="btn btn-default" id="decoration" href="javascript:;" onclick="f();">Décoration</a>
                            <a class="btn btn-default" id="morphologie" href="javascript:;"
                               onclick="g();">Morphologie</a>

                        </div>
                    </div>
                    <div class="span9" id="corps">
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
                            function f() {
                                document.getElementById('menu').innerHTML = 'In iaculis, risus eu pellentesque pharetra, neque dolor efficitur tellus, et lacinia urna ex et ligula. In euismod iaculis dolor ut ultrices. Praesent sit amet semper odio, vel efficitur lectus. Vivamus facilisis velit et lacus accumsan, eget eleifend ligula congue. ';
                            }
                            function g() {
                                document.getElementById('menu').innerHTML = 'Proin eleifend semper porta. Donec leo tellus, egestas hendrerit pharetra a, imperdiet eu purus. In accumsan malesuada lacinia. Nulla porttitor, lectus id tincidunt commodo, lacus dui dignissim sem, at fermentum metus nisl et augue. Aenean eleifend arcu eu tempus blandit. Integer eleifend erat ac orci fringilla, ut hendrerit orci ullamcorper. Maecenas posuere posuere lorem ut rhoncus. ';
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
                    <a class="carousel-control left " href="#myCarousel" data-slide="prev"><i
                            class="icon-chevron-left"></i></a>
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
    </div>
</div>


    <div class="container">
        <div class="row">
            <div class="span12" id='partenaire'>
                <h2>Partenaires</h2>
                <?php
                foreach ($affiche_partenaire as $recbig) {
                    ?>

                    <?php if ($recbig->logosrc) { ?>
                        <img width="75px" class="img-responsive" src='<?= $recbig->logosrc ?>'
                             alt='<?= $recbig->nom ?>'/><?php
                    } ?>

                    <a title="<?= $recbig->nom ?>" href="<?= $recbig->logohref ?>"><?= $recbig->nom ?></a>



                    <?php
                }
                ?>
            </div>
        </div>
    </div>

<?php
include_once "footer.php";
?>