<?php
	include_once('include/head.php');
  include_once('sys/config.php');
?>
<div class="album py-5">
  <h1 class="container py-2" style="color: white;">Survival Server</h1>
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
              <div class="align-items-center">
                <div align="center">
                  <form action="sys/buy" method="post">
                    <button type="submit" class="btn btn-success" style="width: 100px;" name="Oak_Wood_Shop1" value="Oak_Wood_Shop1">Buy</button>
                  </form>
                </div>
              </div>
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
              <div class="align-items-center">
                <div align="center">
                  <form action="sys/buy" method="post">
                    <button type="submit" class="btn btn-success" style="width: 100px;" name="Gold_Block_Shop1" value="Gold_Block_Shop1">Buy</button>
                  </form>
                </div>
              </div>
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
              <div class="align-items-center">
                <div align="center">
                  <form action="sys/buy" method="post">
                    <button type="submit" class="btn btn-success" style="width: 100px;" name="Diamond_Shop1" value="Diamond_Shop1">Buy</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm py-4">
            <div align="center">
              <img src="img/Emerald.png" height="200px" width="200px">
            </div>
            <div class="card-body" align="center">
              <h4 class="card-text" align="center">Emerald</h4>
              <p class="card-text"><?php echo $price['Emerald_Shop1'];?> points</p>
              <div class="align-items-center">
                <div align="center">
                  <form action="sys/buy" method="post">
                    <button type="submit" class="btn btn-success" style="width: 100px;" name="Emerald_Shop1" value="Emerald_Shop1">Buy</button>
                  </form>
                </div>
              </div>
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
              <p class="card-text"><?php echo $price['Coal_Shop1'];?> points</p>
              <div class="align-items-center">
                <div align="center">
                  <form action="sys/buy" method="post">
                    <button type="submit" class="btn btn-success" style="width: 100px;" name="Coal_Shop1" value="Coal_Shop1">Buy</button>
                  </form>
                </div>
              </div>
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
              <p class="card-text"><?php echo $price['Diamond_Sword_Shop1'];?> points</p>
              <div class="align-items-center">
                <div align="center">
                  <form action="sys/buy" method="post">
                    <button type="submit" class="btn btn-success" style="width: 100px;" name="Diamond_Sword_Shop1" value="Diamond_Sword_Shop1">Buy</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm py-4">
            <div align="center">
              <img src="img/Diamond_Shovel.png" height="200px" width="200px">
            </div>
            <div class="card-body" align="center">
              <h4 class="card-text" align="center">Diamond Shovel</h4>
              <p class="card-text"><?php echo $price['Diamond_Shovel_Shop1'];?> points</p>
              <div class="align-items-center">
                <div align="center">
                  <form action="sys/buy" method="post">
                    <button type="submit" class="btn btn-success" style="width: 100px;" name="Diamond_Shovel_Shop1" value="Diamond_Shovel_Shop1">Buy</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm py-4">
            <div align="center">
              <img src="img/Diamond_Pickaxe.png" height="200px" width="200px">
            </div>
            <div class="card-body" align="center">
              <h4 class="card-text" align="center">Diamond Pickaxe</h4>
              <p class="card-text"><?php echo $price['Diamond_Pickaxe_Shop1'];?> points</p>
              <div class="align-items-center">
                <div align="center">
                  <form action="sys/buy" method="post">
                    <button type="submit" class="btn btn-success" style="width: 100px;" name="Diamond_Pickaxe_Shop1" value="Diamond_Pickaxe_Shop1">Buy</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm py-4">
            <div align="center">
              <img src="img/Diamond_Axe.png" height="200px" width="200px">
            </div>
            <div class="card-body" align="center">
              <h4 class="card-text" align="center">Diamond Axe</h4>
              <p class="card-text"><?php echo $price['Diamond_Axe_Shop1'];?> points</p>
              <div class="align-items-center">
                <div align="center">
                  <form action="sys/buy" method="post">
                    <button type="submit" class="btn btn-success" style="width: 100px;" name="Diamond_Axe_Shop1" value="Diamond_Axe_Shop1">Buy</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
</div>
</div>
<?php
include_once('include/footer.php');
?>