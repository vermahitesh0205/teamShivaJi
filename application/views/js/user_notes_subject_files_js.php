<script type="text/javascript"> $(document).ready(function(e) {
//============================================================//

//============================================================//
function check_file_exist(urlToFile='') {
  if (urlToFile=='') { return false; }
  var xhr = new XMLHttpRequest(); xhr.open('HEAD', urlToFile, false); xhr.send();
  return (xhr.status == "404") ? false : true;
}
//=============================/==============================//

//============================================================//
$('.notes-file-list').on("click", ".show-file-btn", function(){
  var media_link  = "<?php echo base_url('admin/uploads/notes/'); ?>"; 
  var media_title = $(this).data('fn');
  if (media_title != '') {
    if (check_file_exist(media_link+media_title)) {
      $(".notes-file-view #file-target").html('<iframe style="width: 100%; min-height:800px;" src="'+media_link+media_title+'" allowfullscreen></iframe>');
      $(".notes-file-view").show();
      $(".notes-file-list").hide();
    }else{ swal("File Not Found.", { icon: "error", timer: 2000, }); }
  }else{ swal("File Not Uploaded.", { icon: "error", timer: 2000, }); }

});

$('.notes-file-view').on("click", ".hide-file-btn", function(){
      $(".notes-file-view #file-target").html('');
      $(".notes-file-list").show();
      $(".notes-file-view").hide();

});
//=============================/==============================//

//=============================/==============================//
}); </script>