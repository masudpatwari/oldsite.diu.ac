<?php

get_header(); ?>
<style>
section.faculty-page-banner{
	padding-top: 230px;
    min-height: 400px;
}
</style>
			<section class="faculty-page-banner">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h5 class="news-top-head">Search Results</h5>
						</div>
					</div>
				</div>	
			</section>
			<div class="container">
				<div class="row fulldescription" style="margin-top:20px;">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<?php
							global $wp_query;
							$total_results = $wp_query->found_posts;
							if ( have_posts() ) : ?>
							<?php while ($wp_query->have_posts()) : $wp_query->the_post();
							?>
							<h3 class="corporate-banking-head" style="font-size:30px; text-transform:capitalize;padding:0;line-height:28px;"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'shape'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>	
						
							<div class="description">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<p class="corporate-banking-para" style="line-height:28px; padding: 5px 0;"><?php echo limit_words(get_the_excerpt(), '50'); ?></p>
									</div> 
								</div> 
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<a class="read-more" style="text-decoration:none;" href="<?php the_permalink(); ?> " title="<?php printf( __('Permalink to %s', 'shape'), the_title_attribute('echo=0') ); ?>">
										Read More</a>
									</div> 
								</div> 
							</div>
						<?php endwhile; ?>		
						<div style="clear:both;height:20px"></div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<?php if(function_exists('wp_paginate')) {
								wp_paginate();
								} ?>	
							</div>
						</div>
						<?php else : ?>
						
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h2 style="font-size: 36px;color: #2E5795;text-align: left;border-bottom: 1px solid #E1D4D4;padding: 0 0 30px 0;">NOTHING FOUND</h2>
							</div>
						</div>
						<?php endif; ?>
						
						
					</div>
					
				</div>
				<div style="clear:both"></div>
			</div>
			<hr>

<?php get_footer(); ?>	
