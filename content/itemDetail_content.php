 <?php
 include ("../DB/config.php");
 $id = $_GET['id'];

 $stmt4=$conn ->query("SELECT restaurantstable.address,itemtable.itemName,itemtable.price,itemtable.descripton,itemtable.itemPhoto FROM restaurantstable,itemtable WHERE itemtable.itemId='$id' AND itemtable.restaurantId=restaurantstable.Id ;");
while ($row=$stmt4->fetch(PDO::FETCH_ASSOC)) {
$name=$row['itemName'];
$price=$row['price'];
$description=$row['descripton'];
$img=$row['itemPhoto'];
$add=$row['address'];
}



?>


<div class="container-fluid content" style="margin-top: 40px;">
  <div class="row">
    <div class="col-sm-2">
     
    </div>

    <div class="col-sm-8">
      <div class="row">
       <img src="<?php echo $img; ?>" class="bg-1">
       </div>
       <div class="row">
       <h2><?php echo $name; ?></h2>
       <h4><?php echo $price;?></h4>
      <div class="container well well-sg col-sm-12">
      <p><?php echo $description;?></p>
    
      </div>
       </div>
       <hr align="left" width="100%" style="height:1px;border-top:1px solid #f00">
       <div class="row">
       <div class="container well well-sg col-sm-12">

      <p class="col-sm-8"><?php echo $add; ?></p>
      <button type="button" class="btn btn-primary col-md-4">More about shop>></button>
      </div>
       </div>
    </div>

    <div class="col-sm-2">
      
    </div>
  </div>
</div>