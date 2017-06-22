<?php
include ("../DB/config.php");
$id = $_GET['id'];
$stmt4=$conn ->query("SELECT * FROM restaurantstable WHERE Id='$id';");
while ($row=$stmt4->fetch(PDO::FETCH_ASSOC)) {
$name=$row['restaurantName'];
$OTime=$row['openTime'];
$CTime=$row['closeTime'];
$address=$row['address'];
$img=$row['restaurantPhoto'];
}

            
  echo"<div class='container content'>
    <div class='card shopcard'>
      <div class='container-fliud'>
        <div class='wrapper row'>
          <div class='preview col-md-6'>
            
            <div class='preview-pic tab-content'>
              <div class='tab-pane active col-md-offset-1'><img src='".$img."' id='pic' /></div>
            </div>
          </div>
          <div class='col-md-4 col-md-offset-1'>
            <br>";
            
?>
            <h3 class="product-title"><?php echo $name;?></h3>
            <br>
            <h5 class="text-muted"> Opening Time : <?php echo $OTime;?> </h5>
            <h5 class="text-muted"> Closing Time &nbsp;: <?php echo $CTime;?></h5>
            <br>
            <span class="text-muted"><?php echo $address;?></span><br>
           
          </div>
        </div>
      </div>
    </div>
</div><!--end of profile -->
  <h3 class="page-header col-md-9 col-md-offset-1" style="color: #CC0000;">Available Menu</h3>
<div class="container">
      <div class="card_collection">



<?php
include ("../DB/config.php");
      
$stmt4=$conn ->query("SELECT itemtable.itemId,itemtable.itemName,itemtable.price,itemtable.itemPhoto FROM restaurantstable,itemtable WHERE restaurantstable.Id=itemtable.restaurantId and restaurantstable.Id='$id';");

while ($row=$stmt4->fetch(PDO::FETCH_ASSOC)) {

  $res_id=$row['itemId'];
  $_POST['itemId']=$res_id;
   echo"<div class='card col-md-3 col-lg-2 col-sm-6'>
          <div class='card-img text-center'>
            <a class='card-title curry' href='../main/itemDetail.php?id=$res_id'>
            <img class='card-img-top' src='".$row['itemPhoto']."' alt='Card image cap'>
            </a>
          </div>

          <div>
            
            <h4><a class='card-title curry' href='../main/itemDetail.php?id=$res_id'>".$row['itemName']."</a></h4>
            <h5 class='card-title'>".$row['price']."</h5>

          </div> 
        </div>";
  
  }
  ?>

 </div>
 </div>



<div class="jumbotron" class="col-md-10"><!--begin of map-->

  <div id="mapView">

   <script>
   function initMap() {
    var uluru = {lat: 16.807658, lng: 96.155082};
    var map = new google.maps.Map(document.getElementById('mapView'), {
      zoom: 16,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhFALMY4KzCEaCuet466sZt_UneIOe93c&callback=initMap">
  </script>


</div>

</div> 
<!--end of map -->





<!-- Modal -->
<!-- <!-- <div class="modal fade ql-modal" id="myModalAdd" tabindex="-1" role="dialog" aria-

labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!--   <div id="myModal" class="modal fade" role="dialog"> -->
    <!--  <div class="modal-dialog modal-lg"> -->

    <!-- Modal content-->
    <!-- <!-- <!-- <!-- <!-- <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="color: #CC0000;">Item Register</h3>
      </div>

      <div class="modal-body ativa-scroll">

        <div class="container">
          <div class="row" style="margin-top:60px;">

            <!-- <div class="col-md-1"></div>  -->

            <!-- <div class="col-md-4" style="margin-left: 30px;">
              <a href="../img/c1.jpg" target="_blank">
                <img src="../img/c1.jpg" class="rounded col-md-offset-1 shop_img" alt="Cinque 

Terre" height="250" width="260">
              </a>
            </div>

            <div class="col-md-4">
              <form class="form-horizontal">

                <div class="form-group">
                  <label class="col-md-2 control-label" style="margin-right: 

25px;">Name</label>
                  <div class="col-md-7">
                    <input class="form-control" id="name" type="text">
                  </div>
                </div>

                <div class="form-group" style="margin-top: 25px;">
                  <label class="col-md-2 control-label" style="margin-right: 

25px;">Price</label>
                  <div class="col-md-7">
                    <input class="form-control" id="price" type="text">
                  </div>
                </div>

                <div class="form-group" style="margin-top: 25px;">
                  <label class="col-md-2 control-label" style="margin-right: 

25px;">Description </label>
                  <div class="col-md-7">
                    <input class="form-control" id="price" type="text">
                  </div>
                </div>

                <div class="form-group" style="margin-top: 25px;">
                  <label class="col-md-2 control-label" style="margin-right: 

25px;">Category</label>
                  <div class="dropdown">
                    <button class="btn dropdown-toggle col-md-6" style="margin-left:15px;" 

type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-

expanded="true">Myanmar Food
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right"  aria-

labelledby="dropdownMenu1">
                      <li><a href="#">China Food</a></li>
                      <li><a href="#">Korea Food</a></li>
                      <li><a href="#">Indian Food</a></li>
                      <li><a href="#">Traditional Food</a></li>
                    </ul>
                  </div>
                </div>

                <div class="form-group" style="margin-top:50px; margin-left: 100px;">
                  <button type = "button" class = "btn btn-

primary">Submit</button>&nbsp;&nbsp;&nbsp;
                  <button type = "button" class = "btn btn-primary">Cancel</button>
                </div>
              </form>
            </div> -->

            <!-- <div class="col-md-4"></div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>




<!-- Modal -->
<!-- <div class="modal fade ql-modal" id="myModalEdit" tabindex="-1" role="dialog" aria-

labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!--   <div id="myModal" class="modal fade" role="dialog"> -->
    <!--  <div class="modal-dialog modal-lg"> -->

    <!-- Modal content-->
    <<!-- div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="color: #CC0000;">Item Update</h3>
      </div>

      <div class="modal-body ativa-scroll">

        <div class="container">
          <div class="row" style="margin-top:60px;"> -->
 -->
            <!-- <div class="col-md-1"></div>  -->

            <!-- <div class="col-md-4" style="margin-left: 30px;">
              <a href="../img/c1.jpg" target="_blank">
                <img src="../img/c1.jpg" class="rounded col-md-offset-1 shop_img" alt="Cinque 

Terre" height="250" width="260">
              </a>
            </div>

            <div class="col-md-4">
              <form class="form-horizontal">

                <div class="form-group">
                  <label class="col-md-2 control-label" style="margin-right: 

25px;">Name</label>
                  <div class="col-md-7">
                    <input class="form-control" id="name" type="text">
                  </div>
                </div>

                <div class="form-group" style="margin-top: 25px;">
                  <label class="col-md-2 control-label" style="margin-right: --> 

<!-- 25px;">Price</label>
                  <div class="col-md-7">
                    <input class="form-control" id="price" type="text">
                  </div>
                </div>

                <div class="form-group" style="margin-top: 25px;">
                  <label class="col-md-2 control-label" style="margin-right: 

25px;">Description </label>
                  <div class="col-md-7">
                    <input class="form-control" id="price" type="text">
                  </div>
                </div>

                <div class="form-group" style="margin-top: 25px;">
                  <label class="col-md-2 control-label" style="margin-right: 

25px;">Category</label>
                  <div class="dropdown">
                    <button class="btn dropdown-toggle col-md-6" style="margin-left:15px;" 

type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-

expanded="true">Myanmar Food
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right"  aria-

labelledby="dropdownMenu1">
                      <li><a href="#">China Food</a></li>
                      <li><a href="#">Korea Food</a></li>
                      <li><a href="#">Indian Food</a></li>
                      <li><a href="#">Traditional Food</a></li>
                    </ul>
                  </div>
                </div> -->

                <!-- <div class="form-group" style="margin-top:50px; margin-left: 100px;">
                  <button type = "button" class = "btn btn-

primary">Update</button>&nbsp;&nbsp;&nbsp;
                  <button type = "button" class = "btn btn-primary">Cancel</button>
                </div>
              </form>
            </div>

            <div class="col-md-4"></div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div> -->
 

<!-- Modal -->
<!-- <div class="modal fade ql-modal" id="myModalDelete" tabindex="-1" role="dialog" aria-

labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div id="myModal" class="modal fade" role="dialog">
     <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <!-- <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="color: #CC0000;">Item Delete</h3>
      </div>

      <div class="modal-body ativa-scroll">

        <div class="container">
          <div class="row" style="margin-top:60px;">

            <!-- <div class="col-md-1"></div>  -->

            <!-- <div class="col-md-4" style="margin-left: 30px;">
              <a href="../img/c1.jpg" target="_blank">
                <img src="../img/c1.jpg" class="rounded col-md-offset-1 shop_img" alt="Cinque 

Terre" height="250" width="260">
              </a>
            </div>

            <div class="col-md-4">
              <form class="form-horizontal">

                <div class="form-group">
                  <label class="col-md-2 control-label" style="margin-right: 

25px;">Name</label>
                  <div class="col-md-7"> -->
                    <!-- <input class="form-control" id="name" type="text">
                  </div>
                </div>

                <div class="form-group" style="margin-top: 25px;">
                  <label class="col-md-2 control-label" style="margin-right: 

25px;">Price</label>
                  <div class="col-md-7">
                    <input class="form-control" id="price" type="text">
                  </div>
                </div>

                <div class="form-group" style="margin-top: 25px;">
                  <label class="col-md-2 control-label" style="margin-right: 

25px;">Description </label>
                  <div class="col-md-7">
                    <input class="form-control" id="price" type="text">
                  </div>
                </div> -->

                <!-- <div class="form-group" style="margin-top: 25px;">
                  <label class="col-md-2 control-label" style="margin-right: 

25px;">Category</label>
                  <div class="dropdown">
                    <button class="btn dropdown-toggle col-md-6" style="margin-left:15px;" 

type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-

expanded="true">Myanmar Food
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right"  aria-

labelledby="dropdownMenu1">
                      <li><a href="#">China Food</a></li>
                      <li><a href="#">Korea Food</a></li>
                      <li><a href="#">Indian Food</a></li>
                      <li><a href="#">Traditional Food</a></li>
                    </ul>
                  </div>
                </div> -->

                <!-- <div class="form-group" style="margin-top:50px; margin-left: 100px;">
                  <button type = "button" class = "btn btn-

primary">Delete</button>&nbsp;&nbsp;&nbsp;
                  <button type = "button" class = "btn btn-primary">Cancel</button>
                </div>
              </form>
            </div>

            <div class="col-md-4"></div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>   
  -->
