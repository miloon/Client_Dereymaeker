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

<?php
include_once "footer.php"
?>

<!--/.Footer-->

</body>
</html>