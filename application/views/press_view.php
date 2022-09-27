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
	<div class="wrapper">
<!-- =====================Page Content======================= -->
		<div class="_215cd2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">						
						<div class="course_tabs"> </div>
						<div class="title129 mt-35 mb-35">	
							<h2>What others are saying</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="_205ef5">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-5">
						<div class="fcrse_3 mt-50">
							<ul class="blogleft12">
								<li>
									<div class="socl148">
										<button class="twiter158" data-href="#" onclick="sharingPopup(this);" id="twitter-share"><i class="uil uil-twitter ic45"></i>Follow</button>
										<button class="facebook158" data-href="#" onclick="sharingPopup(this);" id="facebook-share"><i class="uil uil-facebook ic45"></i>Follow</button>
									</div>
								</li>
								<li>
									<div class="help_link">
										<p>Learn More</p>
										<a href="#"><?php echo get_settings('app_name'); ?> Help Center</a>
									</div>
								</li>
							</ul>
						</div>
					</div>					
					<div class="col-lg-9 col-md-7">
						<div class="press_news">
							<h2><?php echo get_settings('app_name'); ?> in the News</h2>
							<p>For media interviews and inquiries, please send an email to <a href="#">press@<?php echo get_settings('app_name'); ?>.com</a></p>
							<div class="press_item mt-35">
								<div class="vdtopress">March 10, 2020</div>
								<h4>Press News Title</h4>
								<p class="blog_des">Donec eget arcu vel mauris lacinia vestibulum id eu elit. Nam metus odio, iaculis eu nunc et, interdum mollis arcu. Pellentesque viverra faucibus diam. In sit amet laoreet dolor, vitae fringilla quam...</p>
								<a href="#" class="press_dt_view">Read More<i class="uil uil-angle-double-right"></i></a>
							</div>
							<div class="press_item mt-30">
								<div class="vdtopress">March 10, 2020</div>
								<h4>Press News Title</h4>
								<p class="blog_des">Donec eget arcu vel mauris lacinia vestibulum id eu elit. Nam metus odio, iaculis eu nunc et, interdum mollis arcu. Pellentesque viverra faucibus diam. In sit amet laoreet dolor, vitae fringilla quam...</p>
								<a href="#" class="press_dt_view">Read More<i class="uil uil-angle-double-right"></i></a>
							</div>
							<div class="press_item mt-30">
								<div class="vdtopress">March 10, 2020</div>
								<h4>Press News Title</h4>
								<p class="blog_des">Donec eget arcu vel mauris lacinia vestibulum id eu elit. Nam metus odio, iaculis eu nunc et, interdum mollis arcu. Pellentesque viverra faucibus diam. In sit amet laoreet dolor, vitae fringilla quam...</p>
								<a href="#" class="press_dt_view">Read More<i class="uil uil-angle-double-right"></i></a>
							</div>
							<a href="#" class="allnews_btn">See More News</a>
						</div>
						
						<div class="press_news mb-50">
							<h2>Press Releases</h2>
							<p>For Release from <?php echo get_settings('app_name'); ?> </p>
							<div class="press_item mt-35">
								<div class="vdtopress">March 10, 2020</div>
								<a href="#" class="press_title">Press Release Title</a>
							</div>
							<div class="press_item mt-20">
								<div class="vdtopress">March 10, 2020</div>
								<a href="#" class="press_title mb-0">Press Release Title</a>
							</div>
							<div class="press_item mt-20">
								<div class="vdtopress">March 10, 2020</div>
								<a href="#" class="press_title mb-0">Press Release Title</a>
							</div>
							<div class="press_item mt-20">
								<div class="vdtopress">March 10, 2020</div>
								<a href="#" class="press_title mb-0">Press Release Title</a>
							</div>
							<div class="press_item mt-20">
								<div class="vdtopress">March 10, 2020</div>
								<a href="#" class="press_title mb-0">Press Release Title</a>
							</div>
							<a href="#" class="allnews_btn">See More Press Releases</a>
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