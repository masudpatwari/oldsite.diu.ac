<?php
/*
Template Name: institutes
*/
get_header(); ?>
	<section class="banner">
		<div class="">
			<div class="item" style="background:url(<?php bloginfo('template_url');?>/images/institutes.jpg) no-repeat;">
				<div class="container">
					<h5 class="tag-line">DHAKA INTERNATIONAL UNIVERSITY </h5>
					<?php 
					if(is_page( 'form-download' )) { ?>
						<h5 class="header-line">Form Download</h5>				
					<?php }
					else { ?>
						<h5 class="header-line">OTHERS INSTITUTES </h5>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	
	<section class="home-top-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<article>
						<h3 class="article-head-light">INSTITUTES</h3>
						<p>The following Institutions are operated by Dhaka International University.</p>
						<ul class="with-arrow green">
							<li>Technical & Vocational Education Institute.</li>
							<li>Dr.M.I. Patwari Technical & Vocational Education Institute.</li>
							<li>Dr.Z.I. Chowdhury Agricultural Research & Training Institute.</li>
							<li>Dr.M.I. Patwari Private Engineering Institute.</li>
							<li>Sundarganj Driving Training Institute.</li>
						</ul>
						<p>(The above Institutions are affiliated with BTEB. )</p>
						<p>Please contact for any information : Cell Number: 01716009594.</p>
					</article>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<article>
						<h3 class="article-head-light">FORM DOWNLOAD</h3>
						<ul class="with-arrow green">
							<li><a href="<?php bloginfo('template_url');?>/images/Office-Adash-form.pdf" target="_blink">Instruction</a></li>
							<li><a href="<?php bloginfo('template_url');?>/images/Transcript.pdf" target="_blink">Transcript / Marks Certificate or Provisional Certificate </a></li>
							<li><a href="<?php bloginfo('template_url');?>/images/Migration.pdf" target="_blink">Appeared Certificate / Testimonial /Character Certificate /Course Completion Certificate / Medium of Instruction Certificate / Transcript of Academic Record / Recommendation Letter / English Proficiency Certificate / Studentship Certificate / Migration Certificate </a></li>
						</ul>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<h6 class="article-head-light">FUNCTIONS</h6>
			<ul class="with-arrow green">
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
	</section>
<?php get_footer(); ?>
