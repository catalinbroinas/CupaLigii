<?php

require_once ('../bootloader.php');

$page_title = 'Rezumate'; $comp = 0;
include_once ('layout/head.php');

?>

<header>
	<?php
	$status = 'active';
	include_once ('layout/navbar.php'); ?>
</header>

<main class="py-5">
	<div class="container">
		<div class="row d-flex justify-content-md-start justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 mb-3">
				<?php
				$img = 'cupaLigii.jpg';
				$imgIS ='poliT3.png'; $imgID = 'concordia3.png';
				$dataTarget = 'video1';
				$match = 'ACS Poli Timișoara - Concordia Chiajna';
				include ('components/cardVideos.php');
				include ('components/video1.php'); 
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 mb-3">
				<?php
				$img = 'cupaLigii.jpg';
				$imgID ='targu3.png'; $imgIS = 'cfr3.png';
				$dataTarget = 'video2';
				$match = 'Târgu Mureș - CFR Cluj';
				include ('components/cardVideos.php');
				include ('components/video2.php'); 
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 mb-3">
				<?php
				$img = 'cupaLigii.jpg';
				$imgIS ='botosani3.png'; $imgID = 'fcsb3.png';
				$dataTarget = 'video3';
				$match = 'Botoșani - FCSB';
				include ('components/cardVideos.php');
				include ('components/video3.php');
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 mb-3">
				<?php
				$img = 'cupaLigii.jpg';
				$imgIS ='astra3.png'; $imgID = 'dinamo3.png';
				$dataTarget = 'video4';
				$match = 'Astra Giurgiu - Dinamo București';
				include ('components/cardVideos.php');
				include ('components/video4.php');
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 mb-3">
				<?php
				$img = 'cupaLigii.jpg';
				$imgIS ='dinamo3.png'; $imgID = 'fcsb3.png';
				$dataTarget = 'video5';
				$match = 'Dinamo București - FCSB';
				include ('components/cardVideos.php');
				include ('components/video5.php');
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 mb-3">
				<?php
				$img = 'cupaLigii.jpg';
				$imgIS ='targu3.png'; $imgID = 'poliT3.png';
				$dataTarget = 'video6';
				$match = 'Târgu Mureș - ACS Poli Timișoara';
				include ('components/cardVideos.php');
				include ('components/video6.php');
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 mb-3">
				<?php
				$img = 'cupaLigii.jpg';
				$imgIS ='fcsb3.png'; $imgID = 'dinamo3.png';
				$dataTarget = 'video7';
				$match = 'FCSB - Dinamo București';
				include ('components/cardVideos.php');
				include ('components/video7.php');
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 mb-3">
				<?php
				$img = 'cupaLigii.jpg';
				$imgIS ='poliT3.png'; $imgID = 'targu3.png';
				$dataTarget = 'video8';
				$match = 'ACS Poli Timișoara - Târgu Mureș';
				include ('components/cardVideos.php');
				include ('components/video8.php');
				?>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-10">
				<?php
				$img = 'cupaLigii.jpg';
				$imgIS ='dinamo3.png'; $imgID = 'poliT3.png';
				$dataTarget = 'video9';
				$match = 'Dinamo București - ACS Poli Timișoara';
				include ('components/cardVideos.php');
				include ('components/video9.php');
				?>
			</div>
		</div>
	</div>
</main>

<?php include_once ('layout/footer.php'); ?>
