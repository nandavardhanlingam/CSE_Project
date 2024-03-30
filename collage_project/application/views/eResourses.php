<!doctype html>
<html lang="en">

<head>
	<?php require_once(APPPATH . 'views/includes/css.php'); ?>
	<title>International School System</title>
</head>

<body>

	<?php require_once(APPPATH . 'views/includes/menu.php'); ?>
	<!-- content goes here -->


	<section class="eresocure_banner">
		<img src="<?php echo base_url(); ?>assets/images/research-centre-banner.jpg" alt="">
	</section>

	<section class="books-text">
		<div class="cor about-sp">
			<div class="ed-about-tit">
				<div class="con-title">
					<h2 style="padding-bottom:25px;">Text<span> Books</span></h2>
				</div>
			</div>

			<div>
				<div class="container">

					<table class="rwd-table">
						<tbody>
							<tr>
								<th>Title</th>
								<th>Description</th>
								<th>Download</th>

							</tr>
							<tr>
								<td data-th="Title">
									UPS5005
								</td>
								<td data-th="Description">
									UPS
								</td>
								<td data-th="Download">
									<i class="fa fa-download" aria-hidden="true"></i>
								</td>


							</tr>
							<tr>
								<td data-th="Title">
									UPS3449
								</td>
								<td data-th="Description">
									UPS South Inc.
								</td>
								<td data-th="Download">
									<i class="fa fa-download" aria-hidden="true"></i>
								</td>

							</tr>
							<tr>
								<td data-th="Title">
									BOX5599
								</td>
								<td data-th="Description">
									BOX Pro West
								</td>
								<td data-th="Download">
									<i class="fa fa-download" aria-hidden="true"></i>
								</td>

							</tr>
							<tr>
								<td data-th="Title">
									PAN9999
								</td>
								<td data-th="Description">
									Pan Providers and Co.
								</td>
								<td data-th="Download">
									<i class="fa fa-download" aria-hidden="true"></i>
								</td>

							</tr>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</section>
	<section class="books-text">
		<div class="cor about-sp">
			<div class="ed-about-tit">
				<div class="con-title">
					<h2 style="padding-bottom:25px;"><span> Materials</span></h2>

				</div>
			</div>

			<div>
				<div class="container">

					<table class="rwd-table">
						<tbody>
							<tr>
								<th>Title</th>
								<th>Description</th>
								<th>Download</th>

							</tr>
							<tr>
								<td data-th="Title">
									UPS5005
								</td>
								<td data-th="Description">
									UPS
								</td>
								<td data-th="Download">
									<i class="fa fa-download" aria-hidden="true"></i>
								</td>


							</tr>
							<tr>
								<td data-th="Title">
									UPS3449
								</td>
								<td data-th="Description">
									UPS South Inc.
								</td>
								<td data-th="Download">
									<i class="fa fa-download" aria-hidden="true"></i>
								</td>

							</tr>
							<tr>
								<td data-th="Title">
									BOX5599
								</td>
								<td data-th="Description">
									BOX Pro West
								</td>
								<td data-th="Download">
									<i class="fa fa-download" aria-hidden="true"></i>
								</td>

							</tr>
							<tr>
								<td data-th="Title">
									PAN9999
								</td>
								<td data-th="Description">
									Pan Providers and Co.
								</td>
								<td data-th="Download">
									<i class="fa fa-download" aria-hidden="true"></i>
								</td>

							</tr>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</section>
	<!-- content goes here ends -->
	<?php require_once(APPPATH . 'views/includes/footer.php'); ?>


	<style>
		.books-text {
			padding: 45px 0;
		}

		.rwd-table {
			margin: auto;
			min-width: 300px;
			max-width: 100%;
			border-collapse: collapse;
		}

		.rwd-table tr:first-child {
			border-top: none;
			background: #428bca;
			color: #fff;
		}

		.rwd-table tr {
			border-top: 1px solid #ddd;
			border-bottom: 1px solid #ddd;
			background-color: #f5f9fc;
		}

		.rwd-table tr:nth-child(odd):not(:first-child) {
			background-color: #ebf3f9;
		}

		.rwd-table th {
			display: none;
		}
		.rwd-table tr th{
			color:#fff !important;
		}

		.rwd-table td {
			display: block;
		}

		.rwd-table td:first-child {
			margin-top: .5em;
		}

		.rwd-table td:last-child {
			margin-bottom: .5em;
		}

		.rwd-table td:before {
			content: attr(data-th) ": ";
			font-weight: bold;
			width: 120px;
			display: inline-block;
			color: #000;
		}

		.rwd-table th,
		.rwd-table td {
			text-align: left;
		}

		.rwd-table {
			color: #333;
			border-radius: .4em;
			overflow: hidden;
		}

		.rwd-table tr {
			border-color: #bfbfbf;
		}

		.rwd-table th,
		.rwd-table td {
			padding: .5em 1em;
		}
		.eresocure_banner img{
			width:100%;
			height:250px;
			object-fit: cover;
		}
		.about-sp{
			padding: 0;
		}
		.eresocure_banner{
			position: relative;
		}
		.eresocure_banner::after{
			content: '';
			position: absolute;
			top:0;
			left:0;
			background-color: #000;
			opacity: 0.6;
			width:100%;
			height:100%;
		}
		@media screen and (max-width: 601px) {
			.rwd-table tr:nth-child(2) {
				border-top: none;
			}
		}

		@media screen and (min-width: 600px) {
			.rwd-table tr:hover:not(:first-child) {
				background-color: #d8e7f3;
			}

			.rwd-table td:before {
				display: none;
			}

			.rwd-table th,
			.rwd-table td {
				display: table-cell;
				padding: .25em .5em;
			}

			.rwd-table th:first-child,
			.rwd-table td:first-child {
				padding-left: 0;
			}

			.rwd-table th:last-child,
			.rwd-table td:last-child {
				padding-right: 0;
			}

			.rwd-table th,
			.rwd-table td {
				padding: 1em !important;
			}
		}
	</style>
</body>

</html>
