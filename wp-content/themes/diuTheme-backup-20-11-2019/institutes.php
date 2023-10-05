<?php
/*
Template Name: institutes
*/
get_header(); ?>
	<section class="banner">
		<ul class="banner-list admission">
			<li style="background:url(<?php bloginfo('template_url');?>/images/institutes.jpg)no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<h5 class="tag-line">DHAKA INTERNATIONAL UNIVERSITY </h5>
							<?php 
							if(is_page( 'form-download' )) { ?>
								<h5 class="banner-head">Form Download</h5>				
							<?php }
							else { ?>
								<h5 class="banner-head">OTHERS INSTITUTES </h5>
							<?php } ?>
							
						</div>
					</div>
				</div>
			</li>
		</ul>
	</section>
	
	<div class="container">
		<div class="row">
			<div class="home-top-box">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<h3 class="join-top-head">INSTITUTES</h3>
					<h5 class="required-document-head">The following Institutions are operated by Dhaka International University.</h5>
					<ul class="required-document-list">
						<li>Technical & Vocational Education Institute.</li>
						<li>Dr.M.I. Patwari Technical & Vocational Education Institute.</li>
						<li>Dr.Z.I. Chowdhury Agricultural Research & Training Institute.</li>
						<li>Dr.M.I. Patwari Private Engineering Institute.</li>
						<li>Sundarganj Driving Training Institute.</li>
					</ul>
					<p class="join-top-para">(The above Institutions are affiliated with BTEB. )</p>
					<p class="join-top-para">Please contact for any information : Cell Number: 01716009594.</P>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<h3 class="join-top-head">FORM DOWNLOAD</h3>
					<h5 class="required-document-head"></h5>
					<ul class="required-document-list">
						<li><a href="<?php bloginfo('template_url');?>/images/Office-Adash-form.pdf" target="_blink">Instruction</a></li>
						<li><a href="<?php bloginfo('template_url');?>/images/Transcript.pdf" target="_blink">Transcript / Marks Certificate or Provisional Certificate </a></li>
						<li><a href="<?php bloginfo('template_url');?>/images/Migration.pdf" target="_blink">Appeared Certificate / Testimonial /Character Certificate /Course Completion Certificate / Medium of Instruction Certificate / Transcript of Academic Record / Recommendation Letter / English Proficiency Certificate / Studentship Certificate / Migration Certificate </a></li>
					</ul>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h6 class="admission-common-head" style="padding:40px 0 20px;">FUNCTIONS</h6>
				<ul class="required-document-list">
					<li>To lead educational activities under the supervision of nationally and internationally recognized faculty members on every subject with a view to maintaining standard university education.</li>
					<li>To appoint visiting professors and part-time teachers from among the famous scholars of home and abroad.</li>
					<li>To invite guest speakers from India, Nepal, Pakistan, Malaysia, China, Japan, UK, USA etc. with a view to introducing the reputed teaching scholars to the related subjects of the modern world and to promote this university to the global village of world ranking education.</li>
					<li>(1) The preliminary English Course and the Advanced English Course are compulsory for every student; (2) Computer education is also compulsory for every student; (3) To arrange study tours in home and abroad every year.</li>
					<li>To assess every teacher teaching in the related field at every session.</li>
					<li>To run sessions according to the academic calendar.</li>
					<li>The regularity of the teachers in taking classes, tutorials and term exams is strictly monitored and ensured.</li>
					<li>To take appropriate exemplary punishment (removal or rustication) if any student, teacher, officer or any job holder is involved in direct politics, misconduct or breaking rules and regulations.</li>
					<li>To manage internship/training for final-year students in different commercial, financial and industrial institutions.</li>
				</ul>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
