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