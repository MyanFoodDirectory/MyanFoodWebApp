<div class="container shop_content">
  
  <h1 class="h1-responsive text-center" style="margin-bottom: 30px;color:#CC0000;text-shadow: 2px 2px 2px #667eaa;">Upload Restaurant</h1>

  <div class="row">

    <div class="col-sm-6">	 
      
      <a href="../img/c1.jpg" target="_blank">
        <img src="../img/c1.jpg" class="rounded col-md-offset-1 shop_img" alt="Cinque Terre" height="250" width="400">
      </a>

      <div class="row">

    	  <div class="form-group" style="margin-top: 40px">
          <label for="time_input" class="col-md-4 control-label col-sm-offset-1">Open Time : </label>
          <div class="input-group date form_time col-md-5" data-date="" data-date-format="hh:ii" data-link-field="time_input" data-link-format="hh:ii">
            <input class="form-control" size="16" type="text" value="" readonly>
            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
          <input type="hidden" id="dtp_input" value="" /><br/>
        </div>

        <div class="form-group" style="margin-top: 40px">
          <label for="time_input" class="col-md-4 control-label col-sm-offset-1">Close Time : </label>
          <div class="input-group date form_time col-md-5" data-date="" data-date-format="hh:ii" data-link-field="time_input" data-link-format="hh:ii">
            <input class="form-control" size="16" type="text" value="" readonly>
            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
          <input type="hidden" id="dtp_input" value="" /><br/>
        </div>

      </div>

    </div>

    <div class="col-sm-6">

      <div class="row">
        <div class="col-sm-4">
          <label for="name" class="control-label col-sm-offset-6">Name:</label> 
        </div>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="name" placeholder="Input">
        </div>
      </div>

      <div class="row" style="margin-top: 50px">
        <div class="col-sm-4">
          <label for="phone" class="control-label col-sm-offset-6">Phone:</label> 
        </div>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="phone" placeholder="Input">
        </div>
      </div>

      <div class="row" style="margin-top: 50px">
        <div class="col-sm-4">
          <label for="address" class="control-label  col-sm-offset-6">Address:</label> 
        </div>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="address" placeholder="Input">
        </div>
      </div>

        <label class="checkbox-inline col-sm-offset-2" style="font-size: 13px; margin-top: 30px">
          <input type="checkbox" class="showMap" value="AddMap"><b>Add Map</b>
        </label>
      <div id="map" class="col-md-9 col-md-offset-2">
        <div class="row" style="margin-top: 20px">
          <div class="col-sm-4">
            <label for="latitude" class="control-label  col-sm-offset-4">Latitude:</label> 
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="latitude" placeholder="Input">
          </div>
        </div>

        <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
          <div class="col-sm-4">
            <label for="longitude" class="control-label  col-sm-offset-4">Longitude:</label> 
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="longitude" placeholder="Input">
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 50px">
        <div class="col-sm-4">
          <label for="township" class="control-label col-sm-offset-6">Township:</label> 
        </div>
        <div class="col-sm-6">
          <div class="btn-group">
            <button class="but">Select Township From List</button>
            <button class="but dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span>
            </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="#">ကျောက်တံတား</a></li>
                <li><a tabindex="-1" href="#">ကမာရွတ်</a></li>
                <li><a tabindex="-1" href="#">Item III</a></li>
              </ul>
          </div>
        </div>
      </div>

    </div>

  </div>

  <div class="row">
    
    <div class="col-sm-6">
      
    </div>

    <div class="col-sm-6">

      <div class="row">
        
          <button type="button" class="btn btn-info btn-shop col-md-3 col-md-offset-4">Submit</button>
        
          <button type="button" class="btn btn-info btn-shop col-md-3 col-md-offset-1">Cancel</button>
        
      </div>

    </div>

  </div>

</div>
