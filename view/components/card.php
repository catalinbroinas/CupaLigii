  <div class="card bg-dark white-text hoverable" style="height: 100%; width: 100%;">
    <div class="row no-gutters">
      <div class="col-sm-5">
        <img src="<?php echo site_url() . 'img/' . $img; ?>" alt="<?php echo $name; ?>" class="card-img-top" style="height: 100%;">
      </div>
      <div class="col-sm-7">
        <div class="card-header card-headerJ text-center d-flex d-inline">
          <i class="mr-1 mr-lg-2 my-auto"><img src="<?php echo site_url() . 'img/' . $imgI; ?>" alt="<?php echo $nameI; ?>" style="width: 1.5rem; height: 1.5rem;"></i>
          <h6 class="card-title my-auto"><?php echo $name; ?></h6>
        </div>
        <div class="card-body card-bodyJ pb-1 pt-3">
          <div class="card-text d-flex justify-content-between my-auto">
            <p class="white-text my-1">Post</p><p class="white-text my-1"><?php echo $p; ?></p>
          </div>
          <div class="card-text d-flex justify-content-between my-auto">
            <p class="white-text my-1">Vârstă</p><p class="white-text my-1"><?php echo $v; ?></p>
          </div>
          <div class="card-text d-flex justify-content-between my-auto">
            <p class="white-text my-1">Naționalitate</p><p class="white-text my-1"><?php echo $n; ?></p>
          </div>
          <div class="card-text d-flex justify-content-between my-auto">
            <p class="white-text my-1">Valoare</p><p class="white-text my-1"><?php echo $c; ?> <i class="fas fa-euro-sign ml-1 white-text"></i></p>
          </div>
          <div class="card-text d-flex justify-content-between my-auto">
            <p class="white-text my-1">Meciuri jucate</p><p class="white-text my-1"><?php echo $m; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>