      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="../Bootstrap/js/bootstrap.min.js"></script>
      <script src="../js/food.js"></script>
      <script type="text/javascript" src="../Bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../Bootstrap/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
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