<?php
/*
Template Name: law
*/
get_header(); ?>
		<div style="display:none" class="fancybox-hidden">
			<div id="common-applycation" class="popup-form">
				<?php echo do_shortcode('[contact-form-7 id="39" title="Application Form"]'); ?>
			</div>
		</div>
    <section class="banner">
		<ul class="banner-list">
			<li style="background:url(<?php bloginfo('template_url');?>/images/law-bg.jpg)no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<h5 class="tag-line"></h5>
							<h5 class="banner-head">Department Of LAW</h5>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</section>

	<div class="container">
		<div class="row">
			<div class="home-top-box">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<h3 class="join-top-head">FACULTY OF LAW</h3>
					<p class="join-top-para">Law is a challenging study and DIU goes about the process of
developing individuals who will be an asset in the professional
field and society. Law Faculty at DIU believes that competence
comes from a solid curriculum backed by an intensive program
of skills training through teaching, legal clinics, moot court and
other real-law experience. DIU experience provides many
opportunities to come in contact with influential members of the
legal profession. So the emphasis at the Law Faculty at DIU is
on the development of a sense of professionalism. It will enable
students to acquire firm understanding of legal principles and
areas of substantive and procedural laws. Our goal is to educate
students who will not only ethically and competently serve either
in legal practice or in public office and in other related
professions but also adapt and contribute to globalization of legal
service in this new millennium. </p>


				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 apply-top-box">
					<a href="https://admission.diu.ac/" class="apply-now-top fancybox"> Apply Now</a>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<script type="text/javascript">
					 tlist_json = <?=get_teacher_json('law') ?>;
				</script>
			<ul id="data-container" class='techer-list'></ul>
					<div id="pagination-container" class="pagination">
					</div>
				<?php /*<ul class="techer-list slider-carosul" id="dept-teacher">
					<li>
						<img src="<?php bloginfo('template_url');?>/images/no-img.jpg" class="img-responsive">
						<h4 class="techer-name">Dr. Md. Akhtaruzzaman </h4>
						<h5 class="techer-designation">Associate Professo</h5>
						<p class="techer-para-new">1960407199</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url');?>/images/llb-quazi.jpg" class="img-responsive">
						<h4 class="techer-name">Quazi MH Supan </h4>
						<h5 class="techer-designation">Associate Professor</h5>
						<p class="techer-para-new">1720090006</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url');?>/images/llb-sarker.jpg" class="img-responsive">
						<h4 class="techer-name">Dr. Sarker Ali Akkas </h4>
						<h5 class="techer-designation">Professor & Dean, Dept. of Law, JnU.</h5>
						<p class="techer-para-new">1715057243</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url');?>/images/llb-Iqbal.jpg" class="img-responsive">
						<h4 class="techer-name">Dr. Md. Iqbal Hossain</h4>
						<h5 class="techer-designation">Additional District Judge</h5>
						<p class="techer-para-new">1711185874</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url');?>/images/llb-mashiur.jpg" class="img-responsive">
						<h4 class="techer-name">Barrister Mashiur Rahman Sabuj</h4>
						<h5 class="techer-designation">Advocate, Supreme court of Bangladesh</h5>
						<p class="techer-para-new">1912135304</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url');?>/images/llb-masrur.jpg" class="img-responsive">
						<h4 class="techer-name">Mr. Masrur Salekin</h4>
						<h5 class="techer-designation">Joint District Judge</h5>
						<p class="techer-para-new">1717576350</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url');?>/images/llb-saiful.jpg" class="img-responsive">
						<h4 class="techer-name">Barrister Saiful Alam Chowdhury</h4>
						<h5 class="techer-designation">Advocate, Supreme court of Bangladesh</h5>
						<p class="techer-para-new">1816323627</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url');?>/images/llb-mily.jpg" class="img-responsive">
						<h4 class="techer-name">Ms. Mily Sultana</h4>
						<h5 class="techer-designation">Chairman & Assistant Professor</h5>
						<p class="techer-para-new">1717769613</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url');?>/images/llb-sunita.jpg" class="img-responsive">
						<h4 class="techer-name">Ms. Sunita Rani Biswas</h4>
						<h5 class="techer-designation">Assistant Professor</h5>
						<p class="techer-para-new">1719167809</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url');?>/images/llb-sharmin.jpg" class="img-responsive">
						<h4 class="techer-name">Ms. Sharmin Sultana</h4>
						<h5 class="techer-designation">Assistant Professor</h5>
						<p class="techer-para-new">1712789050</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url');?>/images/llb-arif.jpg" class="img-responsive">
						<h4 class="techer-name">Mr. Arif Rabbani Khan</h4>
						<h5 class="techer-designation">Assistant Professor, DIU</h5>
						<p class="techer-para-new">1721107294</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url');?>/images/llb-mahbubur.jpg" class="img-responsive">
						<h4 class="techer-name">Mr. Mahbubur Rahman, JnU</h4>
						<h5 class="techer-designation">Lecturer, DIU</h5>
						<p class="techer-para-new">1912289011</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url');?>/images/llb-raisul.jpg" class="img-responsive">
						<h4 class="techer-name">Raisul Islam Sourav</h4>
						<h5 class="techer-designation">Assistant Professor &amp; Co-ordinator</h5>
						<p class="techer-para-new"></p>
					</li>
				</ul>*/?>
			</div>
		</div>
	</div>

	<section class="dep-news-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 class="newsletter-head">Department Of LAW</h5>
					<p class="newsletter-para">Get involved and stay up to date with what's happening</p>
					<ul class="dep-news-list">
						<li>
							<h6 class="dep-news-head">Medium of Instruction</h6>
							<a href="javascript:void(0)" class="additional-para">English is the medium of instruction for all programs at DIU</a>
						</li>
						<li>
							<h6 class="dep-news-head">Library:</h6>
							<a href="javascript:void(0)" class="additional-para">DIU library is equipped with up-to-date books and reading
materials. More than fifty (50) thousand books are available at
DIU library. E-library has already been started</a>
						</li>
						<li>
							<h6 class="dep-news-head">Transport</h6>
							<a href="javascript:void(0)" class="additional-para">DIU offers free transport service from different corner of the city to
Permanent Campus.</a>
						</li>


					</ul>
				</div>
			</div>
		</div>
	</section>
	<div class="panel">
		<section class="dep-details-tab-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<ul class="dep-details-tab-list">
							<li class="active">
								<a href="#extra-curricular" data-toggle="tab" aria-expanded="false">
									<h3 class="dep-details-tab-head">Extra Curricular</h3>
									<p class="dep-details-tab-para">Our students engage themselves in various interesting extra curricular activities all through the year.</p>
								</a>
							</li>
							<li class="">
								<a href="#syllabus" data-toggle="tab" aria-expanded="true">
									<h3 class="dep-details-tab-head">Syllabus</h3>
									<p class="dep-details-tab-para">A proper syllabus is maintained for the best outcome of academic experience in our university.</p>
								</a>
							</li>

							<li class="">
								<a href="#routine" data-toggle="tab" aria-expanded="true">
									<h3 class="dep-details-tab-head">Routine</h3>
									<p class="dep-details-tab-para">A well maintained routine makes both the student and teacher’s life more effective.</p>
								</a>
							</li>
                            <li class="">
								<a href="#Exam-Schedule" data-toggle="tab" aria-expanded="false">
									<h3 class="dep-details-tab-head">Exam Schedule</h3>
									<p class="dep-details-tab-para">A fully organized exam schedule is there for the students and teachers to follow by.</p>
								</a>
							</li>




						</ul>
					</div>
				</div>
			</div>
		</section>

		<div class="tab-content">
			<div class="tab-pane fade in active" id="extra-curricular">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="undergraduate-pro-box law-dept-extra">
								<h4 class="undergraduate-pro-head">Participated in the Gujarat National law University </h4>
								<p class="undergraduate-pro-para">Moot court competition (GNLU), 2014. Organized by the GNLU and the WTO</p>
								<!--<a href="javascript:void(0)" class="undergraduate-more">Read More</a>-->
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<div class="postgraduate-pro-box law-dept-postbox">
								<h4 class="postgraduate-pro-head">Debate Competition Runner UP </h4>
								<p class="postgraduate-pro-para">Runner up on the Dr. M I Patwari memorial inter-department debate competition- 2013.</p>
								<!--<a href="javascript:void(0)" class="about-more">Read More</a>-->
							</div>
							<h3 class="Professional-top-head">Department Extra Activities</h3>
							<ul class="required-document-list">
								<li><a href="javascript:void(0)" >Debate competition in different national competition.</a></li>
								<li><a href="javascript:void(0)" >Moot court competition in different national and international platform.</a></li>
								<li><a href="javascript:void(0)">Seminar on different issues of laws.</a></li>
								<li><a href="javascript:void(0)">Iftar Mahfils.</a></li>
								<li><a href="javascript:void(0)">Road show.</a></li>
								<li><a href="javascript:void(0)">Participation in Mock Parliament.</a></li>
								<li><a href="javascript:void(0)">Visiting historical sight.</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 gallery-bottom-box">
							<h4 class="postgraduate-pro-head">Department of <br/> LAW </h4>
							<h5 class="department-gallery-head">Gallery</h5>
							<a href="javascript:void(0)" class="service-more">Eplore More</a>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<ul class="department-gallery-list">
								<li>
									<img src="<?php bloginfo('template_url');?>/images/law-gallery-pic.jpg" class="img-responsive">
								</li>
								<li>
									<img src="<?php bloginfo('template_url');?>/images/law-gallery-pic1.jpg" class="img-responsive">
								</li>
								<li>
									<img src="<?php bloginfo('template_url');?>/images/law-gallery-pic2.jpg" class="img-responsive">
								</li>
								<li>
									<img src="<?php bloginfo('template_url');?>/images/law-gallery-pic3.jpg" class="img-responsive">
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="Exam-Schedule">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h5 class="required-document-head">Exam Schedule:</h5>
							<ul class="required-document-list">
								<li><a href="http://diu.ac/wp-content/uploads/law/Final Exam Schedule LLB Hons  Day-43 & Evening-18 Fall-2018-.pdf"  target="_blink">Final Exam LLB Hons Day-43 & Evening-18 Fall-2018</a></li>
								<li><a href="http://diu.ac/wp-content/uploads/law/final exam-LLM-_1& 2 years 2018.pdf" target="_blink">Final exam-LLM-_1& 2 years 2018</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="routine">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h5 class="required-document-head">Routine:</h5>
							<ul class="required-document-list">

								<li><a href="http://diu.ac/wp-content/uploads/law/LL.B Hons day class routine for spring semester-2019.pdf"  target="_blink">LL.B Hons Day Class Routine for Spring Semester-2019</a></li>
								
								<li><a href="http://diu.ac/wp-content/uploads/law/LL.B Hons evening class routine for spring semester-2019.pdf"  target="_blink">LL.B Hons Evening Class Routine for Spring Semester-2019</a></li>


								<li><a href="http://diu.ac/wp-content/uploads/law/Class Routine for LLM 1Year Jan-Jun -2019.pdf"  target="_blink">Class Routine for LLM 1 Year Jan-Jun-2019</a></li>

								<li><a href="http://diu.ac/wp-content/uploads/law/Class Routine for LLM 2years Jan-Jun -2019.pdf"  target="_blink">Class Routine for LLM 2years Jan-Jun -2019</a></li>



								<li><a href="http://diu.ac/wp-content/uploads/2017/09/LL.B-Hons-Day-Class-Routine-Summer-2018.pdf"  target="_blink">LL.B-Hons-Day-Class-Routine-Summer-2018</a></li>
								<li><a href="http://diu.ac/wp-content/uploads/2017/09/LL.B-Hons-Eve-Class-Routine-Summer-2018.pdf" target="_blink">LL.B-Hons-Eve-Class-Routine-Summer-2018</a></li>
								<li><a href="http://diu.ac/wp-content/uploads/2017/09/LLM 1 Year JUN-DEC -2018.pdf"  target="_blink">LL.M 1 year Class Routine (July-Dec)–2018 </a> </li>
								<li><a href="http://diu.ac/wp-content/uploads/2017/09/LLM 2year jun-dec -2018.pdf" target="_blink">LL.M 2 year Class Routine (July-Dec)–2018 </a></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="syllabus">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h5 class="required-document-head">Syllabus:</h5>
							<ul class="required-document-list">
								<li><a href="javaScript:;" data-toggle="modal" data-target="#LLBhons">LL.B (Hon.) Program</a></li>
								<li><a href="javaScript:;" data-toggle="modal" data-target="#LLMprogram">LL.M ( 1&2 Yrs. ) Program</a></li>
								<li><a href="javaScript:;" data-toggle="modal" data-target="#MHRLprogram">MHRL (Masters of Human Rights Law) Program</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="modal fade" id="LLBhons" tabindex="-1" role="dialog">
				    <div class="modal-dialog modal-lg" role="document">
				        <div class="modal-content">
				            <div class="modal-header">
				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				                <h4 class="modal-title">LL.B (Hon.) Program</h4>
				            </div>
				            <div class="modal-body" style="padding: 0">
								<div style="padding: 15px">
									<p><strong> Duration of Study :</strong> The Law Faculty of DIU offers LL.B. (Hon's) degree of twelve semesters spanning over four years. Each academic year (January to December) is divided into three semesters (January to April, May to August and September to December). .</p>
									<p><strong>Admission Requirement:</strong> A prospective law student must have minimum second division/CGPA 2.5 in both S.S.C and H.S.C or equivalent '0' (5 subjects) and 'A' (2 subjects) Level or successful completion of twelve years of studies at high school level from abroad or equivalent. He/She will have to appear at an admission test.</p>
									<p><strong> Requirement of Degree:</strong> A student for the degree of LL.B (Hon's) must earn 126 credits.</p>
								</div>
								<table class="table table-sm table-bordered" style="margin-bottom: 0">
								    <tr>
								        <th colspan="4">LL.B (Hons.) Program</th>
								    </tr>
								    <tr>
								        <th colspan="2">1st Semester</th>
								        <th colspan="2">2nd Semester</th>
								    </tr>
								    <tr>
								        <td>LL.BH-101</td>
								        <td> Jurisprudence and Legal Theorys</td>
								        <td>LL.BH-201 </td>
								        <td>Criminology</td>
								    </tr>
								    <tr>
								        <td>LL.BH-102 </td>
								        <td> Legal System of Bangladesh</td>
								        <td>LL.BH-202 </td>
								        <td>Equity and Trust</td>
								    </tr>
								    <tr>
								        <td>LL.BH-103</td>
								        <td> LL.BH-103 Roman Law</td>
								        <td>LL.BH-203 </td>
								        <td>Hindu Law</td>
								    </tr>
								    <tr>
								        <td>LL.BH-104</td>
								        <td> Basic English Language</td>
								        <td>LL.BH-204</td>
								        <td> Functional English </td>
								    </tr>
								    <tr>
								        <td>LL.BH-105</td>
								        <td> Introduction to Computer</td>
								        <td>LL.BH-205</td>
								        <td> Database Management System</td>
								    </tr>
								    <tr>
								        <th colspan="2">3rd Semesterr</th>
								        <th colspan="2">4th Semester</th>
								    </tr>
								    <tr>
								        <td>LL.BH-301</td>
								        <td>Interpretation of Statutes</td>
								        <td>LL.BH-401</td>
								        <td>Law of Transfer of Property-I</td>
								    </tr>
								    <tr>
								        <td>LL.BH-302</td>
								        <td>Law of Contract and Partnership</td>
								        <td>LL.BH-402 </td>
								        <td>Land Laws of Bangladesh-I</td>
								    </tr>

								    <tr>
								        <td>LL.BH-303 </td>
								        <td>Law of Tort</td>
								        <td>LL.BH-403</td>
								        <td> Muslim Law-I</td>
								    </tr>
								    <tr>
								        <th colspan="2">5th Semesterr</th>
								        <th colspan="2">6th Semester</th>
								    </tr>
								    <tr>
								        <td>LL.BH-501</td>
								        <td>Law of Transfer of Property-II</td>
								        <td>LL.BH-601 </td>
								        <td>Public Demand Recovery Act</td>
								    </tr>

								    <tr>
								        <td>LL.BH-502</td>
								        <td>Law of Transfer of Property-II</td>
								        <td></td>
								        <td>& Registration Act</td>
								    </tr>
								    <tr>
								        <td>LL.BH-503</td>
								        <td> Muslim Law-II</td>
								        <td>LL.BH-602</td>
								        <td> Administrative Law </td>
								    </tr>
								    <tr>
								        <td>LL.BH-504 </td>
								        <td>Constitutional Law-I</td>
								        <td>LL.BH-603</td>
								        <td> Constitutional Law-II</td>
								    </tr>
								    <tr>
								        <th colspan="2">7th Semester</th>
								        <th colspan="2">8th Semester</th>
								    </tr>
								    <tr>
								        <td>LL.BH-701</td>
								        <td> Law of Evidence-I</td>
								        <td>LL.BH-801</td>
								        <td> Law of Evidence-II</td>
								    </tr>

								    <tr>
								        <td>LL.BH-702 </td>
								        <td>LL.BH-702 Law of Criminal Procedure-I</td>
								        <td>LL.BH-802 </td>
								        <td>& LL.BH-802 Law of Criminal Procedure-II</td>
								    </tr>
								    <tr>
								        <td>LL.BH-703</td>
								        <td> Law of Crimes-I</td>
								        <td>LL.BH-803 </td>
								        <td> Law of Crimes-II </td>
								    </tr>
								    <tr>
								        <td>LL.BH-504 </td>
								        <td>Constitutional Law-I</td>
								        <td>LL.BH-804</td>
								        <td> Fiscal Law</td>
								    </tr>
								    <tr>
								        <th colspan="2">9th Semester</th>
								        <th colspan="2">10th Semester</th>
								    </tr>
								    <tr>
								        <td>LL.BH-901 </td>
								        <td> Labor and Industrial Law </td>
								        <td>LL.BH-1001</td>
								        <td> Law of Civil Procedure-I</td>
								    </tr>

								    <tr>
								        <td>LL.BH-902</td>
								        <td> Mercantile Law-I</td>
								        <td>LL.BH-1002 </td>
								        <td>Law of Drafting and Pleading</td>
								    </tr>
								    <tr>
								        <td>LL.BH-903 </td>
								        <td> Company and Banking Law</td>
								        <td>LL.BH-1003 </td>
								        <td> Public International Law-I</td>
								    </tr>
								    <tr>
								        <td></td>
								        <td></td>
								        <td>LL.BH-1004</td>
								        <td> Mercantile Law-II</td>
								    </tr>
								    <tr>
								        <th colspan="2">11th Semester</th>
								        <th colspan="2">12th Semester</th>
								    </tr>
								    <tr>
								        <td>LL.BH-1101 </td>
								        <td> Law of Civil Procedure-II </td>
								        <td> LL.BH-1201</td>
								        <td> Laws on Dispute Resolution and Legal Aid</td>
								    </tr>

								    <tr>
								        <td>LL.BH-1102 </td>
								        <td> Environmental Law</td>
								        <td>LL.BH-1202 </td>
								        <td>Specific Relief Act and Limitation Act</td>
								    </tr>
								    <tr>
								        <td>LL.BH-1103 </td>
								        <td> Public International Law-II</td>
								        <td>LL.BH-1203 </td>
								        <td> Special Criminal Laws</td>
								    </tr>
								    <tr>
								        <td> </td>
								        <td></td>
								        <td>LL.BH-1204</td>
								        <td>Clinical Legal Education (with Research Monograph</td>
								    </tr>
								    <tr>
								        <td></td>
								        <td></td>
								        <td colspan="2">Viva voce</td>
								    </tr>
								</table>
				            </div>
				            <div class="modal-footer">
				                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				            </div>
				        </div>
				    </div>
				</div>
				<div class="modal fade" id="LLMprogram" tabindex="-1" role="dialog">
				    <div class="modal-dialog modal-lg" role="document">
				        <div class="modal-content">
				            <div class="modal-header">
				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				                <h4 class="modal-title">LL.M ( 1&2 Yrs. ) Program</h4>
				            </div>
				            <div class="modal-body" style="padding: 0">
								<div style="padding: 15px">
									<p><strong>Admission Requirement:</strong> A prospective LL.M (1 year) student must have LL.B (Hon's) degree and for LL.M (2 years) student must have LL.B (Pass) from this University or any other recognized University.</p>
									<p><strong>Requirement of Degree:</strong> A student for the degree of LL.M (1 year) must earn 36 credits and for LL.M (2 years) must earn 65 credits with minimum Cumulative Grade Point Average (CGPA) of 2.50 </p>
								</div>
								<table class="table table-sm table-bordered" style="margin-bottom: 0">
								    <tr>
								        <th colspan="4">LL.M (1 year) Program</th>
								    </tr>
								    <tr>
								        <th colspan="2">1st Semester</th>
								        <th colspan="2">2nd Semester</th>
								    </tr>
								    <tr>
								        <td>LL.M. 901 </td>
								        <td> Comparative Constitutional Law</td>
								        <td>LL.M. 1001 </td>
								        <td>Principles of Civil Litigation</td>
								    </tr>
								    <tr>
								        <td> LL.M. 902 </td>
								        <td> International Human Rights Law</td>
								        <td>LL.M. 1002 </td>
								        <td>International Trade Law</td>
								    </tr>
								    <tr>
								        <td> LL.M. 903 </td>
								        <td> Private International Law</td>
								        <td>LL.M. 1003 </td>
								        <td> International Humanitarian Law </td>
								    </tr>
								    <tr>
								        <td>LL.M. 904 </td>
								        <td> International Environmental Law</td>
								        <td>LL.M. 1004 </td>
								        <td> Intellectual Property Law </td>
								    </tr>
								    <tr>
								        <td>LL.M. 905</td>
								        <td> Law of International Institutions </td>
								        <td>LL.M. 1006 </td>
								        <td> Research Monograph (with oral defense) </td>
								    </tr>
								    <tr>
								        <th colspan="4">LL.M (2 years) Program</th>
								    </tr>
								    <tr>
								        <th colspan="2">1st Semester</th>
								        <th colspan="2">2nd Semester</th>
								    </tr>
								    <tr>
								        <td>LL.M. 3101 </td>
								        <td> Legal History of Bangladesh</td>
								        <td>LL.M. 3201</td>
								        <td> Administrative Law </td>
								    </tr>
								    <tr>
								        <td> LL.M. 3102 </td>
								        <td>Comparative Legal System</td>
								        <td>LL.M. 3202 </td>
								        <td>Intellectual Property Law in Bangladesh</td>
								    </tr>
								    <tr>
								        <td>LL.M. 3103 </td>
								        <td>Environmental Laws of Bangladesh</td>
								        <td>LL.M. 3203 </td>
								        <td> Immigration and Refugee Law </td>
								    </tr>
								    <tr>
								        <td>LL.M. 3104 </td>
								        <td> General Clauses Act and Interpretation of Statutes</td>
								        <td>LL.M. 3204 </td>
								        <td>Laws on Dispute Resolution </td>
								    </tr>
								    <tr>
								        <td>LL.M. 3105</td>
								        <td> Criminology and Penology</td>
								        <td>LL.M. 3205 </td>
								        <td> Customs and Maritime Law</td>
								    </tr>
								    <tr>
								        <th colspan="2">3rd Semester</th>
								        <th colspan="2">4th Semester</th>
								    </tr>
								    <tr>
								        <td>LL.M. 3301 </td>
								        <td> Comparative Constitutional Law</td>
								        <td>LL.M. 3401 </td>
								        <td> Principles of Civil Litigation </td>
								    </tr>
								    <tr>
								        <td> LL.M. 3302 </td>
								        <td> International Human Rights Law</td>
								        <td>LL.M. 3402 </td>
								        <td>International Trade Law </td>
								    </tr>
								    <tr>
								        <td>LL.M. 3303 </td>
								        <td>Private International Law</td>
								        <td>LL.M. 3403 </td>
								        <td>International Humanitarian Law </td>
								    </tr>
								    <tr>
								        <td>LL.M. 3304 </td>
								        <td> International Environmental Law </td>
								        <td>LL.M. 3404 </td>
								        <td>Intellectual Property Law </td>
								    </tr>
								    <tr>
								        <td>LL.M. 3305 </td>
								        <td> Law of International Institutions </td>
								        <td>LL.M. 3205 </td>
								        <td> Customs and Maritime Law</td>
								    </tr>
								    <tr>
								        <td> </td>
								        <td> </td>
								        <td> LL.M. 3406 </td>
								        <td> Research Monograph (with oral defense</td>
								    </tr>
								</table>
				            </div>
				            <div class="modal-footer">
				                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				            </div>
				        </div>
				    </div>
				</div>
				<div class="modal fade" id="MHRLprogram" tabindex="-1" role="dialog">
				    <div class="modal-dialog modal-lg" role="document">
				        <div class="modal-content">
				            <div class="modal-header">
				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				                <h4 class="modal-title">MHRL (Masters of Human Rights Law) Program</h4>
				            </div>
				            <div class="modal-body" style="padding: 0">
				            	<div style="padding: 15px">
				            		<p><strong>Admission Requirement: </strong>A prospective MHRL student must have bachelor degree from this University of from any other recognized University.</p>
									<p><strong>Requirement of Degree:</strong> A student for the degree of MHRL must earn 54 credits with minimum Cumulative Grade Point Average (CGPA) of 2.50. </p>
				            	</div>
								<table class="table table-sm table-bordered" style="margin-bottom: 0">
								    <tr>
								        <th colspan="4">MHRL Program</th>
								    </tr>
								    <tr>
								        <th colspan="2">1st Semester</th>
								        <th colspan="2">2nd Semester</th>
								    </tr>
								    <tr>
								        <td>MHRL-101 </td>
								        <td> Jurisprudence of Human Rights </td>
								        <td>MHRL-201 </td>
								        <td>Human Rights under Regional System</td>
								    </tr>
								    <tr>
								        <td>MHRL-102</td>
								        <td> Gender and Law </td>
								        <td>MHRL-202 </td>
								        <td> Human Rights under Regional System </td>
								    </tr>
								    <tr>
								        <td>MHRL-103 </td>
								        <td> Public Internatioal Law and Human Rights</td>
								        <td>MHRL-203</td>
								        <td> Economics, Social and Cultural Right </td>
								    </tr>
								    <tr>
								        <td>MHRL-204 </td>
								        <td> Human Rights in Bangladesh</td>
								        <td>MHRL-204</td>
								        <td> Human Rights in Bangladesh</td>
								    </tr>
								    <tr>
								        <th colspan="2">3rd Semester</th>
								        <th colspan="2">4th Semester</th>
								    </tr>
								    <tr>
								        <td>MHRL-301 </td>
								        <td> International Humanitarian Law </td>
								        <td>MHRL-401 </td>
								        <td>Immigration and Refugee Law</td>
								    </tr>
								    <tr>
								        <td>MHRL-302 </td>
								        <td> Human Rights in Modern world</td>
								        <td>MHRL-402</td>
								        <td> Right to Development in International Law</td>
								    </tr>
								    <tr>
								        <td>MHRL-303</td>
								        <td> Consumer Protection Law </td>
								        <td>MHRL-304</td>
								        <td>Environment, Health and Intellectual Property Law </td>
								    </tr>
								    <tr>
								        <td>MHRL-304</td>
								        <td>Access to Justices Legal Aid and Human Rights</td>
								        <td>MHRL-204</td>
								        <td> Justice for Children</td>
								    </tr>
								    <tr>
								        <td></td>
								        <td></td>
								        <td>MHRL-205</td>
								        <td> Research Monograph </td>
								    </tr>
								    <tr>
								        <td></td>
								        <td></td>
								        <td>MHRL-406</td>
								        <td> Project Managemen </td>
								    </tr>
								</table>
				            </div>
				            <div class="modal-footer">
				                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 noPadding diu-faculty-membar">
				<div id="diu-admin-slider" class="diu-admin-box flexslider">
					<ul class="slides diu-service-list">
						<li>
							<img src="<?php bloginfo('template_url');?>/images/Professor Dr.K.M.Mohsin.jpg" class="img-responsive">
							<h6 class="service-list-name">Professor Dr. K. M. Mohsin</h6>
							<h5 class="techer-designation-white">Vice-Chancellor</h5>
							<p class="permanent-para">(Ex-Professor, DU)</p>
							<a href="javascript:void(0)" class="service-more">Read More</a>
						</li>
						<li>
							<img src="<?php bloginfo('template_url');?>/images/Barrister Shamim Haider.jpg" class="img-responsive">
							<h6 class="service-list-name">Barrister Shameem Haider Patwary</h6>
							<h5 class="techer-designation-white">Chairman (BOT),DIU</h5>
							<p class="permanent-para">Business is a game of risk. In this game risks are great and rewards are great, too. In such a situation if you want to reap the rewards, you have to gather div</p>
							<a href="javascript:void(0)" class="service-more">Read More</a>
						</li>
						<li>
							<img src="<?php bloginfo('template_url');?>/images/Dr. Muhammad Shahidul Quadir Patwari.jpg" class="img-responsive">
							<h6 class="service-list-name">Dr. S. Quadir Patwari</h6>
							<h5 class="techer-designation-white">Vice-Chairman (BOT),DIU</h5>
							<p class="permanent-para">Amidst many saying and slogans, I would like to say "Knowledge is Power" and it is always powered by Dhaka International University, which is persuing it for la</p>
							<a href="javascript:void(0)" class="service-more">Read More</a>
						</li>
						<li>
							<img src="<?php bloginfo('template_url');?>/images/Dr. A.B.M. Mafizul Islam Patwari.jpg" class="img-responsive">
							<h6 class="service-list-name">Dr. A.B.M. Mafizul Islam Patwari</h6>
							<h5 class="techer-designation-white">Founder</h5>
							<p class="permanent-para">Dr. A.B.M. Mafizul Islam Patwari is the founder of Dhaka International University (DIU), Dhaka.  He was a Professor of the Department of Law, University of Dha</p>
							<a href="javascript:void(0)" class="service-more">Read More</a>
						</li>
					</ul>
					<div class="diu-admin-bullet">
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
						<h4 class="service-head">Trustee Members</h4>
						<p class="home-about-para">The Board of Trustees is the governing body of Dhaka International University. The board is responsible for DIU’s long term health, overseeing and aligning its strategic direction, educational policy, finances and operations with the mission of the university. The present board of trustee is consisted of Dr. A.B.M Mafizul Islam Patwari (Founder), Dr. S. Quadir Patwari (Vice-Chairman (BOT),DIU), Battister Shameem Haider Patwari (Vice-Chairman) and Professor Dr. K.M. Mohsin (Vice Chancellor).</p>
						<a href="javascript:void(0)" class="about-more"> More Service</a>
					</div>
				</div>
			</div>

		</div>
	</div>
	<?php get_footer(); ?>
