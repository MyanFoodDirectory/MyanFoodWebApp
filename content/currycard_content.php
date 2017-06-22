<?php
$id = $_GET['id'];
?>
<div class="container">
<form action="../content/.." method="POST">
        <div class="row">
          <h2 class="h2-responsive category"><?php echo $id; ?></h2>
        </div>

        <div class="card_collection">
         
          <?php
          include("../DB/config.php");

          try{

    $stmt = $conn->prepare("SELECT restaurantstable.Id,restaurantstable.restaurantName,restaurantstable.restaurantphoto,restaurantstable.townshipName FROM restaurantstable,itemtable where itemtable.restaurantId=restaurantstable.Id and itemtable.category='$id';"); 
      $stmt->execute();

      $results = $stmt->fetchAll();


      foreach ($results as $value) {
        $res_id=$value['Id'];
        $_POST['Id']=$res_id;
        $img_path=$value['restaurantphoto'];
        $res_name=$value['restaurantName'];
         $township=$value['townshipName'];
       echo"<div class='card col-md-3 col-lg-2 col-sm-6'>
            <div class='card-img text-center'>
              <img class='card-img-top' src='".$img_path."' alt='Card image cap'>
            </div>
            
            <div class='card-block'>
              <h5><a class='card-title curry' href='../main/userView_OwnerProfile.php?id=$res_id'>".$res_name."</a></h5>
              <h5 class='card-title'>".$township."</h5>
            </div>
          </div>";

      }

  }catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

           
              
              
            
         
            $conn = null;
        
        ?>
        </form>


         


          
<!--
          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/chicken1.jpg" alt="Card image cap">
            </div>
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">Lottria</a></h4>
              <h5 class="card-title">Shwe Gone Daing</h5>
            </div>
          </div>

          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/chicken1.jpg" alt="Card image cap">
            </div>
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">KFC</a></h4>
              <h5 class="card-title">San Chaung</h5>
            </div>
          </div>

          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/images.jpg" alt="Card image cap">
            </div>
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">KFC</a></h4>
              <h5 class="card-title">San Chaung</h5>
            </div>
          </div>

          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/c4.jpg" alt="Card image cap">
            </div>
            
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">KFC</a></h4>
              <h5 class="card-title">San Chaung</h5>
            </div>
          </div>

          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/images3.jpg" alt="Card image cap">
            </div>
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">KFC</a></h4>
              <h5 class="card-title">San Chaung</h5>
            </div>
          </div>

          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/chicken1.jpg" alt="Card image cap">
            </div>
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">KFC</a></h4>
              <h5 class="card-title">San Chaung</h5>
            </div>
          </div>

          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/images.jpg" alt="Card image cap">
            </div>
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">KFC</a></h4>
              <h5 class="card-title">San Chaung</h5>
            </div>
          </div>

          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/c2.jpg" alt="Card image cap">
            </div>
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">KFC</a></h4>
              <h5 class="card-title">San Chaung</h5>
            </div>
          </div>

          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/c4.jpg" alt="Card image cap">
            </div>
            
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">KFC</a></h4>
              <h5 class="card-title">San Chaung</h5>
            </div>
          </div>

          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/images3.jpg" alt="Card image cap">
            </div>
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">KFC</a></h4>
              <h5 class="card-title">San Chaung</h5>
            </div>
          </div>

          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/chicken1.jpg" alt="Card image cap">
            </div>
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">KFC</a></h4>
              <h5 class="card-title">San Chaung</h5>
            </div>
          </div>

          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/images.jpg" alt="Card image cap">
            </div>
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">KFC</a></h4>
              <h5 class="card-title">San Chaung</h5>
            </div>
          </div>

          <div class="card col-md-3 col-lg-2 col-sm-6">
            <div class="card-img text-center">
              <img class="card-img-top" src="../img/c2.jpg" alt="Card image cap">
            </div>
            <div class="card-block">
              <h4><a class="card-title curry" href="../main/itemDetail.php">KFC</a></h4>
              <h5 class="card-title">San Chaung</h5>
            </div>
          </div>

        </div>
      </div>-->