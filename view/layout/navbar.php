<!--Navbar-->
<nav class="navbar pink accent-4">
    <div class="container">
  <a class="navbar-brand" href=""></a>
    <!-- Collapse button -->
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#text"
    aria-controls="text" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="text">
    <div class="d-flex d-inline-block justify-content-center"><img class="my-auto" src="<?php echo site_url() . 'img/adeplast.png'; ?>" alt="Cupa Ligii AdePlast" style="width: 77px;height: 52px;">
    <div class="ml-3">
      <h4 class="white-text font-weght-bold">Cupa Ligii Adeplast 2016-2017</h4>
      <span class="text-muted white-text">Ultima ediție, 14 echipe, o singură câștigătoare!</span>
    </div></div>
  </div>

</div>
</nav>
<!--Navbar-->

<!--Navbar-->
<nav class="navbar navbar-expand-lg pink darken-1 py-0">
  <!-- Navbar brand -->
<div class="container">

  <a class="navbar-brand py-1 mx-5" href="<?php echo site_url() . 'index.php'; ?>"><img src="<?php echo site_url () . '/img/an2017.jpg'; ?>" alt="2017" id="imgAn" data-toggle="tooltip" data-placement="right" title="Pagina de start"></a>

  <!-- Collapse button -->
  <button class="navbar-toggler custom-toggler py-1 mr-3" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item py-1 <?php if($page_title == 'Cupa Ligii')
      {
      echo $status;
      }
      else
      {
        echo '';
      } ?>">
        <a class="nav-link" href="<?php echo site_url() . 'index.php'; ?>">Acasă
        </a>
      </li>
      <li class="nav-item py-1 <?php if($page_title == 'Jucători')
      {
      echo $status;
      }
      else
      {
        echo '';
      } ?>">
        <a class="nav-link" href="<?php echo site_url() . 'view/jucatori.php'; ?>">Jucători</a>
      </li>
      <li class="nav-item py-1 <?php if($page_title == 'Clasament')
      {
      echo $status;
      }
      else
      {
        echo '';
      } ?>">
        <a class="nav-link" href="<?php echo site_url() . 'view/clasament.php'; ?>">Clasament</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item <?php if($comp == 1)
      {
      echo $status;
      }
      else
      {
        echo '';
      } ?> dropdown py-1">
        <a class="nav-link dropdown-toggle white-text font-weght-bold" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Competiție</a>
        <div class="dropdown-menu dropdown-default py-0" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item <?php if($page_title == 'Sferturi')
      {
      echo $statusD;
      }
      else
      {
        echo '';
      } ?> py-2" href="<?php echo site_url() . 'view/sfert.php'; ?>">Sferturi
          </a>
          <a class="dropdown-item <?php if($page_title == 'Semi-finale')
      {
      echo $statusD;
      }
      else
      {
        echo '';
      } ?> py-2" href="semi-finale.php">Semi-Finale
          </a>
          <a class="dropdown-item <?php if($page_title == 'Finala')
      {
      echo $statusD;
      }
      else
      {
        echo '';
      } ?> py-2" href="finala.php">Finala
          </a>
        </div>
      </li>
      <li class="nav-item py-1 <?php if($page_title == 'Rezumate')
      {
      echo $status;
      }
      else
      {
        echo '';
      } ?>">
        <a class="nav-link" href="<?php echo site_url() . 'view/videos.php'; ?>">Reumate</a>
      </li>

    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</div>
<!-- Container -->
</nav>
<!--/.Navbar-->
