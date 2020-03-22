<?php
	include_once('include/head.php');
  include_once('sys/config.php');
?>

<div id="demo" class="carousel slide container-b" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide/slide1.png" alt="minecraft" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/slide/slide2.png" alt="minecraft" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/slide/slide3.png" alt="minecraft" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/slide/slide4.png" alt="minecraft" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  <?php if (isset($_SESSION['realname'])) { ?>
        <div class="body-b centered-b">
          <h1 class="animation-b">Welcome, <?php echo " " . $_SESSION['realname'];?></h1>
        </div>
      <?php } else { ?>
        <div class="body-b centered-b">
          <h1 class="animation-b">Hello, Visitor!</h1>
        </div>
      <?php } ?>
</div>
<?php if (isset($_SESSION['realname'])) { ?>
  <div class="container py-5" align="center">
    <h4 class="display-5">Welcome, <?php echo " " . $_SESSION['realname'];?></h4>
  </div>
<div class="box-preview">
  <h3 align="center" class="display-6">Preview Product</h3><hr>
  <div>
  <div class="album">
  <h1 class="container py-2">Survival Server</h1>
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm py-4">
            <div align="center">
              <img src="img/Oak_Wood.png" height="200px" width="200px">
            </div>
            <div class="card-body" align="center">
              <h4 class="card-text" align="center">Oak Wood</h4>
              <p class="card-text"><?php echo $price['Oak_Wood_Shop1'];?> points</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm py-4">
            <div align="center">
              <img src="img/Gold_Block.png" height="200px" width="200px">
            </div>
            <div class="card-body" align="center">
              <h4 class="card-text" align="center">Gold Block</h4>
              <p class="card-text"><?php echo $price['Gold_Block_Shop1'];?> points</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm py-4">
            <div align="center">
              <img src="img/Diamond.png" height="200px" width="200px">
            </div>
            <div class="card-body" align="center">
              <h4 class="card-text" align="center">Diamond</h4>
              <p class="card-text"><?php echo $price['Diamond_Shop1'];?> points</p>
            </div>
          </div>
        </div>

      </div>
</div>


<div class="album">
  <h1 class="container py-2">Skyblock Server</h1>
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm py-4">
            <div align="center">
              <img src="img/Emerald.png" height="200px" width="200px">
            </div>
            <div class="card-body" align="center">
              <h4 class="card-text" align="center">Emerald</h4>
              <p class="card-text"><?php echo $price['Emerald_Shop2'];?> points</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm py-4">
            <div align="center">
              <img src="img/Coal.png" height="200px" width="200px">
            </div>
            <div class="card-body" align="center">
              <h4 class="card-text" align="center">Coal</h4>
              <p class="card-text"><?php echo $price['Coal_Shop2'];?> points</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm py-4">
            <div align="center">
              <img src="img/Diamond_Sword.png" height="200px" width="200px">
            </div>
            <div class="card-body" align="center">
              <h4 class="card-text" align="center">Diamond Sword</h4>
              <p class="card-text"><?php echo $price['Diamond_Sword_Shop2'];?> points</p>
            </div>
          </div>
        </div>

      </div>

</div>
</div>
</div>
</div>
</div>
<?php } else { ?>
  <div class="container py-5" align="center">
    <a href="register" class="mymenu">Register</a>
    <a href="login" class="mymenu">Login</a>
</div>
<?php } ?>





<!-- <div class="container py-5">
    <div class="container">
      <?php if (isset($_SESSION['realname'])) { ?>
        <h1 class="display-4">Welcome, <?php echo " " . $_SESSION['realname'];?></h1>
      <?php } else { ?>
        <h1 class="display-4">Hello, Visitor!</h1>
      <?php } ?>
      
      <p>This is PSM Com Minecraft Server's website.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
    </div>
  </div>
-->
<?php
include_once('include/footer.php');
?>