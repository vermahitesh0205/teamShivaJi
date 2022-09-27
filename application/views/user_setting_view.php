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

	<!-- ======================================================== -->
	<style type="text/css">
		.ui[class*="left icon"].swdh19.select>select {
			padding-left: 2em !important;
			padding-right: 2em !important;
			height: 40px !important;
			font-size: 14px;
			font-weight: 400;
			font-family: 'Roboto', sans-serif;
		}

		.card {
			position: relative;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-direction: column;
			flex-direction: column;
			min-width: 0;
			word-wrap: break-word;
			background-color: #fff;
			background-clip: border-box;
			border: 1pxsolidrgba(0, 0, 0, .125);
			border-radius: 0.25rem;
			background-color: #c0c0c0;
			padding: 10px;
		}
	</style>
	<!-- ======================================================== -->

	<!-- =========================View===============Fix========= -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">
				<!-- ========================/View===============Fix========= -->

				<!-- =====================Page Content======================= -->
				<div class="row">
					<div class="col-lg-12">
						<h2 class="st_title"><i class='uil uil-cog'></i> Edit Profile</h2>
						<div class="setting_tabs">
							<ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-account-tab" data-toggle="pill" href="#pills-account" role="tab" aria-selected="true">Account</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-closeaccount-tab" data-toggle="pill" href="#pills-closeaccount" role="tab" aria-selected="false">Change Password</a>
								</li>
							</ul>
						</div>
						<div class="tab-content" id="pills-tabContent">

							<div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">

								<form method="post" action="#" id="frm-update-address">
									<div class="account_setting">
										<h4>Your <?php echo get_settings('app_name'); ?> Account</h4>
										<div class="basic_profile">
											<div class="basic_ptitle">
												<h4>Basic Profile</h4>
												<p>Add information about yourself</p>
											</div>
											<div class="basic_form">
												<div class="row">
													<div class="card" style="align-items:center;">
														<div class="col-lg-12">
															<div class="row">
																<div class="col-lg-4">
																	<div class="ui search focus mt-30">
																		<label>Your Name<span style="color: red;">*</span></label>
																		<div class="ui left icon input swdh11 swdh19">
																			<input class="prompt srch_explore" type="text" name="kh_user_fname" id="kh_user_fname" value="<?php echo $a_value[0]->kh_user_fname; ?>" required="" placeholder="Your Name">
																		</div>
																	</div>
																</div>
																<div class="col-lg-4">
																	<div class="ui search focus mt-30">
																		<label>Email Address<span style="color: red;">*</span></label>
																		<div class="ui left icon input swdh11 swdh19">
																			<input class="prompt srch_explore" type="text" name="kh_user_email" id="kh_user_email" value="<?php echo $a_value[0]->kh_user_email; ?>" required="" placeholder="Email Address">
																		</div>
																	</div>
																</div>
																<div class="col-lg-4">
																	<div class="ui search focus mt-30">
																		<label>Contact Number<span style="color: red;">*</span></label>
																		<div class="ui left icon input swdh11 swdh19">
																			<input class="prompt srch_explore" type="text" name="kh_user_contact" id="kh_user_contact" value="<?php echo $a_value[0]->kh_user_contact; ?>" required="" placeholder="Contact Number">
																		</div>
																	</div>
																</div>
																<div class="col-lg-4">
																	<div class="ui search focus mt-30">
																		<label>Alternative Contact Number</label>
																		<div class="ui left icon input swdh11 swdh19">
																			<input class="prompt srch_explore" type="number" name="kh_user_alt_contact" id="kh_user_alt_contact" value="<?php echo $a_value[0]->kh_user_alt_contact; ?>" placeholder="Alternative Contact Number">
																		</div>
																	</div>
																</div>
																<div class="col-lg-4">
																	<div class="ui search focus mt-30">
																		<label>Gender</label>
																		<div class="ui left icon select swdh11 swdh19">
																			<select class="prompt srch_explore" style="width: 100%" name="kh_user_gender" id="kh_user_gender" title="Select Gender">
																				<option value="" style="display: none;"> - - - Select - - - </option>
																				<option value="Female" <?php if ($a_value[0]->kh_user_gender == 'Female') echo "selected"; ?>>Female</option>
																				<option value="Male" <?php if ($a_value[0]->kh_user_gender == 'Male') echo "selected"; ?>>Male</option>
																			</select>
																		</div>
																	</div>
																</div>
																<div class="col-lg-4">
																	<div class="ui search focus mt-30">
																		<label>Date Of Birth</label>
																		<div class="ui left icon input swdh11 swdh19">
																			<input class="prompt srch_explore" type="date" name="kh_user_dob" id="kh_user_dob" value="<?php echo $a_value[0]->kh_user_dob; ?>" placeholder="Date Of Birth">
																		</div>
																	</div>
																</div>
																<div class="col-lg-12">
																	<div class="divider-1"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="basic_profile1">
												<div class="basic_ptitle">
													<h4>Address</h4>
												</div>
												<div class="basic_form">
													<div class="row">
														<div class="card" style="align-items:center;">
															<div class="col-lg-12">
																<div class="row">
																	<div class="col-lg-4">

																		<div class="mt-30 lbel25"> <label>Country<span style="color: red;">*</span></label> </div>
																		<div class="ui fluid search selection dropdown focus cntry152">
																			<input type="hidden" name="m_country_id" id="m_country_id" class="prompt srch_explore" value="<?php echo $a_value[0]->m_country_id; ?>">
																			<i class="dropdown icon"></i>
																			<div class="default text">Select Country</div>
																			<div class="menu">
																				<?php if (!empty($countries_list)) {
																					foreach ($countries_list as $r) {
																						echo '<div class="item" data-value="' . $r->m_country_id . '">' . $r->m_country_name . '</div>';
																					}
																				} ?>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-4">

																		<div class="mt-30 lbel25"> <label>State<span style="color: red;">*</span></label> </div>
																		<div class="ui fluid search selection dropdown focus cntry152">
																			<input type="hidden" name="m_state_id" id="m_state_id" class="prompt srch_explore" value="<?php echo $a_value[0]->m_state_id; ?>">
																			<i class="dropdown icon"></i>
																			<div class="default text">Select State</div>
																			<div class="menu">
																				<?php if (!empty($states_list)) {
																					foreach ($states_list as $r) {
																						echo '<div class="item" data-value="' . $r->m_state_id . '">' . $r->m_state_name . '</div>';
																					}
																				} ?>
																			</div>
																		</div>

																	</div>
																	<div class="col-lg-4">

																		<div class="mt-30 lbel25"> <label>City<span style="color: red;">*</span></label> </div>
																		<div class="ui fluid search selection dropdown focus cntry152">
																			<input type="hidden" name="kh_user_city" id="kh_user_city" class="prompt srch_explore" value="<?php echo $a_value[0]->kh_user_city; ?>">
																			<i class="dropdown icon"></i>
																			<div class="default text">Select City</div>
																			<div class="menu">
																				<?php if (!empty($cities_list)) {
																					foreach ($cities_list as $r) {
																						echo '<div class="item" data-value="' . $r->m_location_id . '">' . $r->m_location_city . '</div>';
																					}
																				} ?>
																			</div>
																		</div>

																	</div>
																	<div class="col-lg-4">

																		<div class="mt-30 lbel25"> <label>Area<span style="color: red;">*</span></label> </div>
																		<div class="ui fluid search selection dropdown focus cntry152">
																			<input type="hidden" name="kh_user_area_id" id="kh_user_area_id" class="prompt srch_explore" value="<?php echo $a_value[0]->kh_user_area_id; ?>">
																			<i class="dropdown icon"></i>
																			<div class="default text">Select Area</div>
																			<div class="menu">
																				<?php if (!empty($areas_list)) {
																					foreach ($areas_list as $r) {
																						echo '<div class="item" data-value="' . $r->area_id . '">' . $r->area_name . '</div>';
																					}
																				} ?>
																			</div>
																		</div>

																	</div>
																	<div class="col-lg-4">

																		<div class="ui search focus mt-30 lbel25">
																			<label>Aadhar Number</label>
																			<div class="ui left icon input swdh11 swdh19">
																				<input class="prompt srch_explore" type="number" name="khu_adhar_no" id="khu_adhar_no" value="<?php echo $a_value[0]->khu_adhar_no; ?>" placeholder="Aadhar Number">
																			</div>
																		</div>

																	</div>
																	<div class="col-lg-4">


																		<div class="ui search focus mt-30 lbel25">
																			<label>PAN Number</label>
																			<div class="ui left icon input swdh11 swdh19">
																				<input class="prompt srch_explore" type="number" name="khu_pan_no" id="khu_pan_no" value="<?php echo $a_value[0]->khu_pan_no; ?>" placeholder="PAN Number">
																			</div>
																		</div>

																	</div>
																	<div class="col-lg-12">
																		<div class="ui search focus mt-30">
																			<label>Address<span style="color: red;">*</span></label>
																			<div class="ui form swdh30">
																				<div class="field">
																					<textarea rows="3" name="kh_user_address" id="kh_user_address" required="" maxlength="300" placeholder="Address"><?php echo $a_value[0]->kh_user_address; ?></textarea>
																				</div>
																			</div>
																		</div>
																	</div>

																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<button type="submit" id="btn-update-address" class="save_btn" type="submit">Save Changes</button>
									</div>
								</form>
							</div>







							<div class="tab-pane fade" id="pills-closeaccount" role="tabpanel" aria-labelledby="pills-closeaccount-tab">
								<div class="account_setting">
									<h4>Change Password</h4>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="card">
											<div class="ui search focus mt-30">
												<div style="margin-bottom: 1em;" class="ui left icon input swdh11 swdh19">
													<input class="prompt srch_explore" type="password" name="yourassword" id="id_yourpassword" required="" maxlength="64" placeholder="Enter Old Password">
												</div>
												<br>
												<div class="ui left icon input swdh11 swdh19">
													<input class="prompt srch_explore" type="password" name="yourassword" id="id_yourpassword" required="" maxlength="64" placeholder="Enter New Password">
												</div>
												<div class="help-block" style="color:#000000">Are you sure you want to change Password?</div>
											</div>
										</div>
										<button class="save_payout_btn mbs20" type="submit">Change Password</button>
									</div>
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
	<?php $this->view('top_footer');
	$this->view('js/user_setting_js'); ?>
	<!-- ======================Top-Footer============Fix========= -->
</body>

</html>