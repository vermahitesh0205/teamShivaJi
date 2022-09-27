<!DOCTYPE html>
<html lang="en">

<head>
	<!-- ======================Top-Header============Fix========= -->
	<?php $this->view('top_header'); ?>
	<!-- ======================Top-Header============Fix========= -->
</head>

<body>
	<?php $this->view($header_view); ?>
	<!-- ========================Header==============Fix========= -->

	<!-- ========================SideBar=============Fix========= -->
	<?php $this->view($sidebar_list); ?>

	<!-- =========================View===============Fix========= -->
	<!-- Body Start -->
	<?php $is_user_in = $this->session->userdata('is_customer_in');
	if (isset($is_user_in) || $is_user_in == true) {
	?>
		<div class="wrapper _bg4586">
		<?php } else { ?><div class="wrapper__minify _bg4586" style="padding-top: 90px;"><?php } ?>


			<!-- ======================Page Style======================== -->
			<style type="text/css">
				._htg452 {
					margin-bottom: 4%;
				}
			</style>
			<!-- =====================/Page Style======================== -->

			<!-- =====================Page Content======================= -->
			<div class="_215b01">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="section3125">
								<div class="row justify-content-center">
									<div class="col-lg-6 col-md-5 col-10">
										<div class="preview_video">

											<?php $img_default = base_url('assets/images/default-banner.png');
											if (!empty($a_value[0]->m_course_banner)) {
												if (file_exists('admin/uploads/courses/' . $a_value[0]->m_course_banner)) {
													$img_default = base_url('admin/uploads/courses/') . $a_value[0]->m_course_banner;
												}
											} ?>
											<img src="<?php echo $img_default; ?>" alt="">

										</div>

										<div class="_215b10">
											<a href="#" class="_215b11">
												<span></span>
											</a>
											<a href="#" class="_215b12">
												<span></span>
											</a>
										</div>
									</div>
									<div class="col-lg-6 col-md-7 col-12">
										<div class="_215b03 topi">
											<h2><?php echo $a_value[0]->m_course_title ?></h2>
											<span class="_215b04"><?php echo $a_value[0]->m_course_intro; ?></span>
										</div>
										<div class="_215b05" style="display: none;">
											<div class="crse_reviews mr-2">
												<i class="uil uil-star"></i>4.5
											</div>
											(81,665 ratings)
										</div>

										<div class="_215b06">
											<div class="_215b07">
												<span><i class='uil uil-comment'></i></span>
												English, Hindi
											</div>
										</div>
										<div class="_215b05">
											Last updated : <?php echo $a_value[0]->course_modified; ?>
										</div>
										<ul class="_215b31">
											<li> <?php echo $action_btn; ?> </li>
										</ul>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="_215b15 _byt1458 bg-white">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="user_dt5">
								<div class="user_dt_left">
									<div class="live_user_dt">

										<div class="user_cntnt" style="text-align:center;height:50px;">
											<a style="margin-top:15px;" href="#" class="_df7852"><?php echo get_settings('app_name'); ?></a>
											<!-- <button class="subscribe-btn">Subscribe</button> -->
										</div>
									</div>
								</div>
								<div class="user_dt_right">
									<ul>
										<li>
											<a href="#" class="lkcm152"><i class="uil uil-eye"></i><span><?php echo $a_value[0]->m_course_view; ?></span></a>
										</li>
									
										<li>
											<a href="#" class="lkcm152"><i class="uil uil-share-alt"></i><span>9</span></a>
										</li>


									</ul>
								</div>
							</div>
							<div class="course_tabs">
								<nav>
									<div class="nav nav-tabs tab_crse justify-content-center" id="nav-tab" role="tablist">

										<a class="nav-item nav-link active" id="nav-courses-tab" data-toggle="tab" href="#nav-courses" role="tab" aria-selected="false">Course Details</a>
										<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-selected="true">Description</a>
										<a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="false">Reviews</a>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="_215b17">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="course_tab_content">
								<div class="tab-content" id="nav-tabContent">

								<!--========01========-->
									<div class="tab-pane fade " id="nav-about" role="tabpanel">
										<div class="_htg451">
											<div class="_htg452 mt-35">
												<h3>Description</h3>
												<?php echo $a_value[0]->m_course_description; ?>
											</div>
										</div>
										<!--=======/01========-->
									</div>

									<!--========02========-->

									<div class="row py-3">
										<div class="col-6">
											<h3>Course Subjects</h3>
										</div>
										<div class="col-6 text-right">
											<ul class="accordion-expand-holder">
												<li><span class="accordion-expand-all _d1452">Expand all</span></li>
												<li><span class="_fgr123"></span></li>
											</ul>
										</div>
									</div>
									<?php
									if (!empty($subject_list)) {
										foreach ($subject_list as $vl) {
									?>
											<div id="accordion" class="ui-accordion ui-widget ui-helper-reset">
												<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
													<div class="section-header-left">
														<span class="section-title-wrapper">
															<i class='uil uil-presentation-play crse_icon'></i>
															<span class="section-title-text" title="<?php echo 'Subject: ' . $vl->m_subject_title; ?>"><?php echo $vl->m_subject_title; ?></span>
														</span>
													</div>
													<div class="section-header-right">
														<span class="num-items-in-section"><?php echo (!empty($vl->topic_list)) ? sizeof($vl->topic_list) : 0; ?> Topics</span>
														<span class="section-header-length"></span>
													</div>
												</a>
												<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
													<?php
													if (!empty($vl->topic_list)) {
														foreach ($vl->topic_list as $vl1) {
													?>

															<div class="lecture-container">
																<div class="left-content">
																	<i class='uil uil-file icon_142'></i>
																	<div class="top">
																		<div class="title" title="<?php echo 'Topic: ' . $vl1->ml_title; ?>"><?php echo $vl1->ml_title; ?></div>
																	</div>
																</div>
																<div class="details">
																	<a href="#" class="preview-text"></a>
																	<span class="content-summary"></span>
																</div>
															</div>
													<?php
														}
													}
													?>
												</div>
											</div>
									<?php
										}
									}
									?>
								</div>
							</div>
							<!--=======/02========-->

						</div>
					</div>

				</div>
				<?php $this->view($footer_view); ?>
			</div>
			</div>

		</div>
		<!-- ====================/Page Content======================= -->
		</div>
		<!-- Body End -->
		<!-- ======================Top-Footer============Fix========= -->
		<?php $this->view('top_footer'); ?>
		<!-- ======================Top-Footer============Fix========= -->
</body>

</html>

<script type="text/javascript">

	$(".register_course").on('click', function() {
		var clkbtn = $(".register_course").data("id");
		// alert("fgg");
		// alert(clkbtn);
		// clkbtn.prop('disabled', true);

		$.ajax({
			type: "POST",
			url: "<?php echo site_url('Course/course_registration'); ?>",
			data: {
				id: clkbtn
			},
			dataType: "JSON",
			success: function(data) {

				if (data.status == 'success') {
					swal(data.message, {
						icon: "info",
						timer: 1000,
					});
					setTimeout(function() {
						window.location.href = "<?php echo site_url('My/course') ?>"
					}, 1000);
				} else {
				
					swal(data.message, {
						icon: "info",
						timer: 5000,
					});
				}

			},
			error: function(jqXHR, status, err) {
			
				swal("Some Problem Occurred!! please try again", {
					icon: "error",
					timer: 2000,
				});
			}
		});
	});
</script>