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
		<div class="sa4d25">
			<div class="container-fluid">
<!-- ========================/View===============Fix========= -->

<!-- =====================Page Content======================= -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="section3125">
							<h4 class="item_title">My Courses</h4>
							<div class="la5lo1">
								<div class="row">


	<?php if(!empty($all_value)){
		$img_link = base_url('admin/uploads/courses/');
		$dflt_img = base_url('assets/images/default-banner.png');
		$dtl_link = site_url('Course/details?cr=');
	    foreach ($all_value as $i => $vl) { $cat_img = $dflt_img;

	    	if (!empty($vl->m_course_banner)) { if (file_exists('admin/uploads/courses/'.$vl->m_course_banner)){ $cat_img = $img_link.$vl->m_course_banner; } }
	?>
									<div class="col-md-6">
										<div class="fcrse_1 mb-20">
        <a href="<?php echo $dtl_link.$vl->m_course_id; ?>" class="fcrse_img">
												<img src="<?php echo $cat_img; ?>" style = "height:300px;overflow:hidden;" alt="">
												<div class="course-overlay">
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														<?php echo $vl->course_type; ?>
													</div>
												</div>
		</a>
											<div class="fcrse_content">
												<div class="eps_dots more_dropdown">
													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
													<div class="dropdown-content">
														<span><i class='uil uil-share-alt'></i>Share</span>
														<span><i class="uil uil-windsock"></i>Report</span>
													 </div>																											
												</div>
												<div class="vdtodt">
													<span class="vdt14"><?php echo $vl->course_modified; ?></span>
												</div>
	<a href="<?php echo $dtl_link.$vl->m_course_id; ?>" class="crse14s"><?php echo $vl->m_course_title; ?></a>
											
											</div>
										</div>
									</div>
     <?php } } else {?>

								
                                  	<div class="col-md-12">

                                  		<h3 align="center" style="color: red">There is No Course in Your List</h3>

                                  	</div>

                                 <?php } ?>
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