<?php

require_once ('../bootloader.php');

$page_title = 'Clasament'; $comp = 0;
include_once ('layout/head.php');

?>

<header>
	<?php
	$status = 'active';
	include_once ('layout/navbar.php'); ?>
</header>

<main class=" my-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h1 class="h1-responsive black-text font-weight-bold">Clasament final</h1>
				<hr class="hr-dark mb-3">
			</div>
		</div>
		<div class="row d-flex justify-content-lg-center">
			<div class="col-lg-10 col-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col" class="font-weight-bold">Loc</th>
							<th scope="col" class="font-weight-bold">Echipă</th>
							<th scope="col" class="font-weight-bold">Fază</th>
							<th scope="col" class="font-weight-bold">V</th>
							<th scope="col" class="font-weight-bold">E</th>
							<th scope="col" class="font-weight-bold">Î</th>
							<th scope="col" class="font-weight-bold">GM</th>
							<th scope="col" class="font-weight-bold">GP</th>
							<th scope="col" class="font-weight-bold">G</th>
							<th scope="col" class="font-weight-bold">P</th>
						</tr>
					</thead>
					<tbody class="table-borderless">
						<tr class="table-success black-text">
							<th scope="row" class="font-weight-bold">1</th>
							<td>Dinamo București</td>
							<td>Finală</td>
							<td>3</td>
							<td>1</td>
							<td>0</td>
							<td>14</td>
							<td>4</td>
							<td>10</td>
							<td>10</td>
						</tr>
						<tr class="table-info black-text">
							<th scope="row" class="font-weight-bold">2</th>
							<td>ACS Poli Timișoara</td>
							<td>Finală</td>
							<td>3</td>
							<td>0</td>
							<td>1</td>
							<td>9</td>
							<td>4</td>
							<td>5</td>
							<td>9</td>
						</tr>
						<tr>
							<th scope="row" class="font-weight-bold">3</th>
							<td>FCSB</td>
							<td>Semi-Finale</td>
							<td>1</td>
							<td>0</td>
							<td>2</td>
							<td>4</td>
							<td>9</td>
							<td>-5</td>
							<td>3</td>
						</tr>
						<tr>
							<th scope="row" class="font-weight-bold">4</th>
							<td>Târgu Mureș</td>
							<td>Semi-Finale</td>
							<td>0</td>
							<td>1</td>
							<td>2</td>
							<td>4</td>
							<td>8</td>
							<td>-4</td>
							<td>1</td>
						</tr>
						<tr>
							<th scope="row" class="font-weight-bold">5</th>
							<td>CFR Cluj</td>
							<td>Sferturi</td>
							<td>0</td>
							<td>1</td>
							<td>0</td>
							<td>1</td>
							<td>1</td>
							<td>0</td>
							<td>1</td>
						</tr>
						<tr>
							<th scope="row" class="font-weight-bold">6</th>
							<td>Astra Giurgiu</td>
							<td>Sferturi</td>
							<td>0</td>
							<td>1</td>
							<td>0</td>
							<td>2</td>
							<td>5</td>
							<td>-3</td>
							<td>1</td>
						</tr>
						<tr>
							<th scope="row" class="font-weight-bold">7</th>
							<td>Concordia Chiajna</td>
							<td>Sferturi</td>
							<td>0</td>
							<td>0</td>
							<td>1</td>
							<td>1</td>
							<td>2</td>
							<td>-1</td>
							<td>0</td>
						</tr>
						<tr class="table-danger black-text">
							<th scope="row" class="font-weight-bold">8</th>
							<td>Botoșani</td>
							<td>Sferturi</td>
							<td>0</td>
							<td>0</td>
							<td>1</td>
							<td>0</td>
							<td>2</td>
							<td>-2</td>
							<td>0</td>
						</tr>
					</tbody>
				</table>

				<div class="d-flex d-inline">
					<i class="fas fa-star fa-lg mr-2 ml-4"></i>
					<h6 class="black-text font-weight-bold my-auto">
						Criteriile de departajare, scrise în ordine: fază, puncte, golaveraj, atac.
					</h6>
				</div>
			</div>
		</div>
	</div>
</main>

<div class="fixed-bottom mTop">
	<?php include_once ('layout/footer.php'); ?>
</div>
