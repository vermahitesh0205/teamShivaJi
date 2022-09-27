<!-- ========================Header==============Fix========= -->
<style>
	.menu--link {
		display: block;
		overflow: hidden;
		font-size: 14px;
		text-decoration: none;
		color: #fff;
		font-weight: 500;
		white-space: nowrap;
		cursor: pointer;
		font-family: 'Roboto', sans-serif;
	}

</style>
<!-- ========================Header==============Fix========= -->
<!-- Header Start -->
<header class="header clearfix" style="background-color:#3a3939;">
	<?php $is_user_in = $this->session->userdata('is_customer_in');
	if (isset($is_user_in) || $is_user_in == true) {
	?>
		<button type="button" id="toggleMenu" class="toggle_menu">
			<i class='uil uil-bars'></i>
		</button>
		<button id="collapse_menu" class="collapse_menu">
			<i class="uil uil-bars collapse_menu--icon " style="background-color:#323131;"></i>
			<span class="collapse_menu--label"></span>
		</button>
	<?php } ?>
	<div class="main_logo" id="logo">
		<?php //$app_logo = DefaultLogoLink;  $logo_title = get_settings('app_logo');
		// if (!empty($logo_title)) { if (file_exists('admin/uploads/'.$logo_title)){
		//   $app_logo = base_url('admin/uploads/').$logo_title;
		// } }
		?>
		<a href="<?php echo site_url('Home'); ?>">
			<h2 style="
    color: white;
">EdTech</h2>
			<!-- <img style="max-height: 40px;" src="<?php echo $app_logo; ?>" alt="LOGO"> -->
		</a>

	</div>

	<?php $is_user_in = $this->session->userdata('is_customer_in');
	if (isset($is_user_in) || $is_user_in == true) { ?>

		<div class="search120">
			<div class="ui search">
				<div class="ui left icon input swdh10">
					<input class="prompt srch10" type="text" placeholder="Search for  Courses">
					<i class='uil uil-search-alt icon icon1'></i>
				</div>
			</div>
		</div>

		<div class="header_right">
			<ul>
				<li>
					<a href="<?php echo site_url('Logout'); ?>" style="background-color:#48438e" class="upload_btn">Logout</a>
				</li>
				<li>
					<a href="<?php echo site_url('Home'); ?>" class="option_links"><i class='uil uil-home-alt'></i></a>
				</li>
				<!-- <li>
					<div class="night_mode_switch__btn">
						<a href="#" id="night-mode" class="btn-night-mode">
							<i class="uil uil-moon"></i>
						</a>
					</div>
				</li> -->

				<?php $profile_img = base_url('assets/images/hd_dp.jpg');
				if (!empty($log_customer[0]->kh_user_image)) {
					if (file_exists('admin/uploads/users/' . $log_customer[0]->kh_user_image)) {
						$profile_img = base_url('admin/uploads/users/') . $log_customer[0]->kh_user_image;
					}
				}
				?>
				<li class="ui dropdown">
					<a href="#" class="opts_account">
						<img src="<?php echo $profile_img; ?>" alt="">
					</a>
					<div class="menu dropdown_account">
						<div class="channel_my">
							<div class="profile_link">
								<img src="<?php echo $profile_img; ?>" alt="">
								<div class="pd_content">
									<div class="rhte85">
										<h6><?php echo $log_customer[0]->kh_user_fname; ?></h6>
										<div class="mef78" title="Verify">
											<i class='uil uil-check-circle'></i>
										</div>
									</div>
									<span><?php echo $log_customer[0]->kh_user_email; ?></span>
								</div>
							</div>
							<a href="<?php echo site_url('My/profile'); ?>" class="dp_link_12">View Profile</a>
						</div>


						<!-- <a href="instructor_dashboard.html" class="item channel_item"><?php echo get_settings('app_name'); ?> dashboard</a>						
						<a href="membership.html" class="item channel_item">Paid Memberships</a> -->
						<a href="<?php echo site_url('My/setting'); ?>" class="item channel_item">Update Profile</a>
						<!-- <a href="<?php echo site_url('Help'); ?>" class="item channel_item">Help</a> -->
						<a href="<?php echo site_url('Feedback'); ?>" class="item channel_item">Send Feedback</a>
						<a href="<?php echo site_url('Logout'); ?>" class="item channel_item">Log Out</a>
					</div>
				</li>
			</ul>
		</div>
	<?php } else { ?>
		<div class="header_canter">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo site_url('Home'); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('Course'); ?>">All Courses</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('Pages/About'); ?>">About us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('Pages/Contact'); ?>">Contact us</a>
				</li>
				

			</ul>
		</div>
		<div class="header_right">
			<ul>
				<li>
					<a href="<?php echo site_url('Login'); ?>" class="upload_btn">Log-In</a>
				</li>

				<li>
					<a href="<?php echo site_url('Home'); ?>" class="option_links"><i class='uil uil-home-alt'></i></a>
				</li>

				<!-- <li>
					<div class="night_mode_switch__btn">
						<a href="#" id="night-mode" class="btn-night-mode">
							<i class="uil uil-moon"></i>
						</a>
					</div>
				</li> -->
			</ul>
		</div>

	<?php } ?>
</header>
<!-- Header End -->
<!-- ========================Header==============Fix========= -->

<!-- ========================Header==============Fix=========