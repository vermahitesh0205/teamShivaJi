<script type="text/javascript"> $(document).ready(function(e) {
//============================================================//

//============================================================//
$("#m_country_id").on('change', function() {
	var target = $("#m_state_id").parent('div.dropdown').children('div.menu');
    target.html('');
	$("#kh_user_city").parent('div.dropdown').children('div.menu').html('');
	$("#kh_user_area_id").parent('div.dropdown').children('div.menu').html('');

$("#kh_user_city").parent('div.dropdown').children('div.text').html('Select City');
$("#kh_user_area_id").parent('div.dropdown').children('div.text').html('Select Area');

	$("#m_state_id, #kh_user_city, #kh_user_area_id").val('');


  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Checkout/country_states_list'); ?>",
    data: {id : $("#m_country_id").val()},
    dataType: "JSON",
    success: function(data) { 
      if (data.status=='success') {
        $.each(data.list, function (key, val) {
          target.append('<div class="item" data-value="'+ val.m_state_id +'">'+val.m_state_name+'</div>');
        });
      }
    }, error: function (jqXHR, status, err) {}
  });

});

$("#m_state_id").on('change', function() {
	var target = $("#kh_user_city").parent('div.dropdown').children('div.menu');
    target.html('');
	$("#kh_user_area_id").parent('div.dropdown').children('div.menu').html('');
	$("#kh_user_area_id").parent('div.dropdown').children('div.text').html('Select Area');
	$("#kh_user_city, #kh_user_area_id").val('');

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Checkout/state_cities_list'); ?>",
    data: {id : $("#m_state_id").val()},
    dataType: "JSON",
    success: function(data) { 
      if (data.status=='success') {
        $.each(data.list, function (key, val) {
          target.append('<div class="item" data-value="'+ val.m_location_id +'">'+val.m_location_city+'</div>');
        });
      }
    }, error: function (jqXHR, status, err) {}
  });

});

$("#kh_user_city").on('change', function() {
	var target = $("#kh_user_area_id").parent('div.dropdown').children('div.menu');
    target.html('');
    $("#kh_user_area_id").val('');

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Checkout/city_areas_list'); ?>",
    data: {id : $("#kh_user_city").val()},
    dataType: "JSON",
    success: function(data) { 
      if (data.status=='success') {
        $.each(data.list, function (key, val) {
          target.append('<div class="item" data-value="'+ val.area_id +'">'+val.area_name+'</div>');
        });
      }
    }, error: function (jqXHR, status, err) {}
  });

});
//=============================/==============================//

//============================================================//
$("form#frm-update-address").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-address"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Checkout/update_address'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){ location.reload(); },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});
//=============================/==============================//

//============================================================//
$("#kh_user_contact").on('change', function(){ 
  var login_id = $("#kh_user_contact").val();

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('My/check_loginid'); ?>",
    data: {login_id:login_id},
    dataType: "JSON",
    success: function(data) { 
      if(data.status=='success'){ 
        swal(data.message, {icon: "info", timer: 5000, });
        $("#kh_user_contact").val(data.current_id); 
        $("#kh_user_contact").focus();
      }
    }, error: function (jqXHR, status, err) {}
  });

});
//=============================/==============================//

//=============================/==============================//
}); </script>