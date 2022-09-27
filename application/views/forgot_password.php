<!DOCTYPE html>
<html lang="en">
<head>
<!-- ======================Top-Header============Fix========= -->
<?php $this->view('top_header'); ?>
<!-- ======================Top-Header============Fix========= -->
</head>
<body>
<!-- ======================================================== -->

<!-- ======================================================== -->
<!-- Signup Start -->
<div class="sign_in_up_bg">
	<div class="container">
		<div class="row justify-content-lg-center justify-content-md-center">
			<div class="col-lg-12">
				<div class="main_logo25" id="logo">
	    <?php $app_logo = DefaultLogoLink;  $logo_title = get_settings('app_logo');
	        if (!empty($logo_title)) { if (file_exists('admin/uploads/'.$logo_title)){
	          $app_logo = base_url('admin/uploads/').$logo_title;
	        } }
	    ?>
					<a href="<?php echo site_url('Home'); ?>"><img src="<?php echo $app_logo; ?>" alt="" style="max-height: 62px;"></a>
					<a href="<?php echo site_url('Home'); ?>"><img src="<?php echo $app_logo; ?>" class="logo-inverse" alt="" style="max-height: 62px;"></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-8">
				<div class="sign_form">
					<h2>Request a Password Reset</h2>
					<form>
						<div class="ui search focus mt-50">
							<div class="ui left icon input swdh95">
								<input class="prompt srch_explore" type="email" name="emailaddress" value="" id="id_email" required="" maxlength="64" placeholder="Email Address">															
								<i class="uil uil-envelope icon icon2"></i>
							</div>
						</div>
						<button class="login-btn" type="submit">Reset Password</button>
					</form>
					<p class="mb-0 mt-30">Go Back <a href="<?php echo site_url('Login'); ?>">Log-In</a></p>
				</div>
<?php $fav_img = base_url('assets/images/fav.png'); 
//$fav_img_title = get_settings('app_icon');
if (!empty($fav_img_title)) { if (file_exists('admin/uploads/'.$fav_img_title)){
  $fav_img = base_url('admin/uploads/').$fav_img_title;
} } ?>
				<div class="sign_footer"><img src="<?php echo $fav_img; ?>" alt="" style="max-height: 32px;"><strong><?php echo get_settings('app_name'); ?></strong>. All Rights Reserved.</div>
			</div>	

		</div>				
	</div>				
</div>
<!-- Signup End -->	
<!-- ======================Top-Footer============Fix========= -->
<?php $this->view('top_footer'); ?>
<!-- ======================Top-Footer============Fix========= -->
</body>
</html>