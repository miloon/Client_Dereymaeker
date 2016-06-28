<!DOCTYPE html>
<html lang="en">
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
           <p id="logoaccueil"> <img  src="vue/img/presentation/logo1.jpg" alt="Sophie Dereymaeker" align="center"/></p>
            <ul id="accueil" class="thumbnails">
                <li class="span4">
                    <div class="thumbnail">
                        <a href="?section=conseil"><img alt="" src="vue/img/presentation/conseil.jpg"/></a>
                        <div class="caption">
                            <strong>Conseillère en image</strong>
                        </div>
                    </div>
                </li>
                <li class="span4">
                    <div class="thumbnail">
                        <a href="?section=creation"><img alt="300x200" src="vue/img/presentation/handmadecraft.jpg"/></a>
                        <div class="caption">
                            <strong>Hand Made Craft</strong>
                        </div>
                    </div>
                </li>
                <li class="span4">
                    <div class="thumbnail">
                        <a href="?section=peinture"><img alt="300x200" src="vue/img/presentation/peinture.jpg"/></a>
                        <div class="caption">
                            <strong>Artiste peintre</strong>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Présentation de Sophie</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="media">
                    <img class="img-responsive pull-left media-object" src="vue/img/presentation/sophie1.jpg"/>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus tortor augue, sed varius
                            ante
                            ornare eget. Morbi imperdiet, justo id placerat consectetur, nunc tellus ullamcorper turpis,
                            eu
                            accumsan enim erat et mi. Quisque sit amet tortor non nunc finibus ultrices. Phasellus et
                            ante
                            libero. Nunc egestas quis turpis eget vestibulum. Proin vitae dictum enim. Mauris ornare,
                            lorem
                            imperdiet semper auctor, ex sem tristique odio, vitae dapibus felis massa ut tortor.
                            Vestibulum a
                            dolor mauris. Cras ornare in odio ut vehicula. Aliquam tincidunt risus est, nec lobortis
                            felis
                            consectetur quis. Integer eget neque ac tortor rutrum lacinia. Mauris ullamcorper nunc id
                            ultricies
                            accumsan. Aliquam tincidunt magna turpis, vel maximus neque maximus commodo. Proin eget
                            condimentum
                            felis. Pellentesque dictum libero non nisl vestibulum fermentum. Cras tempus sollicitudin
                            nisi, vel
                            mollis est facilisis ac.

                        </p>
                    </div>
                </div>
            </div>
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