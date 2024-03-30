<!DOCTYPE html>
<html lang="en">

<head>
	<title>Education Master Template</title>
	<?php require_once(APPPATH . 'views/includes/css.php'); ?>
</head>



<body>


	<?php require_once(APPPATH . 'views/includes/menu.php'); ?>

	<!-- SLIDER -->
	<section>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item slider1 active">
					<img src="<?php echo base_url() ?>assets/images/slider/1.jpg" alt="" />
					<div class="carousel-caption slider-con">
						<h2>Welcome to <span>University</span></h2>
						<p>
							There are many variations of passages of Lorem Ipsum available,
							but the majority have suffered alteration in some form
						</p>
						<a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url() ?>assets/images/slider/2.jpg" alt="" />
					<div class="carousel-caption slider-con">
						<h2>Admission open <span>2018</span></h2>
						<p>
							There are many variations of passages of Lorem Ipsum available,
							but the majority have suffered alteration in some form
						</p>
						<a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2">Read More</a>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url() ?>assets/images/slider/3.jpg" alt="" />
					<div class="carousel-caption slider-con">
						<h2>Education <span>Master</span></h2>
						<p>
							There are many variations of passages of Lorem Ipsum available,
							but the majority have suffered alteration in some form
						</p>
						<a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
					</div>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<i class="fa fa-chevron-left slider-arr"></i>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<i class="fa fa-chevron-right slider-arr"></i>
			</a>
		</div>
	</section>

	<!-- QUICK LINKS -->
	<section>
		<div class="container">
			<div class="row m-0">
				<div class="wed-hom-ser">
					<ul>
						<li>
							<a href="awards.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="<?php echo base_url() ?>assets/images/icon/h-ic1.png" alt="" /> Academy</a>
						</li>
						<li>
							<a href="admission.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="<?php echo base_url() ?>assets/images/icon/h-ic2.png" alt="" /> Admission</a>
						</li>
						<li>
							<a href="all-courses.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="<?php echo base_url() ?>assets/images/icon/h-ic4.png" alt="" /> Courses</a>
						</li>
						<li>
							<a href="seminar.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="<?php echo base_url() ?>assets/images/icon/h-ic3.png" alt="" /> Seminar</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- DISCOVER MORE -->
	<section>
		<div class="container com-sp pad-bot-70">
			<div class="row m-0">
				<div class="con-title">
					<h2>About The <span>Department</span></h2>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui illum
						debitis delectus dolor minima eveniet
					</p>
				</div>
			</div>
			<div class="row m-0">
				<div class="ed-course col-lg-9 col-md-8">
					<div class="col-sm-4 col-xs-12">
						<div class="ed-course-in">
							<a class="course-overlay" href="about.html">
								<img src="<?php echo base_url() ?>assets/images/civil.jpg" alt="" />
								<span>Civil Engineering</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="ed-course-in">
							<a class="course-overlay" href="admission.html">
								<img src="<?php echo base_url() ?>assets/images/Electrical.jpg" alt="" />
								<span>Electrical Engineering</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="ed-course-in">
							<a class="course-overlay" href="dashboard.html">
								<img src="<?php echo base_url() ?>assets/images/Mechanical.jpg" alt="" />
								<span>Mechanical Engineering</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="ed-course-in">
							<a class="course-overlay" href="research.html">
								<img src="<?php echo base_url() ?>assets/images/Electronics.jpg" alt="" />
								<span>Electronics & Commu Engineering</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="ed-course-in">
							<a class="course-overlay" href="all-courses.html">
								<img src="<?php echo base_url() ?>assets/images/computer.jpg" alt="" />
								<span>Computer Science</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="ed-course-in">
							<a class="course-overlay" href="db-time-line.html">
								<img src="<?php echo base_url() ?>assets/images/chemical.jpg" alt="" />
								<span>Chemical Engineering</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 pl-0 clearfix-md-block">
					<div class="card-container">
						<h4 class="heading-news">Latest News</h4>
						<marquee direction="up" height="300px" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
							<a href="#">
								<h5>
									International Conference on Materials Science[ICMS-2022]
									Virtual on 11-13th April,2022 Organized by Department of
									Physics, JNTUA ANANTAPUR
								</h5>
							</a>
							<br />
							<a href="#">
								<h5>
									List of students of Gold Medals for academic year 2O2O- 2O21
								</h5>
							</a>
							<br />
							<a href="#">
								<h5>
									International Conference on Materials science [ICMS-2022]
									Virtual 11th-13th April, 2022 Organized by Department of
									physics, JNTUACEA, Ananthapuramu
								</h5>
							</a>
							<br />
							<a href="#">
								<h5>
									II MTech-I Semester (ECE-IoT) Regular/Supplementary
									Examinations, Nov/Dec 2021 (R15 Regulations)
								</h5>
							</a>
							<br />
							<a href="#">
								<h5>
									I MTech-I Semester Regular/Supplementary Examinations,
									Nov/Dec 2021 (R15 Regulations)
								</h5>
							</a>
							<br />
							<a href="#">
								<h5>
									I MCA-II Semester Regular/Supplementary Examinations, Dec
									2021 (R20 Regulations)
								</h5>
							</a>
							<br />
							<a href="#">
								<h5>
									III MCA-I Semester Regular/Supplementary Examinations, Dec
									2021 (R15 Regulations)
								</h5>
							</a>
							<br />
							<a href="#">
								<h5>
									II B. Tech-II Semester Regular/Supplementary Examinations,
									Oct/Nov 2021 (R19 Regulations)
								</h5>
							</a>
							<br />
							<a href="#">
								<h5>
									I B. Tech-II Semester Regular/Supplementary Examinations,
									Oct/Nov 2021 (R20 Regulations)
								</h5>
							</a>
							<br />
							<a href="#">
								<h5>Circular: MCA &amp; M.Tech-Results Declaration</h5>
							</a>
							<br />
							<a href="#">
								<h5>Circular:B.Tech-Results Declaration</h5>
							</a>
							<br />
							<a target="_blank" href="#">
								<h5>https://www.cse.iitk.ac.in/</h5>
							</a>
							<br />
							<a target="_blank" href="#">
								<h5>
									Grievance system portal Link:
									https://www.vmedulife.com/institute/e-grievance/home/jntua-cea-anantapur
								</h5>
							</a>
							<br />
							<a href="#">
								<h5>
									Awarding of Gold Medals at the Eleventh Convocation 2021
								</h5>
							</a>
							<br />
						</marquee>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="pop-cour">
		<div class="container com-sp pad-bot-70">
			<div class="row m-0">
				<div class="con-title">
					<h2>Mid <span>Exams</span></h2>
					<p>
						Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut
						pellentesque maximus lacus, nec pharetra augue.
					</p>
				</div>
			</div>
			<div>
				<div class="row m-0" style="margin-top: 30px">
					<div class="col-md-2 mb-3">
						<ul class="nav nav-pills flex-column" id="myTab" role="tablist">
							<li class="nav-item active">
								<a class="nav-link active show" id="about" data-toggle="tab" href="#about1" role="tab" aria-controls="about1" aria-selected="true">B.Tech</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="vision" data-toggle="tab" href="#vision2" role="tab" aria-controls="vision2" aria-selected="false">M.Tech</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pos" data-toggle="tab" href="#pos1" role="tab" aria-controls="pos1" aria-selected="false">MBA</a>
							</li>
						</ul>
					</div>
					<div class="col-md-10">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade active in" id="about1" role="tabpanel" aria-labelledby="about">
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>I B.Tech</label>
									<a href="#">I Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>II B.Tech</label>
									<a href="#">I Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>III B.Tech</label>
									<a href="#">I Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>IV B.Tech</label>
									<a href="#">I Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
							</div>

							<div class="tab-pane fade" id="vision2" role="tabpanel" aria-labelledby="vision">
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>I M.Tech</label>
									<a href="#">I Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>II M.Tech</label>
									<a href="#">I Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
							</div>

							<div class="tab-pane fade" id="pos1" role="tabpanel" aria-labelledby="pos">
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>I MBA</label>
									<a href="#">I Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>II MBA</label>
									<a href="#">I Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Mid Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->


	<!-- <section class="pop-cour">
		<div class="container com-sp pad-bot-70" style="padding-top:0;">
			<div class="row m-0">
				<div class="con-title">
					<h2>Semester <span>Exams</span></h2>
					<p>
						Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut
						pellentesque maximus lacus, nec pharetra augue.
					</p>
				</div>
			</div>
			<div>
				<div class="row m-0" style="margin-top: 30px">
					<div class="col-md-2 mb-3">
						<ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<li class="nav-item active">
								<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">B.Tech</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">M.Tech</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">MBA</a>
							</li>
						</ul>
					</div>
					<div class="col-md-10">
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade active in" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>I B.Tech</label>
									<a href="#">I Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>II B.Tech</label>
									<a href="#">I Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>III B.Tech</label>
									<a href="#">I Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>IV B.Tech</label>
									<a href="#">I Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
							</div>
							<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>I M.Tech</label>
									<a href="#">I Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>II M.Tech</label>
									<a href="#">I Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
							</div>
							<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>I MBA</label>
									<a href="#">I Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
								<p class="cal">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>II MBA</label>
									<a href="#">I Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>

									<a href="#">II Sem Exams <i class="fa fa-download" aria-hidden="true"></i>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- POPULAR COURSES -->
	<section class="pop-cour d-none" style="display: none">
		<div class="container com-sp pad-bot-70">
			<div class="row m-0">
				<div class="con-title">
					<h2>Popular <span>Courses</span></h2>
					<p>
						Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut
						pellentesque maximus lacus, nec pharetra augue.
					</p>
				</div>
			</div>
			<div class="row m-0">
				<div class="col-md-6">
					<div>
						<!--POPULAR COURSES-->
						<div class="home-top-cour">
							<!--POPULAR COURSES IMAGE-->
							<div class="col-md-3">
								<img src="<?php echo base_url() ?>assets/images/course/sm-1.jpg" alt="" />
							</div>
							<!--POPULAR COURSES: CONTENT-->
							<div class="col-md-9 home-top-cour-desc">
								<a href="course-details.html">
									<h3>Aerospace Engineering</h3>
								</a>
								<h4>Technology / Space / Aerospace</h4>
								<p>
									Classes started from coming friday(21 jun 2017),total seats
									72 and available seats 10
								</p>
								<span class="home-top-cour-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li>
											<a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
												Book Now</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10
												Aavailable</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i>
												570</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--POPULAR COURSES-->
						<div class="home-top-cour">
							<!--POPULAR COURSES IMAGE-->
							<div class="col-md-3">
								<img src="<?php echo base_url() ?>assets/images/course/sm-2.jpg" alt="" />
							</div>
							<!--POPULAR COURSES: CONTENT-->
							<div class="col-md-9 home-top-cour-desc">
								<a href="course-details.html">
									<h3>Agriculture Courses</h3>
								</a>
								<h4>Technology / Space / Aerospace</h4>
								<p>
									Classes started from coming friday(21 jun 2017),total seats
									72 and available seats 10
								</p>
								<span class="home-top-cour-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li>
											<a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
												Book Now</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>40
												Aavailable</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i>
												320</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--POPULAR COURSES-->
						<div class="home-top-cour">
							<!--POPULAR COURSES IMAGE-->
							<div class="col-md-3">
								<img src="<?php echo base_url() ?>assets/images/course/sm-3.jpg" alt="" />
							</div>
							<!--POPULAR COURSES: CONTENT-->
							<div class="col-md-9 home-top-cour-desc">
								<a href="course-details.html">
									<h3>Marine Engineering</h3>
								</a>
								<h4>Technology / Ocean / Marine</h4>
								<p>
									Classes started from coming friday(21 jun 2017),total seats
									72 and available seats 10
								</p>
								<span class="home-top-cour-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li>
											<a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
												Book Now</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>04
												Aavailable</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i>
												1020</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--POPULAR COURSES-->
						<div class="home-top-cour">
							<!--POPULAR COURSES IMAGE-->
							<div class="col-md-3">
								<img src="<?php echo base_url() ?>assets/images/course/sm-4.jpg" alt="" />
							</div>
							<!--POPULAR COURSES: CONTENT-->
							<div class="col-md-9 home-top-cour-desc">
								<a href="course-details.html">
									<h3>Building, Construction Management</h3>
								</a>
								<h4>Technology / Construction / Building</h4>
								<p>
									Classes started from coming friday(21 jun 2017),total seats
									72 and available seats 10
								</p>
								<span class="home-top-cour-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li>
											<a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
												Book Now</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32
												Aavailable</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i>
												124</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<!--POPULAR COURSES-->
						<div class="home-top-cour">
							<!--POPULAR COURSES IMAGE-->
							<div class="col-md-3">
								<img src="<?php echo base_url() ?>assets/images/course/sm-5.jpg" alt="" />
							</div>
							<!--POPULAR COURSES: CONTENT-->
							<div class="col-md-9 home-top-cour-desc">
								<a href="course-details.html">
									<h3>Fashion Technology</h3>
								</a>
								<h4>Technology / Trends / Fashion</h4>
								<p>
									Classes started from coming friday(21 jun 2017),total seats
									72 and available seats 10
								</p>
								<span class="home-top-cour-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li>
											<a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
												Book Now</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10
												Aavailable</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i>
												570</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--POPULAR COURSES-->
						<div class="home-top-cour">
							<!--POPULAR COURSES IMAGE-->
							<div class="col-md-3">
								<img src="<?php echo base_url() ?>assets/images/course/sm-6.jpg" alt="" />
							</div>
							<!--POPULAR COURSES: CONTENT-->
							<div class="col-md-9 home-top-cour-desc">
								<a href="course-details.html">
									<h3>Agriculture Courses</h3>
								</a>
								<h4>Technology / Space / Aerospace</h4>
								<p>
									Classes started from coming friday(21 jun 2017),total seats
									72 and available seats 10
								</p>
								<span class="home-top-cour-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li>
											<a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
												Book Now</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>40
												Aavailable</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i>
												320</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--POPULAR COURSES-->
						<div class="home-top-cour">
							<!--POPULAR COURSES IMAGE-->
							<div class="col-md-3">
								<img src="<?php echo base_url() ?>assets/images/course/sm-7.jpg" alt="" />
							</div>
							<!--POPULAR COURSES: CONTENT-->
							<div class="col-md-9 home-top-cour-desc">
								<a href="course-details.html">
									<h3>Marine Engineering</h3>
								</a>
								<h4>Technology / Ocean / Marine</h4>
								<p>
									Classes started from coming friday(21 jun 2017),total seats
									72 and available seats 10
								</p>
								<span class="home-top-cour-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li>
											<a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
												Book Now</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>04
												Aavailable</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i>
												1020</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--POPULAR COURSES-->
						<div class="home-top-cour">
							<!--POPULAR COURSES IMAGE-->
							<div class="col-md-3">
								<img src="<?php echo base_url() ?>assets/images/course/sm-8.jpg" alt="" />
							</div>
							<!--POPULAR COURSES: CONTENT-->
							<div class="col-md-9 home-top-cour-desc">
								<a href="course-details.html">
									<h3>Building, Construction Management</h3>
								</a>
								<h4>Technology / Construction / Building</h4>
								<p>
									Classes started from coming friday(21 jun 2017),total seats
									72 and available seats 10
								</p>
								<span class="home-top-cour-rat">4.2</span>
								<div class="hom-list-share">
									<ul>
										<li>
											<a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>
												Book Now</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32
												Aavailable</a>
										</li>
										<li>
											<a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i>
												124</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- UPCOMING EVENTS -->
	<section style="display: none">
		<div class="container com-sp pad-bot-0">
			<div class="row m-0">
				<div class="col-md-4">
					<!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
					<div class="ho-ev-latest ho-ev-latest-bg-1">
						<div class="ho-lat-ev">
							<h4>Upcoming Event</h4>
							<p>
								Nulla at velit convallis, venenatis lacus quis, efficitur
								lectus.
							</p>
						</div>
					</div>
					<div class="ho-event ho-event-mob-bot-sp">
						<ul>
							<li>
								<div class="ho-ev-date">
									<span>07</span><span>jan,2018</span>
								</div>
								<div class="ho-ev-link">
									<a href="events.html">
										<h4>Latinoo College Expo 2018</h4>
									</a>
									<p>
										Nulla at velit convallis, venenatis lacus quis, efficitur
										lectus.
									</p>
									<span>9:15 am – 5:00 pm</span>
								</div>
							</li>
							<li>
								<div class="ho-ev-date">
									<span>12</span><span>jan,2018</span>
								</div>
								<div class="ho-ev-link">
									<a href="events.html">
										<h4>Training at Team Fabio Clemente</h4>
									</a>
									<p>Nulla at velit convallis venenatis.</p>
									<span>9:15 am – 5:00 pm</span>
								</div>
							</li>
							<li>
								<div class="ho-ev-date">
									<span>26</span><span>jan,2018</span>
								</div>
								<div class="ho-ev-link">
									<a href="events.html">
										<h4>Nulla at velit convallis</h4>
									</a>
									<p>
										Nulla at velit convallis, venenatis lacus quis, efficitur
										lectus.
									</p>
									<span>9:15 am – 5:00 pm</span>
								</div>
							</li>
							<li>
								<div class="ho-ev-date">
									<span>18</span><span>jan,2018</span>
								</div>
								<div class="ho-ev-link">
									<a href="events.html">
										<h4>Admissions Information Session and Tour</h4>
									</a>
									<p>
										Nulla at velit convallis, venenatis lacus quis, efficitur
										lectus.
									</p>
									<span>9:15 am – 5:00 pm</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
					<div class="ho-ev-latest ho-ev-latest-bg-2">
						<div class="ho-lat-ev">
							<h4>Job Vacants</h4>
							<p>
								Nulla at velit convallis, venenatis lacus quis, efficitur
								lectus.
							</p>
						</div>
					</div>
					<div class="ho-event ho-event-mob-bot-sp">
						<ul>
							<li>
								<div class="ho-ev-img">
									<img src="<?php echo base_url() ?>assets/images/event/1.jpg" alt="" />
								</div>
								<div class="ho-ev-link">
									<a href="#">
										<h4>Almost before we knew it, we had left the ground</h4>
									</a>
									<p>Etiam ornare lacus nec lectus vestibulum aliquam.</p>
									<span>Location: New York</span>
								</div>
							</li>
							<li>
								<div class="ho-ev-img">
									<img src="<?php echo base_url() ?>assets/images/event/2.jpg" alt="" />
								</div>
								<div class="ho-ev-link">
									<a href="#">
										<h4>Then came the night of the first falling star.</h4>
									</a>
									<p>Vestibulum sollicitudin sem arcu</p>
									<span>Location: Los Angeles</span>
								</div>
							</li>
							<li>
								<div class="ho-ev-img">
									<img src="<?php echo base_url() ?>assets/images/event/3.jpg" alt="" />
								</div>
								<div class="ho-ev-link">
									<a href="#">
										<h4>Educate to Empower NYE Party</h4>
									</a>
									<p>
										Vestibulum sollicitudin sem arcu, eget ullamcorper purus
										hendrerit
									</p>
									<span>Location: Chennai</span>
								</div>
							</li>
							<li>
								<div class="ho-ev-img">
									<img src="<?php echo base_url() ?>assets/images/event/4.jpg" alt="" />
								</div>
								<div class="ho-ev-link">
									<a href="#">
										<h4>Then came the night of the first falling star.</h4>
									</a>
									<p>Venenatis lacus lectus.</p>
									<span>Location: Chicago</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
					<div class="ho-ev-latest ho-ev-latest-bg-3">
						<div class="ho-lat-ev">
							<h4>Register & Login</h4>
							<p>
								Student area velit convallis venenatis lacus quis, efficitur
								lectus.
							</p>
						</div>
					</div>
					<div class="ho-st-login">
						<ul class="tabs tabs-hom-reg">
							<li class="tab col s6"><a href="#hom-vijay">Register</a></li>
							<li class="tab col s6"><a href="#hom_log">Login</a></li>
						</ul>
						<div id="hom-vijay" class="col s12">
							<form class="col s12">
								<div class="row m-0">
									<div class="input-field col s12">
										<input type="text" class="validate" />
										<label>User name</label>
									</div>
								</div>
								<div class="row m-0">
									<div class="input-field col s12">
										<input type="text" class="validate" />
										<label>Email id</label>
									</div>
								</div>
								<div class="row m-0">
									<div class="input-field col s12">
										<input type="password" class="validate" />
										<label>Password</label>
									</div>
								</div>
								<div class="row m-0">
									<div class="input-field col s12">
										<input type="password" class="validate" />
										<label>Confirm password</label>
									</div>
								</div>
								<div class="row m-0">
									<div class="input-field col s12">
										<input type="submit" value="Register" class="waves-effect waves-light light-btn" />
									</div>
								</div>
							</form>
						</div>
						<div id="hom_log" class="col s12">
							<form class="col s12">
								<div class="row m-0">
									<div class="input-field col s12">
										<input type="text" class="validate" />
										<label>Student user name</label>
									</div>
								</div>
								<div class="row m-0">
									<div class="input-field col s12">
										<input type="text" class="validate" />
										<label>Password</label>
									</div>
								</div>
								<div class="row m-0">
									<div class="input-field col s12">
										<input type="submit" value="Login" class="waves-effect waves-light light-btn" />
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- NEWS AND EVENTS -->
	<section>
		<div class="container com-sp">
			<div class="row m-0">
				<div class="con-title">
					<h2>Results & <span>Events</span></h2>
					<p>
						Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut
						pellentesque maximus lacus, nec pharetra augue.
					</p>
				</div>
			</div>
			<div class="row m-0">
				<div class="col-md-4">
					<div class="bot-gal h-gal ho-event-mob-bot-sp">
						<h4>Photo Gallery</h4>
						<ul>
							<li>
								<img class="materialboxed" data-caption="Education master image captions" src="<?php echo base_url() ?>assets/images/ami/8.jpg" alt="" />
							</li>
							<li>
								<img class="materialboxed" data-caption="Education master image captions" src="<?php echo base_url() ?>assets/images/ami/9.jpg" alt="" />
							</li>
							<li>
								<img class="materialboxed" data-caption="Education master image captions" src="<?php echo base_url() ?>assets/images/ami/10.jpg" alt="" />
							</li>
							<li>
								<img class="materialboxed" data-caption="Education master image captions" src="<?php echo base_url() ?>assets/images/ami/11.jpg" alt="" />
							</li>
							<li>
								<img class="materialboxed" data-caption="Education master image captions" src="<?php echo base_url() ?>assets/images/ami/1.jpg" alt="" />
							</li>
							<li>
								<img class="materialboxed" data-caption="Education master image captions" src="<?php echo base_url() ?>assets/images/ami/2.jpg" alt="" />
							</li>
							<li>
								<img class="materialboxed" data-caption="Education master image captions" src="<?php echo base_url() ?>assets/images/ami/3.jpg" alt="" />
							</li>
							<li>
								<img class="materialboxed" data-caption="Education master image captions" src="<?php echo base_url() ?>assets/images/ami/4.jpg" alt="" />
							</li>
							<li>
								<img class="materialboxed" data-caption="Education master image captions" src="<?php echo base_url() ?>assets/images/ami/5.jpg" alt="" />
							</li>
							<li>
								<img class="materialboxed" data-caption="Education master image captions" src="<?php echo base_url() ?>assets/images/ami/6.jpg" alt="" />
							</li>
							<li>
								<img class="materialboxed" data-caption="Education master image captions" src="<?php echo base_url() ?>assets/images/ami/7.jpg" alt="" />
							</li>
							<li>
								<img class="materialboxed" data-caption="Education master image captions" src="<?php echo base_url() ?>assets/images/ami/8.jpg" alt="" />
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="bot-gal h-vid ho-event-mob-bot-sp">
						<h4>Video Gallery</h4>
						<iframe src="https://www.youtube.com/embed/2WqFtiR4-F4?autoplay=0&amp;showinfo=0&amp;controls=0" allowfullscreen></iframe>
						<h5>Maecenas sollicitudin lacinia</h5>
						<p>
							Maecenas finibus neque a tellus auctor mattis. Aliquam tempor
							varius ornare. Maecenas dignissim leo leo, nec posuere purus
							finibus vitae.
						</p>
						<p>
							Quisque vitae neque at tellus malesuada convallis. Phasellus in
							lectus vitae ex euismod interdum non a lorem. Nulla bibendum.
							Curabitur mi odio, tempus quis risus cursus.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="bot-gal">
						<h4>Results Announcement</h4>
					</div>
					<div class="card-container">
						<div class="">
							<h4 class="heading-news">
								<strong><a href="notifications.php" style="color: #fff">Notice Board</a></strong>
							</h4>
						</div>
						<div class="panel-body">
							<marquee direction="up" height="300px" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
								<a href="#">
									<h5>
										Circular:IV BTECH_ I-SEM R17_2022 JANUARY Result Sheet
									</h5>
								</a>
								<br />
								<a href="#">
									<h5>
										IV B.Tech I Sem R17 &amp; R15 Results &amp; Recounting
										Notification
									</h5>
								</a>
								<br />
								<a href="#">
									<h5>
										Revised III B.Tech II Sem, R17 Supple time table
									</h5>
								</a>
								<br />
								<a href="#">
									<h5>III B.Tech I Sem R15 Supple Exam Time Table</h5>
								</a>
								<br />
								<a href="#">
									<h5>III B.Tech I Sem R17 Supple Exam Time Table</h5>
								</a>
								<br />
								<a href="#">
									<h5>
										III B.Tech I Sem R19 Revised End Exam Time Table
									</h5>
								</a>
								<br />
								<a href="#">
									<h5>II-I Sem R17 Revised supplementary time table</h5>
								</a>
								<br />
								<a href="#">
									<h5>
										II B.Tech I Semester Mid and End Exam Timetables both
										Regular and Supplementary examinations
									</h5>
								</a>
								<br />
								<a href="#">
									<h5>
										III B.Tech I Semester R19 Revised II Mid Time Table
									</h5>
								</a>
								<br />
								<a href="#">
									<h5>
										Revised III B.Tech II Sem, R15 Supple time table
									</h5>
								</a>
								<br />
								<a href="#">
									<h5>IV B.Tech II Sem Academic calender</h5>
								</a>
								<br />
								<a href="#">
									<h5>III B.Tech I sem Revised Academic calendar</h5>
								</a>
								<br />
								<a href="#">
									<h5>
										Results sheet of I MTech-II Sem (R15)-Nov/Dec 2021.
									</h5>
								</a>
								<br />
								<a href="#">
									<h5>III B.Tech II sem R15, R17 Exam Notification</h5>
								</a>
								<br />
								<a href="#">
									<h5>
										III B.Tech I sem R15, R17, R19 Exam Notification
									</h5>
								</a>
								<br />
								<a href="#">
									<h5>
										I MCA-I Sem (2021 Ad Batch) Classwork
										Circular-Commencement of Classes from 03-01-2022 in online
										mode
									</h5>
								</a>
								<br />
							</marquee>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php require_once(APPPATH . 'views/includes/footer.php'); ?>



	<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
	<section>
		<!-- LOGIN SECTION -->
		<div id="modal1" class="modal fade" role="dialog">
			<div class="log-in-pop">
				<div class="log-in-pop-left">
					<h1>Hello...</h1>
					<p>
						Don't have an account? Create your account. It's take less then a
						minutes
					</p>
					<h4>Login with social media</h4>
					<ul>
						<li>
							<a href="#"><i class="fa fa-facebook"></i> Facebook</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-google"></i> Google+</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter"></i> Twitter</a>
						</li>
					</ul>
				</div>
				<div class="log-in-pop-right">
					<a href="#" class="pop-close" data-dismiss="modal"><img src="<?php echo base_url() ?>assets/images/cancel.png" alt="" />
					</a>
					<h4>Login</h4>
					<p>
						Don't have an account? Create your account. It's take less then a
						minutes
					</p>
					<form class="s12">
						<div>
							<div class="input-field s12">
								<input type="text" data-ng-model="name" class="validate" />
								<label>User name</label>
							</div>
						</div>
						<div>
							<div class="input-field s12">
								<input type="password" class="validate" />
								<label>Password</label>
							</div>
						</div>
						<div>
							<div class="s12 log-ch-bx">
								<p>
									<input type="checkbox" id="test5" />
									<label for="test5">Remember me</label>
								</p>
							</div>
						</div>
						<div>
							<div class="input-field s4">
								<input type="submit" value="Login" class="waves-effect waves-light log-in-btn" />
							</div>
						</div>
						<div>
							<div class="input-field s12">
								<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password</a>
								|
								<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- REGISTER SECTION -->
		<div id="modal2" class="modal fade" role="dialog">
			<div class="log-in-pop">
				<div class="log-in-pop-left">
					<h1>Hello...</h1>
					<p>
						Don't have an account? Create your account. It's take less then a
						minutes
					</p>
					<h4>Login with social media</h4>
					<ul>
						<li>
							<a href="#"><i class="fa fa-facebook"></i> Facebook</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-google"></i> Google+</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter"></i> Twitter</a>
						</li>
					</ul>
				</div>
				<div class="log-in-pop-right">
					<a href="#" class="pop-close" data-dismiss="modal"><img src="<?php echo base_url() ?>assets/images/cancel.png" alt="" />
					</a>
					<h4>Create an Account</h4>
					<p>
						Don't have an account? Create your account. It's take less then a
						minutes
					</p>
					<form class="s12">
						<div>
							<div class="input-field s12">
								<input type="text" data-ng-model="name1" class="validate" />
								<label>User name</label>
							</div>
						</div>
						<div>
							<div class="input-field s12">
								<input type="email" class="validate" />
								<label>Email id</label>
							</div>
						</div>
						<div>
							<div class="input-field s12">
								<input type="password" class="validate" />
								<label>Password</label>
							</div>
						</div>
						<div>
							<div class="input-field s12">
								<input type="password" class="validate" />
								<label>Confirm password</label>
							</div>
						</div>
						<div>
							<div class="input-field s4">
								<input type="submit" value="Register" class="waves-effect waves-light log-in-btn" />
							</div>
						</div>
						<div>
							<div class="input-field s12">
								<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- FORGOT SECTION -->
		<div id="modal3" class="modal fade" role="dialog">
			<div class="log-in-pop">
				<div class="log-in-pop-left">
					<h1>Hello...</h1>
					<p>
						Don't have an account? Create your account. It's take less then a
						minutes
					</p>
					<h4>Login with social media</h4>
					<ul>
						<li>
							<a href="#"><i class="fa fa-facebook"></i> Facebook</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-google"></i> Google+</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter"></i> Twitter</a>
						</li>
					</ul>
				</div>
				<div class="log-in-pop-right">
					<a href="#" class="pop-close" data-dismiss="modal"><img src="<?php echo base_url() ?>assets/images/cancel.png" alt="" />
					</a>
					<h4>Forgot password</h4>
					<p>
						Don't have an account? Create your account. It's take less then a
						minutes
					</p>
					<form class="s12">
						<div>
							<div class="input-field s12">
								<input type="text" data-ng-model="name3" class="validate" />
								<label>User name or email id</label>
							</div>
						</div>
						<div>
							<div class="input-field s4">
								<input type="submit" value="Submit" class="waves-effect waves-light log-in-btn" />
							</div>
						</div>
						<div>
							<div class="input-field s12">
								<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a>
								|
								<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- SOCIAL MEDIA SHARE -->
	<section>
		<div class="icon-float">
			<ul>
				<li>
					<a href="#" class="sh">1k <br />
						Share</a>
				</li>
				<li>
					<a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</li>
				<li>
					<a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				</li>
				<li>
					<a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</li>
				<li>
					<a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</li>
				<li>
					<a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
				</li>
				<li>
					<a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
				</li>
			</ul>
		</div>
	</section>

	<style>
		.card-container {
			border: 1px solid #337ab7;
			border-radius: 5px;
		}

		.card-container marquee {
			padding: 15px;
		}

		.heading-news {
			color: #fff;
			background-color: #337ab7;
			border-color: #337ab7;
			padding: 10px 15px;
			border-bottom: 1px solid transparent;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
		}

		.pl-0 {
			padding-left: 0;
		}

		.pop-cour .nav-pills>li {
			float: inherit;
		}

		.pop-cour .tab-content>.active {
			background-color: #fff;
			padding: 20px 25px 30px;
			border-left: 3px solid #f26838;
		}

		p.cal a {
			padding: 5px 15px;
			border: 1px solid #3498db;
			margin-left: 10px;
		}

		.pop-cour .cal label {
			width: 65px;
		}
		@media(max-width:991px){
			.clearfix-md-block{
				clear: both;
				padding:0 30px;
			}
			.con-title h2,
			.con-title h2 span{
				font-size:28px;
			}
		}
		@media(max-width:767px){
			.container.com-sp{
				padding: 15px;
			}
			.con-title h2,
			.con-title h2 span{
				font-size:24px;
				margin-top:15px;
			}
		}
	</style>


</body>

</html>
