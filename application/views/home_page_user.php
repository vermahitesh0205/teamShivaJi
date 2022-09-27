<!DOCTYPE html>
<html lang="en">

<head>
	<!--
======================Top-Header============Fix========= --> <?php
																$this->view('top_header'); ?>
	<!--
======================Top-Header============Fix========= -->
</head>
<?php $is_user_in = $this->session->userdata('is_customer_in');
if (isset($is_user_in) || $is_user_in == true) { ?>

	<body>
	<?php } else { ?>

		<body style="margin-top: 20px;">
		<?php } ?>

		<!-- ========================Header==============Fix========= --> <?php
																			$this->view($header_view); ?>
		<!--
========================Header==============Fix========= -->

		<!-- ========================SideBar=============Fix========= -->
		<?php $this->view($sidebar_list); ?>
		<!-- ========================SideBar=============Fix========= -->

		<!-- =========================View===============Fix========= -->
		<!-- Body Start -->


		<?php
		if (isset($is_user_in) || $is_user_in == true) {
		?>
			<div class="wrapper">
			<?php } else { ?><div class="wrapper__minify"><?php } ?>

				<div class="sa4d25">
					<div class="container-fluid" style="margin-top:-20px">
						<!-- ========================/View===============Fix========= -->

						<!-- =====================Page Content======================= -->

						<style type="text/css">
							#more1,
							#more2,
							#more3,
							#more4 {
								display: none;
								transition: 3s;
							}

							#myBtn1,
							#myBtn2,
							#myBtn3,
							#myBtn4 {
								cursor: pointer;
								color: red;
								transition: 3s;
							}
						</style>

						<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

						<div class="row">
							<?php if (isset($is_user_in) || $is_user_in == true) { ?>
								<div class="col-xl-12 col-lg-12">
								<?php } else { ?>
									<div class="col-xl-12 col-lg-12" style="margin-top: 65px;">
									<?php } ?>
									<div class="clearfix"></div>

									<section>

										<div id="myCarousel" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											<ol class="carousel-indicators">
												<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
												<li data-target="#myCarousel" data-slide-to="1"></li>
												<li data-target="#myCarousel" data-slide-to="2"></li>
											</ol>

											<!-- Wrapper for slides -->
											<div class="carousel-inner">


												<?php
												$i = 0;

												if (!empty($banner_list)) {
													foreach ($banner_list as $banner) {
														$i++;
														if ($i == 1) {
															$active = 'active';
														} else {
															$active = '';
														}

														echo '<div class="item ' . $active . '">
		<img src="' . base_url('uploads/sliders/' . $banner->m_banner_image) . '" alt="' . $banner->m_banner_title . '" style="width:100%;">
	  </div>';
													}
												}
												?>


											</div>

											<!-- Left and right controls -->
											<a class="left carousel-control" href="#myCarousel" data-slide="prev">
												<span class="glyphicon glyphicon-chevron-left"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="right carousel-control" href="#myCarousel" data-slide="next">
												<span class="glyphicon glyphicon-chevron-right"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</section>

									<script type="text/javascript">
										// Sets interval...what is transition slide speed?
										$('#myCarousel').carousel({
											interval: 3000
										});
									</script>

									<!-- //////Recomended////////// -->


									<?php if (!empty($recomended_courses)) {
										$img_link = base_url('admin/uploads/courses/');
										$dflt_img = base_url('assets/images/default-banner.png');
										$dtl_link = site_url('Course/offer?of=');
										$dtl2_link = site_url('Course/details?cr=');

									?>

										<div class="section3125 mt-50" width="100%">
											<h4 class="item_title">Recomended Courses</h4>
											<div class="la5lo1">
												<div class="row">
													<?php
													foreach ($recomended_courses as $i => $vl1) {
														if (!empty($vl1->m_course_banner)) {
															if (file_exists('uploads/courses/' . $vl1->m_course_banner)) {
																$cat_img = $img_link . $vl1->m_course_banner;
															}
														} else {
															$cat_img = file_exists('assets/images/default-banner.png');
														}
													?>

														<div class="item col-lg-4 col-md-6 col-12 p-3" title="<?php echo $vl1->m_course_title ?>">
															<div class="fcrse_1 mb-20">
																<a href="<?php echo $dtl2_link . $vl1->m_course_id; ?>" class="fcrse_img">
																	<img src="<?php echo $cat_img; ?>" alt="" class="img-fluid">
																	<div class="course-overlay">
																		<div class="badge_seller"><?php echo $vl1->m_course_title ?></div>
																		<span class="play_btn1"><i class="uil uil-play"></i></span>
																	</div>
																</a>
																<div class="fcrse_content">
																	<div class="vdtodt">
																		<span class="vdt14"><?php echo $vl1->m_course_view ?> views</span>
																		<span class="vdt14"><?php //echo $vl1->course_modified; 
																							?></span>
																	</div>
																	<a href="<?php echo $dtl2_link . $vl1->m_course_id; ?>" class="crse14s"><?php echo $vl1->m_course_title ?></a>


																	<div class="row">
																		<div class="col-6">
																			<?php $is_user_in = $this->session->userdata('is_customer_in');
																			if (isset($is_user_in) || $is_user_in == true) {
																				$customer_id = $this->session->userdata('customer_id');
																				$wish_list = $this->db->where('t_wishlist_user', $customer_id)->where('t_wishlist_course', $vl1->m_course_id)->get('user_wishlist_tbl')->row();
																				if (!empty($wish_list)) { ?>
																					<a class="add-to-wishlist btn btn-primary btn-block" style="font-size: 84%;"><span style="color: white;">Already in your wishlist</span></a>
																				<?php } else { ?>
																					<a class="add-to-wishlist btn btn-primary btn-block" data-id="<?php echo $vl1->m_course_id ?>" data-type="1" style="font-size: 84%;"><span style="color: white;">Add to wishlist</span></a>
																			<?php }
																			} ?>
																		</div>
																		<div class="col-6">
																			<button class="btn btn-success btn-block"><span class="small">Enroll Now</span></button>
																		</div>
																	</div>



																</div>
															</div>
														</div>


													<?php } // } 
													?>
												</div>
											</div>
										</div>
									<?php } //} 
									?>
									<!-- //////Popular////////// -->

									<?php if (!empty($recomended_courses)) {
										$img_link = base_url('admin/uploads/courses/');
										$dflt_img = base_url('assets/images/default-banner.png');
										$dtl_link = site_url('Course/offer?of=');
										$dtl2_link = site_url('Course/details?cr=');

									?>

										<div class="section3125 mt-50" width="100%">
											<h4 class="item_title">Popular Courses<?php //echo //$vl->m_offer_title 
																					?></h4>
											<!-- <a href="<?php //echo $dtl_link.$vl->m_course_id; 
															?>" class="see150">See all</a> -->
											<div class="la5lo1">
												<div class="row">
													<?php
													//  if(!empty($vl->course_list)){ 
													//   foreach ($vl->course_list as $i1 => $vl1) { $cat_img = $dflt_img;
													foreach ($popular_courses as $i => $vl1) {
														if (!empty($vl1->m_course_banner)) {
															if (file_exists('admin/uploads/courses/' . $vl1->m_course_banner)) {
																$cat_img = $img_link . $vl1->m_course_banner;
															}
														} else {
															$cat_img = file_exists('assets/images/default-banner.png');
														}
													?>

														<div class="item col-lg-4 col-md-6 col-12 p-3" title="<?php echo $vl1->m_course_title ?>">
															<div class="fcrse_1 mb-20">
																<a href="<?php echo $dtl2_link . $vl1->m_course_id; ?>" class="fcrse_img">
																	<img src="<?php echo $cat_img; ?>" alt="" class="img-fluid">
																	<div class="course-overlay">
																		<div class="badge_seller"><?php echo $vl1->m_course_title ?></div>
																		<span class="play_btn1"><i class="uil uil-play"></i></span>
																	</div>
																</a>
																<div class="fcrse_content">
																	<div class="vdtodt">
																		<span class="vdt14"><?php echo $vl1->m_course_view ?> views</span>
																		<span class="vdt14"><?php //echo $vl1->course_modified; 
																							?></span>
																	</div>
																	<a href="<?php echo $dtl2_link . $vl1->m_course_id; ?>" class="crse14s"><?php echo $vl1->m_course_title ?></a>
																	<div class="row" style="margin-left:5px;margin-bottom:10px;margin-top:10px;font-weight:bold;font-size:20px;"> Price : <del><span title="Actual Price">₹ <?php echo $vl1->m_course_price; ?></span></del> , <span title="Offer Price" style="color: green;"> ₹ <?php echo $vl1->m_course_offer_price; ?></span></div>
																	<div class="row">
																		<div class="col-6 pr-1">
																			<a class="add-to-wishlist" data-id="<?php echo $vl2->m_course_id ?>" data-type="1" style="font-size: 84%;"><button class="btn btn-primary btn-block"><span class="small">Add to wishlist</span></button></a>
																		</div>
																		<div class="col-6">
																			<button class="btn btn-success btn-block"><span class="small">Enroll Now</span></button>
																		</div>
																	</div>

																</div>
															</div>
														</div>


													<?php } // } 
													?>
												</div>
											</div>
										</div>
									<?php } //} 
									?>

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
						</div>
						<?php $this->view('footer_view'); ?>
					</div>
					<!-- ========================/View===============Fix========= -->

					<!-- ========================Footer==============Fix========= -->

					<!-- ========================Footer==============Fix========= -->
				</div>
				<!-- Body End -->
				<!-- ======================Top-Footer============Fix========= -->
				<?php $this->view('top_footer'); ?>
				<!-- ======================Top-Footer============Fix========= -->

				<script>
					function myFunction(id) {
						var dots = document.getElementById("dots" + id);
						var moreText = document.getElementById("more" + id);
						var btnText = document.getElementById("myBtn" + id);

						if (dots.style.display === "none") {
							dots.style.display = "inline";
							btnText.innerHTML = "Read more";
							moreText.style.display = "none";
						} else {
							dots.style.display = "none";
							btnText.innerHTML = "Read less";
							moreText.style.display = "inline";
						}
					}
				</script>

		</body>

</html>