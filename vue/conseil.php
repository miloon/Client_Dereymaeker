<?php
include_once "header.php"
?>

    <body>
<!--HEADER ROW-->
<?php include 'vue/menu.php' ?>
<!-- /HEADER ROW -->


<div class="container" id="logorappel">
    <!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>
                    Conseillère en image
                </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="span12">
                <blockquote style="margin-top:20px;">Vous n'aurez pas deux fois l'occasion de faire une première impression.<br/>- Coco Chanel</blockquote><p style="margin-bottom: 30px;">Le Conseil en Image est un outil merveilleux que je vous apprends à maitriser en toute facilité, afin de vous mettre en valeur avec harmonie. Il propose différentes analyses et conseils, faciles à appliquer au quotidien.</p>
                <h2>Services</h2>
                <!-- Citation statique -->

                <div class="row">
                    <div class="col-lg-12"></div>
                    <div class="span3" id="references">

                        <div class="btn-group-vertical btn-group-lg" role="group">
                            <a class="btn btn-default" id="colorimetrie" href="javascript:;"
                               onclick="b();">Colorimétrie</a>
                            <a class="btn btn-default" id="morphologie" href="javascript:;"
                               onclick="c();">Morphologie</a>
                            <a class="btn btn-default" id="style" href="javascript:;"
                               onclick="d();">Style</a>
                            <a class="btn btn-default" id="relooking" href="javascript:;"
                               onclick="e();">Relooking</a>
                            <a class="btn btn-default" id="dressing" href="javascript:;"
                               onclick="f();">Dressing optimisé</a>
                            <a class="btn btn-default" id="customisation" href="javascript:;"
                               onclick="g();">Customisation personnalisée</a>
                            <a class="btn btn-default" id="shopping" href="javascript:;"
                               onclick="h();">Accompagnement shopping</a>
                            <a class="btn btn-default" id="automaquillage" href="javascript:;"
                               onclick="i();">Auto-maquillage</a>
                            <a class="btn btn-default" id="decoration" href="javascript:;"
                               onclick="j();">Décoration</a>

                        </div>
                    </div>
                    <div class="span9" id="corps">
                        <div id="menu">
                        </div>
                        <script>
                            function b() {
                                document.getElementById('menu').innerHTML = '<blockquote>La plus belle couleur au monde est celle qui vous va bien<br/> – Coco Chanel</blockquote><p>La colorimétrie détermine les couleurs qui flattent votre teint.</p>';
                            }
                            function c() {
                                document.getElementById('menu').innerHTML = '<blockquote>Les temps difficiles suscitent un désir instinctif pour l’authenticité<br/> – Coco Chanel</blockquote><p>L’analyse morphologique identifie les coupes de vêtements, les coiffures, les forment de bijoux et accessoires qui valorisent votre silhouette.</p>';
                            }
                            function d() {
                                document.getElementById('menu').innerHTML = '<blockquote>Le style est une façon de dire qui tu es sans parler<br/> -  Rachel Zoe</blockquote><p>L’analyse style définit le look qui est en adéquation avec votre personnalité, en respectant l’image que vous souhaitez donner de vous.</p>';
                            }
                            function e() {
                                document.getElementById('menu').innerHTML = '<blockquote>Prenez mes idées, j’en aurai d’autres<br/> – Coco Chanel</blockquote><p>Le Relooking c’est choisir un look pour une période déterminée ou indéterminée.</p>';
                            }
                            function f() {
                                document.getElementById('menu').innerHTML = '<blockquote>Si vous ne changez rien, rien ne changera<br/> – Franck Nicolas</blockquote><p>Un dressing organisé vous offre une facilité et un gain de temps pour vous apprêter, en peaufinant votre toilette avec les accessoires adaptés.</p>';
                            }
                            function g() {
                                document.getElementById('menu').innerHTML = '<blockquote>Pour être irremplaçable, il faut être différent<br/> – Coco Chanel</blockquote><p>La customisation de vos vêtements et accessoires, vous permettent de garder les pièces que vous aimez, tels que vêtements, bijoux et accessoires abimés. Elle les adapte à votre style et à votre morphologie, tout en les modifiant selon le style désiré.</p>';
                            }
                            function h() {
                                document.getElementById('menu').innerHTML = '<blockquote>Si une femme est mal habillée, on remarque sa robe, mais si elle est impeccablement vêtue, c’est elle que l’on remarque<br/> – Coco Chanel.</blockquote><p>L’accompagnement shopping vous dirige objectivement lors de vos achats, afin de gagner du temps et de l’argent.</p>';
                            }
                            function i() {
                                document.getElementById('menu').innerHTML = '<blockquote>Personne n’est jeune après quarante ans, mais on peut être irrésistible à tout âge<br/> – Coco Chanel</blockquote><p>Le cours d’auto-maquillage vous apprend à réaliser une mise en beauté rapide,  efficace et naturelle pour tous les jours.</p>';
                            }

                            function j() {
                                document.getElementById('menu').innerHTML = '<blockquote>Le but du design est de rendre l’ordinaire extraordinaire<br/> – auteur inconnu.</blockquote><p>La décoration de votre intérieur adapte les couleurs et le style qui vous reflète.</p>';
                            }

                            window.onload = function () {
                                b();
                            };
                        </script>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="span12">
                <h2>Témoignages</h2>
            </div>
            <div class="col-md-10 col-md-offset-1">

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

                                            <div class="limit-height col-md-8 col-md-offset-1">
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

                                            <div class="limit-height col-md-8 col-md-offset-1">
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

<hr>

<div class="container">
    <div class="row">
        <div class="span12" id='partenaire'>
            <h2>Partenaires</h2>
            <div style="text-align: center">
                <?php
                foreach ($affiche_partenaire as $recbig) {
                    ?>

                    <?php if ($recbig->logosrc) { ?>
                        <a target="_blank" title="<?= $recbig->nom ?>" href="<?= $recbig->logohref ?>"><img
                                style="max-width:150px;" alt="<?= $recbig->nom ?>"
                                class="img-responsive"
                                src='vue/img/partenaire/<?= $recbig->logosrc ?>'
                                alt='<?= $recbig->nom ?>'/></a>
                        <?php
                    } else { ?>

                        <a target="_blank" title="<?= $recbig->nom ?>"
                           href="<?= $recbig->logohref ?>"><?= $recbig->nom ?></a> |


                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>