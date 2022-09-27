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
<style>
	.card {
    padding: 10px;
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
	border-radius:0.4px;
	background-color:#C0C0C0 ;
    border: 1pxsolidrgba(0,0,0,.125);
    border-radius: 0.25rem;
	
}

	</style>
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
					<div class="col-lg-12">
						<h2 class="st_title"><i class="uil uil-comment-info-alt"></i> Send Feedback</h2>
						<div class="row" style ="justify-content: center;">

							<div class="col-lg-6 col-md-8">
								
								<div class="card" align-item = "center">

								

								<div class="ui search focus">
									<div class="ui left icon input swdh11 swdh19">
										<input class="prompt srch_explore" type="email" name="emailaddress" value="" id="id_email" required="" maxlength="64" placeholder="Email address">															
									</div>
								</div>
								<div class="ui search focus mt-30">																
									<div class="ui form swdh30">
										<div class="field">
											<textarea rows="6" name="description" id="id_about" placeholder="Describe your issue or share your ideas"></textarea>
										</div>
									</div>
								</div>
								<div class="form-group1 mt-30">
									<label for="file5">Add Screenshots</label>
									<div class="image-upload-wrap">
										<input class="file-upload-input" id="file5" type="file" onchange="readURL(this);" accept="image/*">
										<div class="drag-text">
										  <i class="fas fa-cloud-upload-alt"></i>
										  <h4>Select screenshots to upload</h4>
										  <p>or drag and drop screenshots</p>
										</div>
									</div>															
								</div>
								<button class="save_btn" type="submit">Send Feedback</button>
								
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
<script type="text/javascript">
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
           $(input).next('div').attr('src', e.target.result);
           $(input).next('div').css("background-image", "url('"+e.target.result+"')");
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>