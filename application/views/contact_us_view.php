<!DOCTYPE html>
<html lang="en">
<head>
<!-- ======================Top-Header============Fix========= -->
<?php $this->view('top_header'); ?>
<!-- ======================Top-Header============Fix========= -->
</head>
<body>
<!-- ========================Header==============Fix========= -->
<?php $this->view($header_view); ?>
<!-- ========================Header==============Fix========= -->

<!-- ========================SideBar=============Fix========= -->
<?php $this->view($sidebar_list); ?>
<!-- ========================SideBar=============Fix========= -->

<!-- =========================View===============Fix========= -->
	<!-- Body Start -->
	<?php $is_user_in = $this->session->userdata('is_customer_in');
if (isset($is_user_in) || $is_user_in == true) {
?>
	<div class="wrapper" style="padding-top: 60px;">
	<?php } else { ?><div class="wrapper__minify" style="padding-top: 60px;"><?php } ?>

<!-- =====================Page Content======================= -->
		<div class="_215b15">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">						
						<div class="title125">						
							<div class="titleleft">					
								<div class="ttl121">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="<?php echo site_url('Home'); ?>" style="color:white;">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page" style="color:white;">Contact Us</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<div class="title126">	
							<h2>Contact Us</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contact1256">
			<div class="container">
				<div class="row">					
					<!-- <div class="col-lg-3 col-md-6">
						<a href="<?php echo site_url('Help'); ?>" class="contact_link_step">
							<img src="<?php echo base_url('assets/images/location_icon.svg'); ?>" alt="">
							<p> एकलव्य IAS अकादमी कुर्मी भवन, द्वितीय तल, सड़क-05, सेक्टर-7, भिलाई 490006</p> </a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="<?php echo site_url('Blog'); ?>" class="contact_link_step">
							<img src="<?php echo base_url('assets/images/location_icon.svg'); ?>" alt="">
							<p>एकलव्य IAS अकादमी शासकीय महाविद्यालय कांकेर के सामने द्वितीय तल कांकेर ,494334</p> </a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="<?php echo site_url('Career'); ?>" class="contact_link_step">
							<img src="<?php echo base_url('assets/images/phone_icon.svg'); ?>" alt="">
							<p>+91 81036-73017,<br> +91 79995-03139,<br> +91 77480-22627</p>
						</a>												
					</div>

					<div class="col-lg-3 col-md-6">
						<a href="<?php echo site_url('Career'); ?>" class="contact_link_step">
							<img src="<?php echo base_url('assets/images/email_icon.svg'); ?>" alt="">
							<p><?php echo get_settings('app_email'); ?></p>
						</a>												
					</div> -->
					
					<div class="col-lg-4">
						<div class="contact_info">
							<div class="checkout_title">
								<h4>Contact Information</h4>
								<img src="<?php echo base_url('assets/images/line.svg'); ?>" alt="">
							</div>
							<ul class="contact_list_info">

								<li><div class="txt_cntct">
								    <span class="cntct_895"><i class="uil uil-location-point"></i>Address :</span>
								    <p>
									Plot No 3, xxxx,xxxx<br>Bhilai, Chhattisgarh (49xxxx)
								        <br><br>
								        A-xxx, Market Area, Sxxxx  Nagar<br>Bhilai, Chhattisgarh (49xxxx)
								    </p>
								    </div>
								</li>
								<li class="my-4"><div class="txt_cntct"><a href="mailto:logixhunttech@gmail.com"><span class="cntct_895"><i class="uil uil-envelope"></i>Email :</span><p>provide.us.internship@gmail.com</p></a></div></li>
								<li><div class="txt_cntct"><span class="cntct_895"><i class="uil uil-mobile-android-alt"></i>Phone :</span><p><a href="tel:+91-999xx-xxxxx">+91-999xx-xxxxx</a><br><a href="tel:+91-799xx-xxxxx">+91-799xx-xxxxx</a></p></div></li>
							</ul>
						</div>												
					</div>
				</div>
			</div>
		</div>
<!-- ====================/Page Content======================= -->

<!-- ========================Footer==============Fix========= -->
<?php $this->view($footer_view); ?>
<!-- ========================Footer==============Fix========= -->
	</div>
	<!-- Body End -->
<!-- ======================Top-Footer============Fix========= -->
<?php $this->view('top_footer'); ?>

<!-- ======================Top-Footer============Fix========= -->
</body>
</html>