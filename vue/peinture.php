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

	<style>
		/* http://jsfiddle.net/ivanarvizu/JS6JV/16/ */
		#carousel-custom {
			margin: 20px auto;
			width: 80%;
		}

		#carousel-custom .carousel-indicators {
			margin: 10px 0 0;
			overflow: auto;
			position: static;
			text-align: left;
			white-space: nowrap;
			width: 100%;
		}

		#carousel-custom .carousel-indicators li {
			background-color: transparent;
			-webkit-border-radius: 0;
			border-radius: 0;
			display: inline-block;
			height: auto;
			margin: 0 !important;
			width: auto;
		}

		#carousel-custom .carousel-indicators li img {
			display: block;
			opacity: 0.5;
			height: 90px;
		}

		#carousel-custom .carousel-indicators li.active img {
			opacity: 1;
		}

		#carousel-custom .carousel-indicators li:hover img {
			opacity: 0.75;
		}

		#carousel-custom .carousel-outer {
			position: relative;
		}
	</style>


	<!-- SCRIPT
    ============================================================-->
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="vue/js/bootstrap.min.js"></script>

</head>
<body>
<!--HEADER ROW-->
<div id="header-row">
	<div class="container">
		<div class="row">
			<!-- MAIN NAVIGATION -->
			<div class="span12">
				<div class="navbar">
					<div class="navbar-inner">
						<?php include 'vue/menu.php' ?>
					</div>
				</div>
			</div>
			<!-- MAIN NAVIGATION -->
		</div>
	</div>
</div>
<!-- /HEADER ROW -->


<div class="container">
	<div class="row">
		<div class="span12">
			<div class="page-header">
				<h1>Peintures</h1>
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
						$i = 1;
						foreach ($affiche_creation as $recbig) {
							?>
							<?php if ($i == 1): ?>
								<div class='item active'>
									<img src='<?= $recbig->imgsrc ?>' alt='<?= $recbig->nom ?>'/>
									<h3><?= $recbig->nom ?></h3>
									<p><?= $recbig->description ?></p>
								</div>
							<?php else: ?>
								<div class='item'>
									<img src='<?= $recbig->imgsrc ?>' alt='<?= $recbig->nom ?>'/>
									<h3><?= $recbig->nom ?></h3>
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

					$i = 1;
					$y = 0;
					foreach ($affiche_creation as $rec) {

						// pour le bom numéro de slide, ça commence à 0 donc je prends l'id de la photo -1.

						?>
						<?php if ($i == 1): ?>
							<li data-target='#carousel-custom'
								data-slide-to='<?= $y ?>'
								class='active'>
								<img src='<?= $rec->imgsrc ?>'
									 alt='<?= $rec->nom ?>'
								/>
							</li>
						<?php else: ?>
							<li data-target='#carousel-custom'
								data-slide-to='<?= $y ?>'>
								<img src='<?= $rec->imgsrc ?>'
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
	<!--PAGE TITLE-->

	<div class="container">

		<div class="page-header">
			<h1>
				Journal d' évènements
			</h1>

		</div>
	</div>

	<!-- /. PAGE TITLE-->


	<div class="container">
		<div class="row">

			<div class="span9">
				<!--Blog Post-->
				<div class="blog-post">
					<h2>15/06/2016 - Evènements à venir</h2>
					<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
						interested.
						Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also
						reproduced
						in
						their exact original form, accompanied by English versions from the 1914 translation by H.
						Rackham.</p>
					<div class="postmetadata">
						<ul>
							<li>
								<i class="icon-bookmark"></i> <a href="#">Endroit</a>
							</li>

						</ul>
					</div>
				</div>


				<!--===============-->

				<div class="blog-post">
					<h2>15/06/2016 - Evènements à venir</h2>
					<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
						interested.
						Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also
						reproduced
						in
						their exact original form, accompanied by English versions from the 1914 translation by H.
						Rackham.</p>
					<div class="postmetadata">
						<ul>
							<li>
								<i class="icon-bookmark"></i> <a href="#">Endroit</a>
							</li>

						</ul>
					</div>
				</div>


				<!--/.Blog Post-->

				<!--Pagination-->
				<div class="pagination">
					<ul>
						<li>
							<a href="#">Prev</a>
						</li>
						<li>
							<a href="#">1</a>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<a href="#">4</a>
						</li>
						<li>
							<a href="#">5</a>
						</li>
						<li>
							<a href="#">Next</a>
						</li>
					</ul>
				</div>

				<!--/.Pagination-->
			</div>


			<div class="span3">
				<div class="side-bar">
					<h3>Evènements passés</h3>

					<ul class="recent-post">
						<li><a href=""><strong>Titre</strong></a>
							<small><i class="icon-bookmark"></i> <a href="#">lieux</a>, <i
									class="icon-calendar"></i>15/06/2016
							</small>
						</li>

						<li><a href=""><strong>Titre</strong></a>
							<small><i class="icon-bookmark"></i> <a href="#">lieux</a>, <i
									class="icon-calendar"></i>15/06/2016
							</small>
						</li>

						<li><a href=""><strong>Titre</strong></a>
							<small><i class="icon-bookmark"></i> <a href="#">lieux</a>, <i
									class="icon-calendar"></i>15/06/2016
							</small>
						</li>


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