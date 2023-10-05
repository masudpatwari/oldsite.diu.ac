<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
	<section class="banner">
		<ul class="banner-list admission">
			<li style="background:url(<?php bloginfo('template_url');?>/images/diu-error.jpg)no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							
						</div>
					</div>
				</div>
			</li>
		</ul>
	</section>

	<div class="error-page-full">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<h2 class="error-head">404</h2>
					<h4 class="error-content-title">Uh-oh! nothing found</h4>
					<h4 class="sorry-tag">Sorry!</h4>
					<p class="sorry-page-para">The page you are looking for does not exist or another error occurred</p>
					<a href="<?php bloginfo ('url');?>" class="back-home"><i class="fa fa-home back-home-icon"  aria-hidden="true"></i> Go Back Home</a>	
				</div>
			</div>
		</div>
	</div>	
<?php get_footer(); ?>
