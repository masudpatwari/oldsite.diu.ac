<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post() ?>
		<section class="banner">
			<ul class="banner-list admission">
				<li style="background:url(<?php bloginfo('template_url');?>/images/about-us.jpg)no-repeat; min-height:300px;">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<h5 class="banner-head" style="padding:170px 0 20px;font-size: 40px;">DHAKA INTERNATIONAL UNIVERSITY</h5>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h6 class="admission-common-head" style="font-size: 35px;"><?php the_title();?></h6>
					<p class="join-top-para"><?php the_content();?></p>
					<?php 
						$categories = get_the_category(); 
						foreach($categories as $category) { 
							if($category->slug == 'press-release') { ?>
								<?php if( get_field('professional_course_images') ): ?>
									<img src="<?php the_field('professional_course_images'); ?>" class="img-responsive">
								<?php endif; ?>	
					<?php	}
						} 
					?>
					
					<?php 
						$categories = get_the_category(); 
						foreach($categories as $category) { 
							if($category->slug == 'upcoming-events') { ?>
								<?php if( get_field('events_images') ): ?>
									<img src="<?php the_field('events_images'); ?>" class="img-responsive">
								<?php endif; ?>	
					<?php	}
						} 
					?>
					
					
					
				</div>
			</div>
		</div>
<?php endwhile; ?>
	


<?php get_footer();
