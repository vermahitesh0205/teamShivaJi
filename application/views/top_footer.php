<!-- ======================Top-Footer============Fix========= -->

<!-- ======================Top-Footer============Fix========= -->
<script src="<?php echo base_url('assets/js/vertical-responsive-menu.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/OwlCarousel/owl.carousel.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/semantic/semantic.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/night-mode.js'); ?>"></script>
<!-- ======================Top-Footer============Fix========= -->

<!-- ======================Top-Footer============Fix========= -->
<script src="<?php echo base_url('assets/sweet-alerts/js/sweetalert.min.js')?>"></script>
<script src="<?php echo base_url('assets/sweet-alerts/js/custom-sweetalerts.js')?>"></script>
<!-- ======================Top-Footer============Fix========= -->

<!-- ======================Top-Footer============Fix========= -->

<script type="text/javascript">

	  $(document).on('click',".add-to-wishlist", function(){
        var id = $(this).data('id');
        var type = $(this).data('type');

       
        var link = "<?php echo site_url('Course/add_to_wishlist'); ?>";
       
        $.ajax({
            type: "POST",
            url: link ,
            data: {id : id,type:type},
            dataType: "JSON", 
            success: function(data) { 

				if(data.status=='success'){
				swal(data.message, {icon: "success",  });
				setTimeout(function(){ location.reload(); },100);
				}else{ 
				   swal(data.message, {icon: "error",  });
				}   
              
            },
        }); 
       
    });

    $(document).ready(function(){
        $('.nav-link').on("click", function(){

$('.nav-link').removeClass('active');

$(this).addClass('active');
});
});
</script>