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
			<div class="_215b15 mb-0">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="title125">
								<div class="titleleft">
									<div class="ttl121">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="<?php echo site_url('Home'); ?>" class="text-white">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page" style="color:white;">About us</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
							<div class="title126">
								<h2>About us</h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="_215td5 bg-white mt-0">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="title589 text-center">
								<h2>Our Global Reach</h2>
								<p><?php echo get_settings('app_name'); ?> is the leading global marketplace for teaching and learning, connecting millions of students to the skills they need to succeed.</p>
								<img class="line-title" src="assets/images/line.svg" alt="">
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="p__metric">
								0
								<span>Instructors</span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="p__metric">
								0
								<span>Courses</span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="p__metric">
								0
								<span>Course enrollments</span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="p__metric">
								0
								<span>Course Categories</span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="p__metric">
								0
								<span>Topics Notes</span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="p__metric">
								0
								<span>Test Series</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section3126" style="background-color:#d3d2dd33;">

				<div class="row justify-content-around align-items-end" style="margin-top: 50px;margin-bottom:50px;">
					<div class="col-lg-4 col-md-4 col-12">

					</div>
					<div class="col-lg-7 col-md-7 col-12">
						<h2 class="mb-4"><b>Welcome To EdTech</b></h2>
						<p class="text-justify" style="color:#333;line-height:2.5rem;font-size:120%;">
							dolor sit amet. Qui distinctio placeat aut galisum ratione qui odit molestiae. Ut recusandae exercitationem et reprehenderit itaque ut soluta earum sed dolorem nobis ut quidem explicabo et facere repellendus qui fugit consequuntur.

							Aut aliquam atque et perspiciatis voluptatem est veniam corporis. Est ipsum magni in perferendis velit voluptas omnis sit quas veniam vel Quis quia ut labore. Eos modi esse et doloremque atque et galisum quaerat ut dolor officiis qui doloremque omnis qui eius temporibus et quidem nihil.

							Qui dolorem veritatis ut voluptates accusantium ut amet distinctio et iste repudiandae in mollitia magnam ut quia itaque eum minima molestiae. In necessitatibus quibusdam et explicabo laborum sit voluptatem itaque 33 vero porro. Nam voluptas soluta qui veniam deleniti qui itaque perspiciatis nam eius sint! Qui voluptatem sequi ut galisum natus et voluptatem quaerat!
						</p>
						<br>
						<p class="text-justify" style="color:#333;line-height:2.5rem;font-size:120%;">
							Through this app access your learning materials online from the comfort of your home,world class faculties will be clearing your doubts, video lectures , both long and short
							notes with no boundation of time. Very affordable fees structures for students ,time to time quiz and assesment. Hurry! Unlock the power of mobile learning.
						</p>
					</div>
				</div>
			</div>



			<div class="row" style="margin-top: 50px;margin-bottom:50px;">
				<div class="section3126" style="background-color:#c8f4f43d;margin-top:25px;">
					<center>
						<h2 style="margin-top:50px;font-weight:bold"><span style="color:#2972b3;">Our</span> Features</h2>
						<center>

							<div class="row" style="margin-top: 50px;margin-bottom:50px;">


								<div class="col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3">
									<center><img src="<?php echo base_url('assets/images/web-content-icon.png'); ?>" style=" width:50%;">
										<h5 style="font-weight:bold">CUTTING EDGE CURRICULUM</h5>
										<p>Educate yourself with the top-notch study material designed by the EXPERTS.</p>

									</center>
								</div>


								<div class="col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3">
									<center><img src="<?php echo base_url('assets/images/trusted content.png'); ?>" style=" width:50%;">
										<h4 style="font-weight:bold">TRUSTED CONTENT</h4>
										<p>Learn from the comprehensive & interactive course content.</p>

									</center>
								</div>


								<div class="col-lg-3 col-md-4 col-6 col-6 p-md-5 p-3">
									<center><img src="<?php echo base_url('assets/images/learnanytime any where.png'); ?>" style=" width:50%;">
										<h5 style="font-weight:bold">LEARN ANYTIME ANYWHERE</h5>
										<p>Learn at your own pace through our easy to navigate Android & iOS App.</p>

									</center>
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