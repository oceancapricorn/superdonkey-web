<?php
require_once '../models/DBConnectModel.php';  
require_once '../models/BarItemsModel.php';  
require_once '../models/BarCategoriesModel.php';  

$barItemsModel = new BarItemsModel();
$salateItems = $barItemsModel->getAllSalateItems();
$sokoviItems = $barItemsModel->getAllSokoviItems();
$smoothiesItems = $barItemsModel->getAllSmoothiesItems();
// not used for now
$barCategoriesModel = new BarCategoriesModel();

include("header.php");



?>




<div class="container">
  <div class="panel-heading">
        <h3 class="panel-title text-uppercase text-center alert alert-success" style="font-family: 'Amatic SC', cursive; font-weight: bold; font-size: 50px;">Salate</h3>
     </div>
    <table class="table table-striped table-bordered table-hover table-condensed text-uppercase text-center"> 
      <?php 
      foreach($salateItems as $item) { ?>
        <tr>
        <th><?php echo $item['title']?></th>
        <th><?php echo $item['description']?></th>
        <th><?php echo $item['price']?></th>
            <?php }?>
        </tr>
    </table>
    <hr class="my-4">


     <div class="panel-heading" id="sokovi">
        <h3 class="panel-title text-uppercase text-center alert alert-info" style="font-family: 'Amatic SC', cursive; font-weight: bold; font-size: 50px;">Sokovi</h3>
     </div>
    <table class="table table-striped table-bordered table-hover table-condensed text-uppercase text-center"> 
      <?php 
      foreach($sokoviItems as $item) { ?>
        <tr>
        <th><?php echo $item['title']?></th>
        <th><?php echo $item['description']?></th>
        <th><?php echo $item['price']?></th>
            <?php }?>
        </tr>
    </table>
    <hr class="my-4">


      <div class="panel-heading" id="smoothies1">
        <h3 class="panel-title text-uppercase text-center alert alert-danger" style="font-family: 'Amatic SC', cursive; font-weight: bold; font-size: 50px;">Smoothies</h3>
     </div>
    <table class="table table-striped table-bordered table-hover table-condensed text-uppercase text-center">
       <table class="table table-striped table-bordered table-hover table-condensed text-uppercase text-center"> 
      <?php 
      foreach($smoothiesItems as $item) { ?>
        <tr>
        <th><?php echo $item['title']?></th>
        <th><?php echo $item['description']?></th>
        <th><?php echo $item['price']?></th>
            <?php }?>
        </tr>
    </table>
    <div>
    <a href="#top"><button type="button" class="btn btn-outline-dark btn-lg">Vrh strane</button></a>
  </div>
  </div>

  

<?php 
include ("footer.php");
 ?>