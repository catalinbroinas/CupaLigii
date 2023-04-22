				<div class="card hoverable">
					<div class="view">
						<img src="<?php echo site_url() . 'img/' . $img; ?>" alt="<?php echo $altI; ?>" class="card-img-top img-fluid">
						<div class="mask waves-effect waves-white flex-center rgba-black-slight">
							<i class="fas fa-play fa-2x white-text"></i>
						</div>
						<a href="#" data-toggle="modal" data-target="#<?php echo $dataTarget; ?>" class="overlay">
							<div class="mask rgba-white-slight flex-center">
								<h1 class="font-weight-bold white-text mt-5 mr-3 pt-4">Play</h1>
							</div>
						</a>
					</div>
					<div class="card-header card-headerV d-flex justify-content-around">
						<img src="<?php echo site_url() . 'img/' . $imgIS; ?>" alt="ACS Poli Timișoara" style="width: 3rem;height: 3rem;">
						<h3 class="vs my-auto">VS</h3>
						<img src="<?php echo site_url() . 'img/' . $imgID; ?>" alt="ACS Poli Timișoara" style="width: 3rem;height: 3rem;">
					</div>
				</div>