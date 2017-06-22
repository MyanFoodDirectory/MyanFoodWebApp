<div class="container content">
    <div class="row">
        <h2 class="category text-center" style="color: #CC0000;">Package Status</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div id="piechart"></div>
        </div>
        <div class="col-md-5" style="height: 350px;overflow-y: auto;margin-top: 10px;" >
    <ul class="list-group col-md-12">
           <h4><li class="list-group-item justify-content-between" style="color: #CC0000;box-shadow: 0 2px 5px 0 rgba(121, 85, 72, 0.7), 0 2px 10px 0 rgba(121, 85, 72, 0.7);">
            Package
                 <span class="badge badge-primary badge-pill ">Expired Date</span>
               </li>
           </h4>

      <?php
        include ("../DB/config.php");
        $stmt=$conn ->query("SELECT * FROM menupackage WHERE restaurantId='593e47e11eaa288f03829b28';");
        while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) 
        {
            echo "<div>
            <li class='list-group-item justify-content-left'>
                ".$row['packageName']."
              
                <span class='badge badge-primary badge-pill  justify-content-right'>".$row['endDate']."</span>
            </li></div>";
        } 
      ?>
    </ul>
    </div><!-- end of row -->
</div> <!-- end of container -->

    
<div class="container">
    <div class="col-md-11 shopcard">
      <div class="container-fliud">
        <div class="row" style="margin-bottom: 10px;">
            <p class="text-center" style="color: green;font-family: Roboto;"><span class="  glyphicon glyphicon-upload"></span> Upload free 10 menu.</p>
            </div>
          
        <div class="wrapper row">
            
            <a type="button" data-toggle="modal" data-target="#myModalPkg" class = "col-md-5 btn btn-primary btn-block wave-effect" style="margin-top: 15px;">
                Buy New Package <span style="color: yellow;">(+10 items)</span>
            </a>
           <a type="button" data-toggle="modal" data-target="#myModalUgd" class = "col-md-5 btn btn-primary btn-block wave-effect" style="margin-top: 15px;">
                Upgrade Package <span style="color: yellow;"></span>
            </a>
          </div>
        </div>
        
      </div>
    </div>
</div><!--end of profile -->
</div>


<!-- Modal -->
<div class="modal fade ql-modal col-md-3 col-md-offset-5" id="myModalPkg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header col-md-4">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="color: #CC0000;">Buy New Package</h4>
        </div>
        <div class ="container" style="margin-top:60px;">
          <div class="row" style="margin-top:30px;">

            <div class="col-md-9">
              <form class="form-horizontal" action="../action/buyMenu_action.php" method="post">

                <div class="form-group">
                 <div class="col-md-4">
                    <input class="form-control" placeholder="Enter your package name" name="packagename" id="name" type="text">
                  </div>
                </div>

                <div class="form-group" style="margin-top:20px;margin-left: 70px;">
                  <input type = "submit" class = "btn btn-primary" value="Save" name="save">&nbsp;&nbsp;&nbsp;
                  <input type = "reset" class = "btn btn-primary" value="Cancel">
                </div>
              </form>
            </div>

          </div>
        
      </div>

    </div>

  </div>
</div>


<!-- Modal -->

  <!-- Modal -->
  <div class="modal fade" id="myModalUgd" role="dialog">
    
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upgrade Package</h4>
        </div>
        <div class="modal-body">
          <div class='table-responsive'>
            <form action="../action/upgrade_action.php" method="post"> 
            Please Choose No of Month:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <select name="month">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>         
             <table class='table'>
              <thead>
                <tr>
                  <th>Package name</th>
                  <th>Expired date</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
               
               <?php 
                 include("../DB/config.php");
                 $stmt=$conn->query("SELECT * FROM menupackage WHERE restaurantId='593e47e11eaa288f03829b28';");
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                 {
           
                  echo "<tr>
                        <td>".$row['packageName']."</td>
                        <td>".$row['endDate']."</td>
                        <td><input type='checkbox' class='btn btn-danger' name='upgrade[]' id='upgrade[]' value=".$row['packageName']."></td>
                        </tr>";
                 }
               ?>
              </tbody>
             </table>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" value="Upgrade">
        </div>
           </form>
      </div><!-- end of content -->
      
    </div><!-- end of dialog -->
  </div> <!-- end of modal -->


