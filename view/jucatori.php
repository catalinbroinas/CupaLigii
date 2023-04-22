<?php

require_once ('../bootloader.php');

$page_title = 'Jucători'; $comp = 0;
include_once ('layout/head.php');

?>

<header>
	<?php
	$status = 'active';
	include_once ('layout/navbar.php'); ?>
</header>

<main class="my-5">
	<div class="container">
		<!-- Grid row -->
		<div class="row mb-3 d-flex justify-content-md-start justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-9 mb-3">
				<?php 
				$img = 'poliT1.jpg'; $name = 'Andrei Artean';
				$imgI = 'poliT3.png'; $nameI = 'ACS Poli Timișoara';
				$v = 24; $p = 'Mijlocaș'; $n = 'Român'; $c = 850 . ' mii'; $m = 91;
				include ('components/card.php'); 
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-9 mb-3">
				<?php 
				$img = 'concordia1.jpg'; $name = 'Neluț Roșu';
				$imgI = 'concordia3.png'; $nameI = 'Concordia Chiajna';
				$v = 24; $p = 'Mijlocaș'; $n = 'Român'; $c = 750 . ' mii'; $m = 77;
				include ('components/card.php'); 
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-9 mb-3">
				<?php 
				$img = 'cfr1.jpg'; $name = 'Andrei Mureșan';
				$imgI = 'cfr3.png'; $nameI = 'CFR Cluj';
				$v = 32; $p = 'Fundaș'; $n = 'Român'; $c = 750 . ' mii'; $m = 106;
				include ('components/card.php'); 
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-9 mb-3">
				<?php 
				$img = 'targu1.jpg'; $name = 'Marius Constantin';
				$imgI = 'targu3.png'; $nameI = 'FCM Târgu Mureș';
				$v = 33; $p = 'Fundaș'; $n = 'Român'; $c = 300 . ' mii'; $m = 36;
				include ('components/card.php'); 
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-9 mb-3">
				<?php 
				$img = 'astra1.jpg'; $name = 'Constantin Budescu';
				$imgI = 'astra3.png'; $nameI = 'Astra Giurgiu';
				$v = 28; $p = 'Mijlocaș'; $n = 'Român'; $c = 4 . ' mil'; $m = 143;
				include ('components/card.php'); 
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-9 mb-3">
				<?php 
				$img = 'dinamo1.jpg'; $name = 'Ionuț Nedelcearu';
				$imgI = 'dinamo3.png'; $nameI = 'Dinamo București';
				$v = 21; $p = 'Fundaș'; $n = 'Român'; $c = 3.5 . ' mil'; $m = 91;
				include ('components/card.php'); 
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-9 mb-3">
				<?php 
				$img = 'botosani1.jpg'; $name = 'Andrei Burcă';
				$imgI = 'botosani3.png'; $nameI = 'Botoșani';
				$v = 24; $p = 'Fundaș'; $n = 'Român'; $c = 1.5 . ' mil'; $m = 109;
				include ('components/card.php'); 
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-9 mb-3">
				<?php 
				$img = 'fcsb1.jpg'; $name = 'Ovidiu Popescu';
				$imgI = 'fcsb3.png'; $nameI = 'FCSB';
				$v = 23; $p = 'Mijlocaș'; $n = 'Român'; $c = 500 . ' mii'; $m = 53;
				include ('components/card.php'); 
				?>
			</div>
		</div>
		<!-- Grid row -->
	</div>
</main>

<div class="fixed-bottom mTop">
	<?php include_once ('layout/footer.php'); ?>
</div>
