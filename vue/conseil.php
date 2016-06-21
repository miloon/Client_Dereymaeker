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
				<h1>Créations & Customisations</h1>
			</div>
			<div id="references">
				<h3>uis iaculis pharetra. Nullam facilisis urna ac magna iacul</h3>

				<ul>
					<li><a id="colorimétrie" href="javascript:;" onclick="a();">Colorimétrie</a></li>
					<li><a id="analyse" href="javascript:;" onclick="b();">Analyse</a></li>
					<li><a id="tri" href="javascript:;" onclick="c();">Tri</a></li>
					<li><a id="accompagnement" href="javascript:;" onclick="d();">Accompagnement</a></li>
					<li><a id="cours" href="javascript:;" onclick="e();">Cours</a></li>
					<li><a id="decoration" href="javascript:;" onclick="a();">décoration</a></li>
				</ul>

			</div>
			<div id="corps">
				<div id="menu">
				</div>


				<script>

					function a()
					{
						document.getElementById('menu').innerHTML = 'Nam quis varius est, a tincidunt nulla. In eget ex est. Cras dignissim maximus tincidunt. Class aptent taciti sociosqu ad."dapibus consectetur. Proin finibus orci ante, at tincidunt massa convallis sed". Proin consectetur sem quis iaculis pharetra. Nullam facilisis urna ac magna iaculis dapibus. Maecenas ac diam non risus malesuada pharetra. Praesent finibus ante';
					}
					function b()
					{
						document.getElementById('menu').innerHTML = 'Nullam facilisis urna ac magna iaculis dapibus. Maecenas ac diam non risus malesuada pharetra. Praesent finibus ante';
					}
					function c()
					{
						document.getElementById('menu').innerHTML = 'onsectetur sem quis iaculis pharetra. Nullam facilisis urna ac magna iaculis dapibus. Maecenas ac diam non risus malesuada pharetra. Praesent finibu';
					}
					function d()
					{
						document.getElementById('menu').innerHTML = 's dapibus consectetur. Proin finibus orci ante, at tincidunt massa convallis sed. Proin consectetur sem quis iaculis pharetra. Nullam facilisis urna ac magna iaculis dapibus. Maecenas ac diam non risus malesuada pharetra. Praesent finibus anilisis urna ac magna';
					}
					function e()
					{
						document.getElementById('menu').innerHTML = 'Venas ac diam non risus malesua';
					}

					window.onload = function()
					{
						a();
					};

				</script>


			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
				<div class='carousel-outer'>
					<!-- Wrapper for slides -->
					<div class='carousel-inner'>

						<?php
						$i = 1;
						foreach ($affiche_temoignage as $recbig) {
							?>
							<?php if ($i == 1): ?>
								<div class='item active'>
									<h3><?= $recbig->nom ?></h3>
									<p><?= $recbig->texte ?></p>
									<h3><? $recbig->email ?></h3>
									<p><?= $recbig->profession ?></p>
									<p><?= $recbig->age ?></p>
								</div>
							<?php else: ?>
								<div class='item'>
									<h3><?= $recbig->nom ?></h3>
									<p><?= $recbig->texte ?></p>
									<h3><? $recbig->email ?></h3>
									<p><?= $recbig->profession ?></p>
									<p><?= $recbig->age ?></p>
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
				
					<p style="text-align: center;">
						<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script></p>

				</ol>
			</div>
		</div>
	</div>






