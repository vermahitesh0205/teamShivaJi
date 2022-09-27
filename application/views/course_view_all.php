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
		<div class="wrapper">
		<?php } else { ?><div class="wrapper__minify" style="padding-top: 90px;"><?php } ?>

			<div class="sa4d25">
				<div class="container-fluid">
					<!-- ========================/View===============Fix========= -->

					<!-- =====================Page Content======================= -->
					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="section3125">
								<h4 class="item_title">All Courses</h4>
								<div class="la5lo1">
									<div class="row">

										<?php if (!empty($all_value)) {
											$img_link = base_url('admin/uploads/courses/');
											$dflt_img = base_url('assets/images/default-banner.png');
											$dtl_link = site_url('Course/details?cr=');
											foreach ($all_value as $i => $vl) {
												$cat_img = $dflt_img;

												if (!empty($vl->m_course_banner)) {
													if (file_exists('admin/uploads/courses/' . $vl->m_course_banner)) {
														$cat_img = $img_link . $vl->m_course_banner;
													}
												}
										?>
												<div class="item col-lg-4 col-md-6 col-12 p-3">
													<div class="fcrse_1 mb-20">
														<a href="<?php echo $dtl_link . $vl->m_course_id; ?>" class="fcrse_img">
															<img class="img-fluid" src="<?php echo $cat_img; ?>" alt="">
															<div class="course-overlay">
																<span class="play_btn1"><i class="uil uil-play"></i></span>
																<div class="crse_timer">
																	<?php //echo $vl->course_type; 
																	?>
																</div>
															</div>
														</a>
														<div class="fcrse_content">
															<div class="eps_dots more_dropdown">
																<a href="#"><i class='uil uil-ellipsis-v'></i></a>
																<div class="dropdown-content">
																	<span><i class='uil uil-share-alt'></i> Share</span>
																	<a class="add-to-wishlist" data-id="<?php echo $vl->m_course_id ?>" data-type="1" style="font-size: 84%;"><span><i class="uil uil-clock-three"></i>Add To Wishlist</span></a>
																	<span onclick="window.location.href='<?php echo $dtl_link . $vl->m_course_id; ?>';"><i class="uil uil-eye"></i>View Details</span>
																	<span><i class="uil uil-windsock"></i>Report</span>
																</div>
															</div>
															<div class="vdtodt">
																<span class="vdt14"><?php echo $vl->m_course_view ?> views</span>
																<span class="vdt14"><?php //echo $vl->course_modified; 
																					?></span>
															</div>

															<a href="<?php echo $dtl_link . $vl->m_course_id; ?>" class="crse14s crop-body-text" title="<?php echo $vl->m_course_title; ?>"><?php echo $vl->m_course_title; ?></a>
													
															<div class="row">
																<div class="col-6">
																	<a class="add-to-wishlist" data-id="<?php echo $vl->m_course_id ?>" data-type="1" style="font-size: 84%;"><button class="btn btn-primary btn-block"><span class="small">Add to wishlist</span></button></a>
																</div>
																<div class="col-6">
																<a href="<?= site_url("Checkout?cr=").$vl->m_course_id?>"><button class="btn btn-success btn-block" data-type="1"> Enroll For Free </button></a>
															
																</div>
															</div>


														</div>

													</div>
												</div>
										<?php }
										} ?>

									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ====================/Page Content======================= -->

					<!-- =========================View===============Fix========= -->
				</div>
			</div>
			<!-- ========================/View===============Fix========= -->

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