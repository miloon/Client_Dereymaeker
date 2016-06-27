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
    <style>

        .classname {
            -moz-box-shadow: inset 0px 0px 12px 14px #ffffff;
            -webkit-box-shadow: inset 0px 0px 12px 14px #ffffff;
            box-shadow: inset 0px 0px 12px 14px #ffffff;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
            background: -moz-linear-gradient(center top, #ededed 5%, #dfdfdf 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
            background-color: #ededed;
            -webkit-border-top-left-radius: 0px;
            -moz-border-radius-topleft: 0px;
            border-top-left-radius: 0px;
            -webkit-border-top-right-radius: 0px;
            -moz-border-radius-topright: 0px;
            border-top-right-radius: 0px;
            -webkit-border-bottom-right-radius: 0px;
            -moz-border-radius-bottomright: 0px;
            border-bottom-right-radius: 0px;
            -webkit-border-bottom-left-radius: 0px;
            -moz-border-radius-bottomleft: 0px;
            border-bottom-left-radius: 0px;
            text-indent: 0px;
            border: 5px solid #dcdcdc;
            display: inline-block;
            color: #777777;
            font-family: Arial;
            font-size: 15px;
            font-weight: bold;
            font-style: normal;
            height: 200px;
            line-height: 200px;
            width: 250px;
            text-decoration: none;
            text-align: center;
            text-shadow: 0px 1px 0px #ffffff;
        }

        .classname:hover {
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
            background: -moz-linear-gradient(center top, #dfdfdf 5%, #ededed 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
            background-color: #dfdfdf;
        }

        .classname:active {
            position: relative;
            top: 1px;
        }

        article {
            margin-top: 100px;
            text-align: center;
        }

        #header-row{
            z-index: 100;
        }

    </style>
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

<article>
    <a href="?section=conseil" class="classname">Conseillère en image</a>
    <a href="?section=creation" class="classname">Hand made craft</a>
    <a href="?section=peinture" class="classname">Artiste peintre</a>
</article>


<div class="container">
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Présentation de Sophie</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="span12"><p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus tortor augue, sed varius ante
                    ornare eget. Morbi imperdiet, justo id placerat consectetur, nunc tellus ullamcorper turpis, eu
                    accumsan enim erat et mi. Quisque sit amet tortor non nunc finibus ultrices. Phasellus et ante
                    libero. Nunc egestas quis turpis eget vestibulum. Proin vitae dictum enim. Mauris ornare, lorem
                    imperdiet semper auctor, ex sem tristique odio, vitae dapibus felis massa ut tortor. Vestibulum a
                    dolor mauris. Cras ornare in odio ut vehicula. Aliquam tincidunt risus est, nec lobortis felis
                    consectetur quis. Integer eget neque ac tortor rutrum lacinia. Mauris ullamcorper nunc id ultricies
                    accumsan. Aliquam tincidunt magna turpis, vel maximus neque maximus commodo. Proin eget condimentum
                    felis. Pellentesque dictum libero non nisl vestibulum fermentum. Cras tempus sollicitudin nisi, vel
                    mollis est facilisis ac.

                            </div>
                        </div>
                    </div>

                </div>

                </p></div>
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