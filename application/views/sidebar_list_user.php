<!-- ========================SideBar=============Fix=========  -->

<!-- ========================SideBar=============Fix========= -->
<!-- Left Sidebar Start -->


<?php $is_user_in = $this->session->userdata('is_customer_in');
if (isset($is_user_in) || $is_user_in == true) {
?>
	<nav class="vertical_nav" style="background-color: #323131; ">
	<?php } else { ?> <nav class="vertical_nav vertical_nav__minify" style="background-color: #323131; "><?php } ?>

		<div class="left_section menu_left" id="js-menu">
			<div class="left_section">
				<?php
				function active($currect_page)
				{
					$url_array =  explode('/', $_SERVER['REQUEST_URI']);
					$currect = explode('/', $currect_page);
					$currect_url = end($currect);
					$url = end($url_array);
					if ($currect_url == $url) {
						echo 'active'; //class name in css 
					}
				}
				?>
				<ul>
					<li class="menu--item">
						<a href="<?php echo site_url('Home'); ?>" class="menu--link <?php active('Home.html'); ?>" title="Home">
							<i class='uil uil-home-alt menu--icon'></i>
							<span class="menu--label">Home</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="<?php echo site_url('Course'); ?>" class="menu--link <?php active('Course.html'); ?>" title="All Courses">
							<i class='uil uil-books menu--icon'></i>
							<span class="menu--label">All Courses</span>
						</a>
					</li>

				</ul>
			</div>
			<?php $is_user_in = $this->session->userdata('is_customer_in');
			if (isset($is_user_in) || $is_user_in == true) { ?>
				<div class="left_section">
					<h6 class="left_title">My Account</h6>

					<ul>
						<li class="menu--item">
							<a href="<?php echo site_url('My/course'); ?>" class="menu--link user_img <?php active('My/course.html'); ?>">
								<img src="<?php echo base_url('uploads/my-course.png'); ?>" alt="">
								My Courses
								<div class="alrt_dot"></div>
							</a>
						</li>

						<li class="menu--item  menu--item__has_sub_menu">
							<label class="menu--link user_img" title="Test Series">
								<img src="<?php echo base_url('uploads/wish-list.png'); ?>" alt="">
								Wish List
							</label>
							<ul class="sub_menu">
								<li class="sub_menu--item">
									<a href="<?php echo site_url('My/course_wish'); ?>" class="sub_menu--link">Courses Wishlist</a>
								</li>

							</ul>
						</li>
					</ul>
				</div>
				<div class="left_section pt-2">
					<ul>
						<li class="menu--item">
							<a href="<?php echo site_url('My/setting'); ?>" class="menu--link <?php active('My/setting.html'); ?>" title="Update Profile">
								<i class='uil uil-cog menu--icon'></i>
								<span class="menu--label">Update Profile</span>
							</a>
						</li>
						<li class="menu--item">
							<a href="<?php echo site_url('Feedback'); ?>" class="menu--link <?php active('Feedback.html'); ?>" title="Send Feedback">
								<i class='uil uil-comment-alt-exclamation menu--icon'></i>
								<span class="menu--label">Send Feedback</span>
							</a>
						</li>

					</ul>
				</div>
			<?php } ?>
			<div class="left_footer">
				<ul>
					<li><a href="<?php echo site_url('Pages/About'); ?>">About</a></li>

					<li><a href="<?php echo site_url('Pages/Contact'); ?>">Contact Us</a></li>

					<li><a href="<?php echo site_url('Pages/Privacy'); ?>">Privacy Policy</a></li>
					<li><a href="<?php echo site_url('Pages/Term'); ?>">Terms & Conditions</a></li>
				</ul>

			</div>
		</div>
		</nav>
		<!-- Left Sidebar End -->
		<!-- ========================SideBar=============Fix========= -->

		<!-- ========================SideBar=============Fix=========