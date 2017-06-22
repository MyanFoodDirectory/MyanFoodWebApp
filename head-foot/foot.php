      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="../Bootstrap/js/bootstrap.min.js"></script>
      <script src="../js/food.js"></script>
      <script src="../js/clockface.js"></script>
      <script src="../js/clock.js"></script>
      
      <script type="text/javascript" src="../Bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../Bootstrap/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
 <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var total = 10;
  var used = 6;
  var free = 4;
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Free', free],
  ['Used', used]
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Available Package', 'width':600, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script> 


    <script type="text/javascript">
    $('.form_time').datetimepicker({
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 1,
    minView: 0,
    maxView: 1,
    forceParse: 0
   });

    
   $(document).ready( function() {
    $('.dropdown-toggle').dropdown();
   });

   $(function(){
    $(".shop li a").click(function(){
      $(".but:first-child").text($(this).text());
      $(".but:first-child").val($(this).text());
     }); 
   });

   $(function(){
    $(".dropdown-menu li a").click(function(){
      $(".but:first-child").text($(this).text());
      $(".but:first-child").val($(this).text());
     }); 
   });

 
  function Unchecked(){
    document.getElementById("latitude").disabled=true;
    document.getElementById("longitude").disabled=true;
  }
  function Checked(){
    document.getElementById("latitude").disabled=false;
    document.getElementById("longitude").disabled=false;
  }
   $(document).ready(function(){
    $('.showMap').on('change',function(){
      var isChecked = $(this).prop('checked');
      if (isChecked) {
        Checked();
      } else {
        Unchecked();
      }
    });
   });
  </script>

 

  <script type="text/javascript">
                $(document).ready(function(){
                  $('.showPassword').on('change',function(){
                    var isChecked = $(this).prop('checked');
                    if (isChecked) {
                      $('.my-password').attr('type','text');
                    } else {
                      $('.my-password').attr('type','Password');
                    }
                  });
                });
                </script>



        
  </body>
  </html>