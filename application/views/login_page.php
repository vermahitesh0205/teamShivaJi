<!DOCTYPE html>
<html lang="en">
<head>
<!-- ======================Top-Header============Fix========= -->
<?php $this->view('top_header'); ?>
<!-- ======================Top-Header============Fix========= -->
<style type="text/css">
	.alert{ margin-top: 20px; border-radius: 25px; }
	span.text-danger>p {
		color: red;
		text-align: left;
	}
</style>
</head>
<body>
<!-- ======================================================== -->

<!-- ======================================================== -->
<!-- Signup Start -->
<div class="sign_in_up_bg">
	<div class="container">
		<div class="row justify-content-lg-center justify-content-md-center">
			<div class="col-lg-12 text-center">
				<div class="main_logo25" id="logo">
					<p style = "font-size:100px ; font-family:ALGERIAN">
						ED_TECH
					</p>
				</div>
			</div>
		
			<div class="col-lg-6 col-md-8" style = "background-color:#696969">
				<div class="sign_form" style = "background-color:#696969">
					<h2 style = "color:#FFFFFF">Welcome Back</h2>
					<p style = "color:#FFFFFF">Log In to Your Account!</p>

<form method="POST" action="<?php echo site_url('Login') ?>" id="frm-login">

						<div class="ui search focus mt-15">
							<div class="ui left icon input swdh95">
		<input style = "color:#FFFFFF"class="prompt srch_explore" type="text" minlength="10" maxlength="10" name="login_id" id="login_id" value="<?php echo set_value('login_id'); ?>" placeholder="Phone Number" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
								<i class="uil uil-mobile-android icon icon2"></i>
							</div>
        <span class="text-danger"><?php echo form_error('login_id'); ?> </span>
						</div>
						<div class="ui search focus mt-15">
							<div class="ui left icon input swdh95">
		<input style = "color:#FFFFFF"class="prompt srch_explore" type="password" name="login_pass" id="login_pass" value="<?php echo set_value('login_pass'); ?>" placeholder="Password">
								<i class="uil uil-key-skeleton-alt icon icon2"></i>
							</div>
        <span class="text-danger"><?php echo form_error('user_pass'); ?> </span>
						</div>
						<div class="ui form mt-30 checkbox_sign">
							<div class="inline field">
								<div class="ui checkbox mncheck">
									<!-- <input type="checkbox" tabindex="0" class="hidden">
									<label>Remember Me</label> -->
								</div>
							</div>
						</div>
						<?php if($this->session->flashdata('status')){ echo "<span style = 'text-color:red;font-weight:bold;'> User Id or Password is wrong ! you can change your password by clicking the forgot password link below.</span>"; } ?>

		<button class="login-btn" type="submit" id="btn-login">Log In</button>
	<?php //if($this->session->flashdata('status')){ echo $this->session->flashdata('status'); } ?>

</form>
					<p style = "color:#FFFFFF" class="sgntrm145">Or <a href="<?php echo site_url('ResetPassword'); ?>"style = "color:#FFFF00">Forgot Password</a>.</p>
					<p style = "color:#FFFFFF"class="mb-0 mt-30 hvsng145">Don't have an account? <a href="<?php echo site_url('SignUp'); ?>"style = "color:#FFFF00 ">Sign Up</a></p>
				</div>
<?php $fav_img = base_url('assets/images/fav.png'); 
//$fav_img_title = get_settings('app_icon');
if (!empty($fav_img_title)) { if (file_exists('admin/uploads/'.$fav_img_title)){
  $fav_img = base_url('admin/uploads/').$fav_img_title;
} }
?>
				<div style ="color:#FFFFFF"class="sign_footer"><img src="<?php echo $fav_img; ?>" alt="" style="max-height: 32px ;"><strong><?php echo get_settings('app_name'); ?></strong>. All Rights Reserved.</div>
			</div>				
		</div>				
	</div>				

</div>
<!-- Signup End -->	
<!-- ======================Top-Footer============Fix========= -->
<?php $this->view('top_footer'); ?>
<script type="text/javascript">
$("form#frm-login").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-login"); clkbtn.prop('disabled',true);

  document.getElementById('frm-login').submit();
});

function Is10character(character) { // crL >= 10
  var crL = character.length; crL =  parseInt(crL);
  return (crL < 10 || crl > 10) ? false : true;
}
  
</script>
<!-- ======================Top-Footer============Fix========= -->
</body>
</html>