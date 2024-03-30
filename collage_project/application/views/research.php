<!doctype html>
<html lang="en">

<head>
	<?php require_once(APPPATH . 'views/includes/css.php'); ?>
	<title>International School System</title>
</head>

<body>

	<?php require_once(APPPATH . 'views/includes/menu.php'); ?>
	<!-- content goes here -->
	<section class="banner_project">
		<img src="<?php echo base_url(); ?>assets/images/project_banner.jpg" alt="">
	</section>
	<section class="research-section">
		<div class="container">
			<div class="cor about-sp">
				<div class="ed-about-tit">
					<div class="con-title">
						<h2 >Project Details About <span>Student</span> & <span>Staff</span>  Members</h2>
					</div>
				</div>
				<div>
					<table class="table table-responsive">
							<tr>
								<td><a href="#">Under graduate <i class="fa fa-download" aria-hidden="true"></i></a></td>
								<td><a href="#">Post Graduate <i class="fa fa-download" aria-hidden="true"></i></a></td>
								<td><a href="#">Staff <i class="fa fa-download" aria-hidden="true"></i></a></td>
							</tr>
					</table>
				</div>
			</div>




		</div>
	</section>
	<!-- content goes here ends -->
	<?php require_once(APPPATH . 'views/includes/footer.php'); ?>


	<style>
		.research-section{
			padding:40px 0;
		}
		.research-section .table-responsive tr td {
			border:1px solid #000;
			text-align: center;
		}
		.research-section .table-responsive tr td:hover,
		.research-section .table-responsive tr td:hover a{
			background: #f26838;
			color:#fff;
		}
		.banner_project img{
			width:100%;
			height:200px;
			object-fit: cover;
		}
		.banner_project{
			position: relative;
		}
		.banner_project::after{
			content: '';
			position: absolute;
			top:0;
			left:0;
			background-color: #000;
			opacity: 0.8;
			width:100%;
			height:100%;
		}
		
	</style>
</body>

</html>
