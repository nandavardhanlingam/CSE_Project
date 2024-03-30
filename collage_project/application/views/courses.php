<!doctype html>
<html lang="en">

<head>
	<?php require_once(APPPATH . 'views/includes/css.php'); ?>
	<title>Caurses</title>
</head>

<body>

	<?php require_once(APPPATH . 'views/includes/menu.php'); ?>
	<!-- content goes here -->

	<section class="course-banner">
		<img src="<?php echo base_url(); ?>assets/images/b-tech-banner.webp" alt="">
	</section>

	<section class="Courses-sec">
		<div class="container com-sp">
			<div class="row m-0">
				<div class="con-title">
					<h2><span>Courses</span></h2>
					<p>
						Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut
						pellentesque maximus lacus, nec pharetra augue.
					</p>
				</div>
			</div>
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
							<a class="nav-link" id="pos" data-toggle="tab" href="#pos1" role="tab" aria-controls="pos1" aria-selected="false">MCA</a>
						</li>
					</ul>
				</div>
				<div class="col-md-10">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade active in" id="about1" role="tabpanel" aria-labelledby="about">
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											<a>
												Time Tables
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">

											<ul>
												<li><a href="#">B-tech 1st year time table</a></li>
												<li><a href="#">B-tech 2nd year time table</a></li>
												<li><a href="#">B-tech 3rd year time table</a></li>
											</ul>

										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											<a>
												Circulars
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="view-content">
												<table class="views-table cols-4">
													<thead>
														<tr>
															<th class="views-field views-field-counter">Sr.No</th>
															<th class="views-field views-field-field-date">Date</th>
															<th class="views-field views-field-title">Subject</th>
															<th class="views-field views-field-field-issue-by">
																Issued As </th>
														</tr>
													</thead>
													<tbody>
														<tr class="odd views-row-first">
															<td class="views-field views-field-counter">
																1 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-04-19T00:00:00+05:30">Tuesday, April 19, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Seeking willingness from PG learners/Faculty for Translation of SWAYAM MOOCs </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even">
															<td class="views-field views-field-counter">
																2 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-04-11T00:00:00+05:30">Monday, April 11, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Invitation for Expression of Interest (EOI) for Development of Self-Paced/Credit Courses for SWAYAM Platform </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="odd">
															<td class="views-field views-field-counter">
																3 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-04-11T00:00:00+05:30">Monday, April 11, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Facilitation of Educational Opportunities in India for Indian Students studying in Ukraine. </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even">
															<td class="views-field views-field-counter">
																4 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-29T00:00:00+05:30">Tuesday, March 29, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Circular for Implementation of AICTE Student Learning Assessment Project (PARAKH) </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="odd">
															<td class="views-field views-field-counter">
																5 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-25T00:00:00+05:30">Friday, March 25, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Uploading data on "All India Survey on Higher Education". </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even">
															<td class="views-field views-field-counter">
																6 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-22T00:00:00+05:30">Tuesday, March 22, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Maintenance of safe working environment for female employees at workplace. </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="odd">
															<td class="views-field views-field-counter">
																7 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-10T00:00:00+05:30">Thursday, March 10, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Displaying the Mandatory Disclosure on Portal </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even">
															<td class="views-field views-field-counter">
																8 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-08T00:00:00+05:30">Tuesday, March 8, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Admission in B.Tech/BE course through Lateral Entry to 2nd year </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="odd">
															<td class="views-field views-field-counter">
																9 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-08T00:00:00+05:30">Tuesday, March 8, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Essential Requirements for Technical Institutions </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even views-row-last">
															<td class="views-field views-field-counter">
																10 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-04T00:00:00+05:30">Friday, March 4, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Institutes not applying on portal for past 6 years for Affiliating University </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
											<a>
												Syllabus
											</a>
										</h4>
									</div>
									<div id="collapsefour" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="table-responsive">
												<table class="table table-striped style_table">
													<tbody>
														<tr>
															<th colspan="2" style="text-align: center;color:#fff; background-color:#337ab7">First Year</th>
														</tr>
														<tr>
															<td style="text-align: center;"><strong>First Semester</strong></td>
															<td style="text-align: center;"><strong>Second Semester</strong></td>
														</tr>
														<tr>
															<td>Engineering Mathematics-I</td>
															<td>Engineering Mathematics-II</td>
														</tr>
														<tr>
															<td>Engineering Physics</td>
															<td>Engineering Physics/ Engineering Chemistry</td>
														</tr>
														<tr>
															<td>Engineering Chemistry</td>
															<td>Basic Electrical Engineering / Basic Electronics Engineering</td>
														</tr>
														<tr>
															<td>Systems in Mechanical Engineering</td>
															<td>Programming and Problem Solving / Engineering Mechanics</td>
														</tr>
														<tr>
															<td>Basic Electrical Engineering / Basic Electronics Engineering</td>
															<td>Engineering Graphics (Engineering Drawing)</td>
														</tr>
														<tr>
															<td>Programming and Problem Solving / Engineering Mechanics</td>
															<td>Project-Based Learning</td>
														</tr>
														<tr>
															<td>Workshop</td>
															<td>Physical Education-Exercise and Field Activities</td>
														</tr>
														<tr>
															<th colspan="2" style="text-align: center;color:#fff; background-color:#337ab7">Second Year</th>
														</tr>
														<tr>
															<td style="text-align: center;"><strong>Third Semester</strong></td>
															<td style="text-align: center;"><strong>Fourth Semester</strong></td>
														</tr>
														<tr>
															<td>Building Technology and Architectural Planning</td>
															<td>Geotechnical Engineering</td>
														</tr>
														<tr>
															<td>Mechanics of structure</td>
															<td>Survey</td>
														</tr>
														<tr>
															<td>Fluid Mechanics</td>
															<td>Concrete Technology</td>
														</tr>
														<tr>
															<td>Engineering Mathematics III</td>
															<td>Structural Analysis</td>
														</tr>
														<tr>
															<td>Engineering Geology</td>
															<td>Project management</td>
														</tr>
														<tr>
															<td>Awareness to civil Engineering Practices / Road Safety Management / Foreign Language</td>
															<td>Project-Based Learning</td>
														</tr>
														<tr>
															<th colspan="2" style="text-align: center;color:#fff; background-color:#337ab7">Third Year</th>
														</tr>
														<tr>
															<td style="text-align: center;"><strong>Fifth Semester</strong></td>
															<td style="text-align: center;"><strong>Sixth Semester</strong></td>
														</tr>
														<tr>
															<td>Hydrology and water resource engineering</td>
															<td>Advanced Surveying</td>
														</tr>
														<tr>
															<td>Infrastructure Engineering and Construction Techniques</td>
															<td>Project Management and Engineering Economics</td>
														</tr>
														<tr>
															<td>Structural Design –I</td>
															<td>Foundation Engineering</td>
														</tr>
														<tr>
															<td>Structural analysis – II</td>
															<td>Structural Design – II</td>
														</tr>
														<tr>
															<td>Fluid Mechanics – II</td>
															<td>Environmental Engineering – I</td>
														</tr>
														<tr>
															<th colspan="2" style="text-align: center;color:#fff; background-color:#337ab7">Fourth/Final Year</th>
														</tr>
														<tr>
															<td><strong>Seventh Semester</strong></td>
															<td><strong>Eighth Semester</strong></td>
														</tr>
														<tr>
															<td>Environmental Engineering II</td>
															<td>Dams and Hydraulic Structures</td>
														</tr>
														<tr>
															<td>Transportation Engineering</td>
															<td>Quantity Surveying, Contracts, and Tenders</td>
														</tr>
														<tr>
															<td>Structural Design and Drawing III</td>
															<td>Elective –III</td>
														</tr>
														<tr>
															<td>Elective – I</td>
															<td>Elective – IV</td>
														</tr>
														<tr>
															<td>Elective –II</td>
															<td>-</td>
														</tr>
													</tbody>
												</table>
											</div>

											
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapsethree">
											<a>
												Regulations
											</a>
										</h4>
									</div>
									<div id="collapsethree" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="#">regulations<i class="fa fa-download" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
											<a>
												Internal Marks
											</a>
										</h4>
									</div>
									<div id="collapsefive" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="#">Ist Year Internal Marks</a></li>
												<li><a href="#">IIst Year Internal Marks</a></li>
												<li><a href="#">IIIst Year Internal Marks</a></li>
											</ul>
										</div>
									</div>
								</div>


							</div>
						</div>

						<div class="tab-pane fade" id="vision2" role="tabpanel" aria-labelledby="vision">
							<div class="panel-group" id="accordion1">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion1" href="#collapsemtech1">
											<a>
												Time Tables
											</a>
										</h4>
									</div>
									<div id="collapsemtech1" class="panel-collapse collapse in">
										<div class="panel-body">

											<ul>
												<li><a href="#">M-tech 1st year time table</a></li>
												<li><a href="#">M-tech 2nd year time table</a></li>
												<li><a href="#">M-tech 3rd year time table</a></li>
											</ul>

										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion1" href="#collapsemtech2">
											<a>
												Circulars
											</a>
										</h4>
									</div>
									<div id="collapsemtech2" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="view-content">
												<table class="views-table cols-4">
													<thead>
														<tr>
															<th class="views-field views-field-counter">Sr.No</th>
															<th class="views-field views-field-field-date">Date</th>
															<th class="views-field views-field-title">Subject</th>
															<th class="views-field views-field-field-issue-by">
																Issued As </th>
														</tr>
													</thead>
													<tbody>
														<tr class="odd views-row-first">
															<td class="views-field views-field-counter">
																1 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-04-19T00:00:00+05:30">Tuesday, April 19, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Seeking willingness from PG learners/Faculty for Translation of SWAYAM MOOCs </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even">
															<td class="views-field views-field-counter">
																2 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-04-11T00:00:00+05:30">Monday, April 11, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Invitation for Expression of Interest (EOI) for Development of Self-Paced/Credit Courses for SWAYAM Platform </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="odd">
															<td class="views-field views-field-counter">
																3 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-04-11T00:00:00+05:30">Monday, April 11, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Facilitation of Educational Opportunities in India for Indian Students studying in Ukraine. </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even">
															<td class="views-field views-field-counter">
																4 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-29T00:00:00+05:30">Tuesday, March 29, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Circular for Implementation of AICTE Student Learning Assessment Project (PARAKH) </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="odd">
															<td class="views-field views-field-counter">
																5 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-25T00:00:00+05:30">Friday, March 25, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Uploading data on "All India Survey on Higher Education". </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even">
															<td class="views-field views-field-counter">
																6 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-22T00:00:00+05:30">Tuesday, March 22, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Maintenance of safe working environment for female employees at workplace. </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="odd">
															<td class="views-field views-field-counter">
																7 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-10T00:00:00+05:30">Thursday, March 10, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Displaying the Mandatory Disclosure on Portal </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even">
															<td class="views-field views-field-counter">
																8 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-08T00:00:00+05:30">Tuesday, March 8, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Admission in B.Tech/BE course through Lateral Entry to 2nd year </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="odd">
															<td class="views-field views-field-counter">
																9 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-08T00:00:00+05:30">Tuesday, March 8, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Essential Requirements for Technical Institutions </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even views-row-last">
															<td class="views-field views-field-counter">
																10 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-04T00:00:00+05:30">Friday, March 4, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Institutes not applying on portal for past 6 years for Affiliating University </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion1" href="#collapsemtech3">
											<a>
												Syllabus
											</a>
										</h4>
									</div>
									<div id="collapsemtech3" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="table-responsive">
												<table class="table table-striped style_table">
													<tbody>
														<tr>
															<th colspan="2" style="text-align: center;color:#fff; background-color:#337ab7">First Year</th>
														</tr>
														<tr>
															<td style="text-align: center;"><strong>First Semester</strong></td>
															<td style="text-align: center;"><strong>Second Semester</strong></td>
														</tr>
														<tr>
															<td>Engineering Mathematics-I</td>
															<td>Engineering Mathematics-II</td>
														</tr>
														<tr>
															<td>Engineering Physics</td>
															<td>Engineering Physics/ Engineering Chemistry</td>
														</tr>
														<tr>
															<td>Engineering Chemistry</td>
															<td>Basic Electrical Engineering / Basic Electronics Engineering</td>
														</tr>
														<tr>
															<td>Systems in Mechanical Engineering</td>
															<td>Programming and Problem Solving / Engineering Mechanics</td>
														</tr>
														<tr>
															<td>Basic Electrical Engineering / Basic Electronics Engineering</td>
															<td>Engineering Graphics (Engineering Drawing)</td>
														</tr>
														<tr>
															<td>Programming and Problem Solving / Engineering Mechanics</td>
															<td>Project-Based Learning</td>
														</tr>
														<tr>
															<td>Workshop</td>
															<td>Physical Education-Exercise and Field Activities</td>
														</tr>
														<tr>
															<th colspan="2" style="text-align: center;color:#fff; background-color:#337ab7">Second Year</th>
														</tr>
														<tr>
															<td style="text-align: center;"><strong>Third Semester</strong></td>
															<td style="text-align: center;"><strong>Fourth Semester</strong></td>
														</tr>
														<tr>
															<td>Building Technology and Architectural Planning</td>
															<td>Geotechnical Engineering</td>
														</tr>
														<tr>
															<td>Mechanics of structure</td>
															<td>Survey</td>
														</tr>
														<tr>
															<td>Fluid Mechanics</td>
															<td>Concrete Technology</td>
														</tr>
														<tr>
															<td>Engineering Mathematics III</td>
															<td>Structural Analysis</td>
														</tr>
														<tr>
															<td>Engineering Geology</td>
															<td>Project management</td>
														</tr>
														<tr>
															<td>Awareness to civil Engineering Practices / Road Safety Management / Foreign Language</td>
															<td>Project-Based Learning</td>
														</tr>
														<tr>
															<th colspan="2" style="text-align: center;color:#fff; background-color:#337ab7">Third Year</th>
														</tr>
														<tr>
															<td style="text-align: center;"><strong>Fifth Semester</strong></td>
															<td style="text-align: center;"><strong>Sixth Semester</strong></td>
														</tr>
														<tr>
															<td>Hydrology and water resource engineering</td>
															<td>Advanced Surveying</td>
														</tr>
														<tr>
															<td>Infrastructure Engineering and Construction Techniques</td>
															<td>Project Management and Engineering Economics</td>
														</tr>
														<tr>
															<td>Structural Design –I</td>
															<td>Foundation Engineering</td>
														</tr>
														<tr>
															<td>Structural analysis – II</td>
															<td>Structural Design – II</td>
														</tr>
														<tr>
															<td>Fluid Mechanics – II</td>
															<td>Environmental Engineering – I</td>
														</tr>
														<tr>
															<th colspan="2" style="text-align: center;color:#fff; background-color:#337ab7">Fourth/Final Year</th>
														</tr>
														<tr>
															<td><strong>Seventh Semester</strong></td>
															<td><strong>Eighth Semester</strong></td>
														</tr>
														<tr>
															<td>Environmental Engineering II</td>
															<td>Dams and Hydraulic Structures</td>
														</tr>
														<tr>
															<td>Transportation Engineering</td>
															<td>Quantity Surveying, Contracts, and Tenders</td>
														</tr>
														<tr>
															<td>Structural Design and Drawing III</td>
															<td>Elective –III</td>
														</tr>
														<tr>
															<td>Elective – I</td>
															<td>Elective – IV</td>
														</tr>
														<tr>
															<td>Elective –II</td>
															<td>-</td>
														</tr>
													</tbody>
												</table>
											</div>

											
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion1" href="#collapsemtech4">
											<a>
												Regulations
											</a>
										</h4>
									</div>
									<div id="collapsemtech4" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="#">regulations<i class="fa fa-download" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion1" href="#collapsemtech5">
											<a>
												Internal Marks
											</a>
										</h4>
									</div>
									<div id="collapsemtech5" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="#">Ist Year Internal Marks</a></li>
												<li><a href="#">IIst Year Internal Marks</a></li>
												<li><a href="#">IIIst Year Internal Marks</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="pos1" role="tabpanel" aria-labelledby="pos">
						<div class="panel-group" id="accordion2">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion3" href="#collapsemca1">
											<a>
												Time Tables
											</a>
										</h4>
									</div>
									<div id="collapsemca1" class="panel-collapse collapse in">
										<div class="panel-body">

											<ul>
												<li><a href="#">MCA 1st year time table</a></li>
												<li><a href="#">MCA 2nd year time table</a></li>
												<li><a href="#">MCA 3rd year time table</a></li>
											</ul>

										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion2" href="#collapsemca2">
											<a>
												Circulars
											</a>
										</h4>
									</div>
									<div id="collapsemca2" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="view-content">
												<table class="views-table cols-4">
													<thead>
														<tr>
															<th class="views-field views-field-counter">Sr.No</th>
															<th class="views-field views-field-field-date">Date</th>
															<th class="views-field views-field-title">Subject</th>
															<th class="views-field views-field-field-issue-by">
																Issued As </th>
														</tr>
													</thead>
													<tbody>
														<tr class="odd views-row-first">
															<td class="views-field views-field-counter">
																1 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-04-19T00:00:00+05:30">Tuesday, April 19, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Seeking willingness from PG learners/Faculty for Translation of SWAYAM MOOCs </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even">
															<td class="views-field views-field-counter">
																2 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-04-11T00:00:00+05:30">Monday, April 11, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Invitation for Expression of Interest (EOI) for Development of Self-Paced/Credit Courses for SWAYAM Platform </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="odd">
															<td class="views-field views-field-counter">
																3 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-04-11T00:00:00+05:30">Monday, April 11, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Facilitation of Educational Opportunities in India for Indian Students studying in Ukraine. </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even">
															<td class="views-field views-field-counter">
																4 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-29T00:00:00+05:30">Tuesday, March 29, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Circular for Implementation of AICTE Student Learning Assessment Project (PARAKH) </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="odd">
															<td class="views-field views-field-counter">
																5 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-25T00:00:00+05:30">Friday, March 25, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Uploading data on "All India Survey on Higher Education". </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even">
															<td class="views-field views-field-counter">
																6 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-22T00:00:00+05:30">Tuesday, March 22, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Maintenance of safe working environment for female employees at workplace. </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="odd">
															<td class="views-field views-field-counter">
																7 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-10T00:00:00+05:30">Thursday, March 10, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Displaying the Mandatory Disclosure on Portal </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even">
															<td class="views-field views-field-counter">
																8 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-08T00:00:00+05:30">Tuesday, March 8, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Admission in B.Tech/BE course through Lateral Entry to 2nd year </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="odd">
															<td class="views-field views-field-counter">
																9 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-08T00:00:00+05:30">Tuesday, March 8, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Essential Requirements for Technical Institutions </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
														<tr class="even views-row-last">
															<td class="views-field views-field-counter">
																10 </td>
															<td class="views-field views-field-field-date">
																<span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2022-03-04T00:00:00+05:30">Friday, March 4, 2022</span>
															</td>
															<td class="views-field views-field-title">
																Institutes not applying on portal for past 6 years for Affiliating University </td>
															<td class="views-field views-field-field-issue-by">
																<a href="#" target="_blank">Circular</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion2" href="#collapsemca3">
											<a>
												Syllabus
											</a>
										</h4>
									</div>
									<div id="collapsemca3" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="table-responsive">
												<table class="table table-striped style_table">
													<tbody>
														<tr>
															<th colspan="2" style="text-align: center;color:#fff; background-color:#337ab7">First Year</th>
														</tr>
														<tr>
															<td style="text-align: center;"><strong>First Semester</strong></td>
															<td style="text-align: center;"><strong>Second Semester</strong></td>
														</tr>
														<tr>
															<td>Engineering Mathematics-I</td>
															<td>Engineering Mathematics-II</td>
														</tr>
														<tr>
															<td>Engineering Physics</td>
															<td>Engineering Physics/ Engineering Chemistry</td>
														</tr>
														<tr>
															<td>Engineering Chemistry</td>
															<td>Basic Electrical Engineering / Basic Electronics Engineering</td>
														</tr>
														<tr>
															<td>Systems in Mechanical Engineering</td>
															<td>Programming and Problem Solving / Engineering Mechanics</td>
														</tr>
														<tr>
															<td>Basic Electrical Engineering / Basic Electronics Engineering</td>
															<td>Engineering Graphics (Engineering Drawing)</td>
														</tr>
														<tr>
															<td>Programming and Problem Solving / Engineering Mechanics</td>
															<td>Project-Based Learning</td>
														</tr>
														<tr>
															<td>Workshop</td>
															<td>Physical Education-Exercise and Field Activities</td>
														</tr>
														<tr>
															<th colspan="2" style="text-align: center;color:#fff; background-color:#337ab7">Second Year</th>
														</tr>
														<tr>
															<td style="text-align: center;"><strong>Third Semester</strong></td>
															<td style="text-align: center;"><strong>Fourth Semester</strong></td>
														</tr>
														<tr>
															<td>Building Technology and Architectural Planning</td>
															<td>Geotechnical Engineering</td>
														</tr>
														<tr>
															<td>Mechanics of structure</td>
															<td>Survey</td>
														</tr>
														<tr>
															<td>Fluid Mechanics</td>
															<td>Concrete Technology</td>
														</tr>
														<tr>
															<td>Engineering Mathematics III</td>
															<td>Structural Analysis</td>
														</tr>
														<tr>
															<td>Engineering Geology</td>
															<td>Project management</td>
														</tr>
														<tr>
															<td>Awareness to civil Engineering Practices / Road Safety Management / Foreign Language</td>
															<td>Project-Based Learning</td>
														</tr>
														<tr>
															<th colspan="2" style="text-align: center;color:#fff; background-color:#337ab7">Third Year</th>
														</tr>
														<tr>
															<td style="text-align: center;"><strong>Fifth Semester</strong></td>
															<td style="text-align: center;"><strong>Sixth Semester</strong></td>
														</tr>
														<tr>
															<td>Hydrology and water resource engineering</td>
															<td>Advanced Surveying</td>
														</tr>
														<tr>
															<td>Infrastructure Engineering and Construction Techniques</td>
															<td>Project Management and Engineering Economics</td>
														</tr>
														<tr>
															<td>Structural Design –I</td>
															<td>Foundation Engineering</td>
														</tr>
														<tr>
															<td>Structural analysis – II</td>
															<td>Structural Design – II</td>
														</tr>
														<tr>
															<td>Fluid Mechanics – II</td>
															<td>Environmental Engineering – I</td>
														</tr>
														<tr>
															<th colspan="2" style="text-align: center;color:#fff; background-color:#337ab7">Fourth/Final Year</th>
														</tr>
														<tr>
															<td><strong>Seventh Semester</strong></td>
															<td><strong>Eighth Semester</strong></td>
														</tr>
														<tr>
															<td>Environmental Engineering II</td>
															<td>Dams and Hydraulic Structures</td>
														</tr>
														<tr>
															<td>Transportation Engineering</td>
															<td>Quantity Surveying, Contracts, and Tenders</td>
														</tr>
														<tr>
															<td>Structural Design and Drawing III</td>
															<td>Elective –III</td>
														</tr>
														<tr>
															<td>Elective – I</td>
															<td>Elective – IV</td>
														</tr>
														<tr>
															<td>Elective –II</td>
															<td>-</td>
														</tr>
													</tbody>
												</table>
											</div>

											
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion2" href="#collapsemca4">
											<a>
												Regulations
											</a>
										</h4>
									</div>
									<div id="collapsemca4" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="#">regulations<i class="fa fa-download" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion2" href="#collapsemca5">
											<a>
												Internal Marks
											</a>
										</h4>
									</div>
									<div id="collapsemca5" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="#">Ist Year Internal Marks</a></li>
												<li><a href="#">IIst Year Internal Marks</a></li>
												<li><a href="#">IIIst Year Internal Marks</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- content goes here ends -->
	<?php require_once(APPPATH . 'views/includes/footer.php'); ?>


	<style>
		.course-banner img {
			width: 100%;
			height: 250px;
		}

		.nav-pills>li {
			float: none;
		}

		.panel-collapse.collapse.in {
			border-left: 3px solid #337ab7;
		}

		.views-table thead tr {
			background: #F7941D;
			font-size: 1.8rem;
		}

		.views-table tbody tr td {
			padding: 15px;
		}

		.views-table tbody tr {
			background: #fff;
			border-bottom: 1px solid #005AAA;
		}

		.views-table thead tr th {
			padding: 8px 5px;
		}
		.course-banner{
	position: relative;
}
.course-banner::after{
	content: '';
			position: absolute;
			top:0;
			left:0;
			background-color: #000;
			opacity: 0.6;
			width:100%;
			height:100%;
}
	</style>
</body>

</html>
