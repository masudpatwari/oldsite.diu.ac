<?php
/*
Template Name: Contact us
*/
get_header(); ?>

 <section class="banner">
	<div class="">
		<div class="item" style="background:url(<?php bloginfo('template_url');?>/images/contact-bg.jpg) no-repeat;">
			<div class="container">
				<h5 class="tag-line">CONTACT US</h5>
				<h5 class="header-line">Get in touch with us we are always here</h5>
			</div>
		</div>
	</div>
</section>
	<section class="contact-us">
		<div class="container">
			<div class="row">	
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<article>
						<h4 class="article-head-light">Permanent Campus:</h4>
						<p><span>Address:</span> Shatarkul, Badda, Dhaka-1212. Bangladesh.</p>
						<p><span>Mobile: </span>+88-019-39851060, +88-019-39851061, +88-019-39851063</p>
						<p><span>Fax: </span>+88-02-55040898 </p>
						<p><span>E-mail:</span> info@diu.net.bd, inf@diu-bd.net </p>
						<p><span>Web: </span>www.diu.ac, www.diu.net.bd, www.diu-bd.net</p>
					
						<h4 class="article-head-light">Banani Campus:</h4>
						<p><span>Address:</span> House # 4, Road # 1, Block - F, Banani, Dhaka -1213, Bangladesh</p>
						<p><span>Mobile: </span>+88-019-39851062, +88-019-39851064, +88-01611348346</p>
						<p><span>Phone: </span>+88-02-55040891 (Upto 7),</p>
						<p><span>Fax: </span>+88-02-55040898  </p>
						<p><span>E-mail:</span> info@diu.net.bd, inf@diu-bd.net  </p>
						<p><span>Web: </span>www.diu.ac, www.diu.net.bd, www.diu-bd.net</p>
					
						<h4 class="article-head-light">Green Road Campus:</h4>
						<p><span>Address:</span> 66 Green Road Dhaka - 1205, Bangladesh</p>
						<p><span>Mobile: </span> +88-016-11348344, +88-016-11348345, +88-016-11348347, +88-016-11348348</p>
						<p><span>Phone: </span> +88-02-9613868 </p>
						<p><span>Fax: </span>+88-02-55040898  </p>
						<p><span>E-mail:</span> info@diu.net.bd, inf@diu-bd.net  </p>
						<p><span>Web: </span>www.diu.ac, www.diu.net.bd, www.diu-bd.net</p>
					</article>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<article>
						<h4 class="article-head-light">Have some question ?</h4>
						<?php echo do_shortcode('[contact-form-7 id="38" title="Contact us"]'); ?>
					</article>
				</div>
			</div>
		</div>
	</section>
	<iframe src="https://www.google.com/maps/d/embed?mid=zpd50ugWdJd0.knmLtiVuBsXE" width="100%" height="500"></iframe>
	
<?php get_footer(); ?>
