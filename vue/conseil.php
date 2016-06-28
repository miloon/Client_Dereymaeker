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
                    Services
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- /HEADER ROW -->


<div class="containe">
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

									<p><?= $recbig->profession ?></p>
									<p><?= $recbig->age ?></p>
								</div>
							<?php else: ?>
								<div class='item'>
									<h3><?= $recbig->nom ?></h3>
									<p><?= $recbig->texte ?></p>

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
    <div>
		<h2>Partenaires</h2>
		<?php
		foreach ($affiche_partenaire as $recbig){
        ?>
        <div class='partenaire'>
            <?php if ($recbig->logosrc) { ?>
                <img src='vue/img/partenaire/<?= $recbig->logosrc ?>'alt='<?= $recbig->nom ?>'/><?php
            } ?>

            <a href="<?= $recbig->logohref ?>"><?= $recbig->nom ?></a>

            <?php
            }
                    ?>
                </div>
	</body>

<?php
include_once "footer.php"
?>

</html>

