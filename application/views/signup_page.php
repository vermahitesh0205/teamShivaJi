<!DOCTYPE html>
<html lang="en">
<head>
<!-- ======================Top-Header============Fix========= -->
<?php $this->view('top_header'); ?>
<!-- ======================Top-Header============Fix========= -->

<!-- ======================================================== -->
<style type="text/css">
	.input-label {
		float: left;
	}
	span.red-alert>p {
		color: red;
		text-align: left;
	}

	.ui[class*="left icon"].swdh19.select>select {
	    padding-left: 2em!important;
	    padding-right: 2em!important;
	    height: 40px !important;
	    font-size: 14px;
	    font-weight: 400;
	    font-family: 'Roboto', sans-serif;
	}
	.alert{ margin-top: 20px; border-radius: 25px; }
</style>
<!-- ======================================================== -->
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
				<p style = "font-size:100px ; font-family:ALGERIAN">
						ED_TECH
					</p>
				</div>
			</div>
		
			<div style= "background-color:#696969"class="col-lg-6 col-md-8">
				<div style = "background-color:#696969"class="sign_form">
					<h2 style = "color:#FFFFFF">Welcome to <?php echo get_settings('app_name'); ?></h2>
					<p style = "color:#FFFFFF">Sign Up and Start Learning!</p>
<form method="post" action="<?php echo site_url('SignUp'); ?>">
						<div class="ui search focus">
			<label class="input-label" style = "color:#FFFFFF">Select City</label>
							<div class="ui left icon select swdh11 swdh19">
  <select class="prompt srch_explore" style="width: 100%" name="user_city" id="user_city" title="Select City">
  	<option value="" style="display: none;"> - - - Select - - - </option>
  	<?php if (!empty($cities_list)) { foreach ($cities_list as $r) {
  		echo '<option value="'.$r->m_location_id.'"';
  		if($r->m_location_id == set_value('user_city')) echo " selected";
  		echo'>'.$r->m_location_city.'</option>';
  	}}?>
  </select>
							</div>
			<span class="red-alert"><?php echo form_error('user_city'); ?></span>
						</div>
						<div class="ui search focus mt-15">
			<label class="input-label" style = "color:#FFFFFF">Your Name</label>
							<div class="ui left icon input swdh11 swdh19">
  <input class="prompt srch_explore" type="text" name="username" id="username" placeholder="Your Name" value="<?php echo set_value('username'); ?>">															
							</div>
			<span class="red-alert"><?php echo form_error('username'); ?></span>
						</div>
						<div class="ui search focus mt-15">
			<label class="input-label" style = "color:#FFFFFF">Phone Number</label>
							<div class="ui left icon input swdh11 swdh19">
  <input class="prompt srch_explore" type="number" name="user_phone" id="user_phone" maxlength="64" placeholder="Phone Number" value="<?php echo set_value('user_phone'); ?>">															
							</div>
			<span class="red-alert"><?php echo form_error('user_phone'); ?></span>
						</div>
						<div class="ui search focus mt-15">
			<label class="input-label" style = "color:#FFFFFF">Email Address</label>
							<div class="ui left icon input swdh11 swdh19">
  <input class="prompt srch_explore" type="email" name="user_email" id="user_email" placeholder="Email Address" value="<?php echo set_value('user_email'); ?>">															
							</div>
			<span class="red-alert"><?php echo form_error('user_email'); ?></span>
						</div>
						<div class="ui search focus mt-15">
			<label class="input-label" style= "color:#FFFFFF">Password</label>
							<div class="ui left icon input swdh11 swdh19">
  <input class="prompt srch_explore" type="password" name="user_pass" id="user_pass" placeholder="Password" value="<?php echo set_value('user_pass'); ?>">															
							</div>
			<span class="red-alert"><?php echo form_error('user_pass'); ?></span>
						</div>
  <button class="login-btn" type="submit">Sign-Up</button>
  <?php if($this->session->flashdata('status')){ echo $this->session->flashdata('status'); } ?>
</form>
					<p class="sgntrm145" style = "color:#FFFFFF">By signing up, you agree to our <a href="<?php echo site_url('Terms'); ?>" style = "color:#FFFF00">Terms of Use</a> and <a href="<?php echo site_url('Privacy'); ?>" style = "color:#FFFF00">Privacy Policy</a>.</p>
					<p class="mb-0 mt-30" style = "color:#FFFFFF">Already have an account? <a href="<?php echo site_url('Login'); ?>" style = "color:#FFFF00">Log In</a></p>
				</div>
<?php $fav_img = base_url('assets/images/fav.png'); 
//$fav_img_title = get_settings('app_icon');
if (!empty($fav_img_title)) { if (file_exists('admin/uploads/'.$fav_img_title)){
  $fav_img = base_url('admin/uploads/').$fav_img_title;
} }
?>
				<div style = "color:#FFFFFF"class="sign_footer"><img src="<?php echo $fav_img; ?>" alt="" style="max-height: 32px;"><strong><?php echo get_settings('app_name'); ?></strong>. All Rights Reserved.</div>
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