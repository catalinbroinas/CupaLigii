<?php

require_once ('../bootloader.php');

$page_title = 'Finala'; $comp = 1;
include_once ('layout/head.php');

?>

    <?php include_once ('components/finala.php'); ?>

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
				<h1 class="h1-responsive black-text font-weight-bold text-center">MAREA FINALĂ</h1>
				<hr class="hr-dark">
			</div>
		</div>
		<div class="row mt-3 d-flex justify-content-center">
			<div class="col-xl-10 col-12">
				<section class="purple lighten-5 p-5">
					<div class="row match hoverable px-3 pt-2 my-auto">
							<div class="col-4">
							<h4 class="font-weight-bold">Dinamo București</h4></div>
							<div class="col-4 pt-1 text-center"><a href="#" data-toggle="modal" data-target="#finala" class="my-1"><span class="px-3 py-1 my-auto bg-dark white-text">2<i class="fas fa-arrows-alt-h mx-1"></i>0</span></a></div>
							<div class="col-4"><h4 class="">ACS Poli Timișoara</h4></div>
					</div>
				</section>
			</div>
		</div>
	</div>
</main>

<section class="fixed-bottom">
	<?php include_once ('layout/footer.php'); ?>
</section>
