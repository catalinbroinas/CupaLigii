<?php

require_once ('bootloader.php');

$page_title = 'Cupa Ligii'; $comp = 0;
include_once ('view/layout/head.php');

?>

<header>
	<?php
	$status = 'active';
	include_once ('view/layout/navbar.php'); ?>

	<div class="container-fluid">
		<div class="jumbotron text-center white-text font-weight-bold morpheus-den-gradient">
			<div class="row d-flex justify-content-center">
				<div class="col-8">
					<div class="p-2">
						<h3 class="card-title">Cupa Ligii AdePlast</h3>
						<h5 class="card-subtitle">Seznoul 2016-2017</h5>
					</div>
					<div class="row">
						<div class="col-1">	
							<hr id="hrJ">
						</div>
						<div class="col-1">	
							<hr id="hrJ">
						</div>
						<div class="col-1">	
							<hr id="hrJ">
						</div>
						<div class="col-1">	
							<hr id="hrJ">
						</div>
						<div class="col-1">	
							<hr id="hrJ">
						</div>
						<div class="col-1">	
							<hr id="hrJ">
						</div>
						<div class="col-1">	
							<hr id="hrJ">
						</div>
						<div class="col-1">	
							<hr id="hrJ">
						</div>
						<div class="col-1">	
							<hr id="hrJ">
						</div>
						<div class="col-1">	
							<hr id="hrJ">
						</div>
						<div class="col-1">	
							<hr id="hrJ">
						</div>
						<div class="col-1">	
							<hr id="hrJ">
						</div>
					</div>
					<div class="p-4">
						<h6>Acest sezon de Cupa Ligii a început cu 14 echipe, toate din Liga I, dintre care 2 fiind calificate direct în sferturi, și anume FCSB și Astra Giurgiu. Premiul pentru câștigătoarea comptiției este de1.000.000 de Euro. Sezonul 2016-2017 este și ultimul sezon în care se dispută această competiție, aceasta fiind desfințată, chiar dacă a fost înfințată cu doar 3 ani în urmă.</h6>
					</div>
					<div class="d-flex justify-content-center">
						<a href="view/jucatori.php" class="btn btn-sm btnJ">Jucători</a>
						<a href="view/clasament.php" class="btn btn-sm btnJ">Clasament</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<main class="my-3">
	<div class="container">
		<div class="row purple lighten-5">
			<div class="col-lg-3 col-sm-6 my-3 p-3">
				<div class="view overlay hoverable">
					<img src="<?php echo site_url() . 'img/poliT.jpg'; ?>" alt="ACS Poli Timișoara" class="img-fluid">
					<div class="mask rgba-white-slight"><div class="pink accent-4"><h3 class="text-center white-text">ACS Poli Timișoara</h3></div></div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 my-3 p-3">
				<div class="view overlay hoverable">
					<img src="<?php echo site_url() . 'img/concordia.jpg'; ?>" alt="Concordia Chiajna" class="img-fluid">
					<div class="mask rgba-white-slight"><div class="pink accent-4"><h3 class="text-center white-text">Concordia Chiajna</h3></div></div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 my-3 p-3">
				<div class="view overlay hoverable">
					<img src="<?php echo site_url() . 'img/cfr.jpg'; ?>" alt="CFR Cluj" class="img-fluid">
					<div class="mask rgba-white-slight"><div class="pink accent-4"><h3 class="text-center white-text">CFR Cluj</h3></div></div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 my-3 p-3">
				<div class="view overlay hoverable">
					<img src="<?php echo site_url() . 'img/targu.jpg'; ?>" alt="Târgu Mureș" class="img-fluid">
					<div class="mask rgba-white-slight"><div class="pink accent-4"><h3 class="text-center white-text">Târgu Mureș</h3></div></div>
				</div>
			</div>
		</div>
		<div class="row purple lighten-5">
			<div class="col-lg-3 col-sm-6 mb-3 p-3">
				<div class="view overlay hoverable">
					<img src="<?php echo site_url() . 'img/botosani.jpg'; ?>" alt="Botoșani" class="img-fluid">
					<div class="mask rgba-white-slight"><div class="pink accent-4"><h3 class="text-center white-text">Botoșani</h3></div></div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3 p-3">
				<div class="view overlay hoverable">
					<img src="<?php echo site_url() . 'img/fcsb.jpg'; ?>" alt="FCSB" class="img-fluid">
					<div class="mask rgba-white-slight"><div class="pink accent-4"><h3 class="text-center white-text">FCSB</h3></div></div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3 p-3">
				<div class="view overlay hoverable">
					<img src="<?php echo site_url() . 'img/astra.jpg'; ?>" alt="Astra Giurgiu" class="img-fluid">
					<div class="mask rgba-white-slight"><div class="pink accent-4"><h3 class="text-center white-text">Astra Giurgiu</h3></div></div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3 p-3">
				<div class="view overlay hoverable">
					<img src="<?php echo site_url() . 'img/dinamo.jpg'; ?>" alt="Dinamo București" class="img-fluid">
					<div class="mask rgba-white-slight"><div class="pink accent-4"><h3 class="text-center white-text">Dinamo București</h3></div></div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php include_once ('view/layout/footer.php'); ?>
