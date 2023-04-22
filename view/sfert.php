<?php

require_once ('../bootloader.php');

$page_title = 'Sferturi'; $comp = 1;
include_once ('layout/head.php');

?>

 	<?php include_once ('components/sfert1.php'); ?>
    <?php include_once ('components/sfert2.php'); ?>
    <?php include_once ('components/sfert3.php'); ?>
    <?php include_once ('components/sfert4.php'); ?>

<header>
	<?php
	$status = 'active';
	$statusD = 'activeD';
	include_once ('layout/navbar.php'); ?>
</header>

<main class="p-5 mx-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="h1-responsive black-text font-weight-bold text-center">Sferturi de finală</h1>
				<hr class="hr-dark">
			</div>
		</div>
		<div class="row mt-3 d-flex justify-content-center">
			<div class="col-xl-10 col-12">
				<section class="purple lighten-5 p-5">
					<div class="row match hoverable px-3 pt-2 my-auto">
							<div class="col-4">
							<h4 class="font-weight-bold black-text">ACS Poli Timișoara</h4></div>
							<div class="col-4 pt-1 text-center"><a href="#" data-toggle="modal" data-target="#sfert1" class="my-1"><span class="px-3 py-1 my-auto bg-dark white-text">2<i class="fas fa-arrows-alt-h mx-1"></i>1</span></a></div>
							<div class="col-4"><h4 class="">Concordia Chiajna</h4></div>
					</div>
					<div class="row match hoverable px-3 pt-2 my-auto">
							<div class="col-4">
							<h4 class="">CFR Cluj</h4></div>
							<div class="col-4 pt-1 text-center"><a href="#" data-toggle="modal" data-target="#sfert2" class="my-1"><span class="px-3 py-1 my-auto bg-dark white-text">1<i class="fas fa-arrows-alt-h mx-1"></i>1 P</span></a></div>
							<div class="col-4"><h4 class="font-weight-bold black-text">FCM Târgu Mureș</h4></div>
					</div>
					<div class="row match hoverable px-3 pt-2 my-auto">
							<div class="col-4">
							<h4 class="">Botoșani</h4></div>
							<div class="col-4 pt-1 text-center"><a href="#" data-toggle="modal" data-target="#sfert3" class="my-1"><span class="px-3 py-1 my-auto bg-dark white-text">0<i class="fas fa-arrows-alt-h mx-1"></i>2</span></a></div>
							<div class="col-4"><h4 class="font-weight-bold black-text">FCSB</h4></div>
					</div>
					<div class="row match hoverable px-3 pt-2 my-auto">
							<div class="col-4">
							<h4 class="">Astra Giurgiu</h4></div>
							<div class="col-4 pt-1 text-center"><a href="#" data-toggle="modal" data-target="#sfert4" class="my-1"><span class="px-3 py-1 my-auto bg-dark white-text">2<i class="fas fa-arrows-alt-h mx-1"></i>5 G</span></a></div>
							<div class="col-4"><h4 class="font-weight-bold black-text">Dinamo București</h4></div>
					</div>
				</section>
			</div>
		</div>
	</div>
</main>

<section class="fixed-bottom">
	<?php include_once ('layout/footer.php'); ?>
</section>
