<?php

require_once ('../bootloader.php');

$page_title = 'Semi-finale'; $comp = 1;
include_once ('layout/head.php');

?>

	<?php include_once ('components/semi1tur.php'); ?>
    <?php include_once ('components/semi1retur.php'); ?>
    <?php include_once ('components/semi2tur.php'); ?>
    <?php include_once ('components/semi2retur.php'); ?>

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
				<h1 class="h1-responsive black-text font-weight-bold text-center">Semi-finale</h1>
				<hr class="hr-dark">
			</div>
		</div>
		<div class="row mt-3 d-flex justify-content-center">
			<div class="col-xl-10 col-12">
				<section class="purple lighten-5 p-5">
					<div class="mb-5">
					<div class="row match hoverable px-3 pt-2 my-auto">
							<div class="col-4">
							<h4 class="">Targu Mureș</h4></div>
							<div class="col-4 pt-1 text-center"><a href="#" data-toggle="modal" data-target="#semi1tur" class="my-1"><span class="px-3 py-1 my-auto bg-dark white-text">2<i class="fas fa-arrows-alt-h mx-1"></i>4</span></a></div>
							<div class="col-4"><h4 class="font-weight-bold">ACS Poli Timișoara</h4></div>
					</div>
					<div class="row match hoverable px-3 pt-2 my-auto">
							<div class="col-4">
							<h4 class="font-weight-bold">ACS Poli Timișoara</h4></div>
							<div class="col-4 pt-1 text-center"><a href="#" data-toggle="modal" data-target="#semi1retur" class="my-1"><span class="px-3 py-1 my-auto bg-dark white-text">3<i class="fas fa-arrows-alt-h mx-1"></i>1</span></a></div>
							<div class="col-4"><h4 class="">Targu Mureș</h4></div>
					</div>
					</div>
					<div class="row match hoverable px-3 pt-2 my-auto">
							<div class="col-4">
							<h4 class="font-weight-bold">Dinamo București</h4></div>
							<div class="col-4 pt-1 text-center"><a href="#" data-toggle="modal" data-target="#semi2tur" class="my-1"><span class="px-3 py-1 my-auto bg-dark white-text">4<i class="fas fa-arrows-alt-h mx-1"></i>1</span></a></div>
							<div class="col-4"><h4 class="">FCSB</h4></div>
					</div>
					<div class="row match hoverable px-3 pt-2 my-auto">
							<div class="col-4">
							<h4 class="">FCSB</h4></div>
							<div class="col-4 pt-1 text-center"><a href="#" data-toggle="modal" data-target="#semi2retur" class="my-1"><span class="px-3 py-1 my-auto bg-dark white-text">1<i class="fas fa-arrows-alt-h mx-1"></i>3</span></a></div>
							<div class="col-4"><h4 class="font-weight-bold">Dinamo București</h4></div>
					</div>
				</section>
			</div>
		</div>
	</div>
</main>

<section class="fixed-bottom">
	<?php include_once ('layout/footer.php'); ?>
</section>
