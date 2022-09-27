<!DOCTYPE html>
<html lang="en">

<head>
	<!-- ======================Top-Header============Fix========= -->
	<?php $this->view('top_header'); ?>
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
	<!-- ======================Top-Header============Fix========= -->
</head>

<body>

	<!-- ========================Header==============Fix========= -->
	<?php $this->view($header_view); ?>
	<!-- ========================Header==============Fix========= -->

	<!-- ========================SideBar=============Fix========= -->
	<?php $this->view($sidebar_list); ?>
	<div class="wrapper" style="padding-top: 60px;">
		<div class="_215b15">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title125">
							<div class="titleleft">
								<div class="ttl121">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="<?php echo site_url('Home'); ?>" style="color:white;">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page" style="color:white;">PRIVACY POLICY</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<div class="title126">
							<h2>PRIVACY POLICY</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="sa4d25">
			<div class="container-fluid" style="background-color:white;" width="100%" height="100%">
				<center>
					<h2 style="margin-top:50px;font-weight:bold">PRIVACY POLICY</h2>
					<center>

						<hr style="width: 100px;" />
						<div class="row" style="margin-top: 50px;margin-bottom:50px;">
							<div class="col-sm-12 container" style="margin: left 50px;margin: right 50px;">

								<p style="font-size:15px;" class="text-justify px-md-5 px-2">
									dolor sit amet. Qui distinctio placeat aut galisum ratione qui odit molestiae. Ut recusandae exercitationem et reprehenderit itaque ut soluta earum sed dolorem nobis ut quidem explicabo et facere repellendus qui fugit consequuntur.

									Aut aliquam atque et perspiciatis voluptatem est veniam corporis. Est ipsum magni in perferendis velit voluptas omnis sit quas veniam vel Quis quia ut labore. Eos modi esse et doloremque atque et galisum quaerat ut dolor officiis qui doloremque omnis qui eius temporibus et quidem nihil.

									Qui dolorem veritatis ut voluptates accusantium ut amet distinctio et iste repudiandae in mollitia magnam ut quia itaque eum minima molestiae. In necessitatibus quibusdam et explicabo laborum sit voluptatem itaque 33 vero porro. Nam voluptas soluta qui veniam deleniti qui itaque perspiciatis nam eius sint! Qui voluptatem sequi ut galisum natus et voluptatem quaerat!
								</p>

							</div>

						</div>
					</center>
				</center>
			</div>


		</div>
	</div>
	<!-- ========================Footer==============Fix========= -->
	<?php $this->view($footer_view); ?>
	</div>

	<!-- ========================Footer==============Fix========= -->
	</div>
	<!-- Body End -->
	<!-- ======================Top-Footer============Fix========= -->
	<?php $this->view('top_footer'); ?>

</body>

</html>