<?php
/**
 * The template for displaying the footer
 */
?>

<div class="container">
	<h4 class="service-head">Partners</h4>
	<div class="diu-partners owl-carousel owl-theme">
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/IEB-LOGO.jpg" alt="" style="width: 115px">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/34.png" alt="">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/445_n.jpg" alt="">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/245.png" alt="">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/322.png" alt="">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/324.png" alt="">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/342.png" alt="">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/345.png" alt="">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/434.png" alt="">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/2342.png" alt="">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/3424.png" alt="">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/3434.png" alt="">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/4342.png" alt="">
	        </a>
	    </div>
	    <div class="item">
	        <a href="">
	            <img src="<?php bloginfo('template_url');?>/images/partnerships/23423.png" alt="">
	        </a>
	    </div>
	</div>
</div>
				<?php
				if(is_page(array( 'about', 'admission' ))) { ?>
					<hr class="top-border-full">
				<?php }
				else { ?>
				<section class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h5 class="newsletter-head"></br> Let your dream remain fulfilled..How high so ever it be</h5>
								<p class="newsletter-para">Get involved and stay up to date with what's happening</p>
								<div class="newsletter-form">
									<?php echo do_shortcode ('[wysija_form id="2"]');?>
									<!--<input type="text" class="newsletter-field" placeholder="Enter Your Email Address">
									<input type="submit" class="newsletter_button" value="submit now">-->
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="info-box">
									<h6 class="info-box-small">Email & Information</h6>
									<h4 class="info-box-head"> info@diu.net.bd, inf@diu-bd.net </h4>
								</div>
								<div class="info-box">
									<h6 class="info-box-small">Phone & Hotline</h6>
									<h4 class="info-box-head">+88-02-55040891-7   |    +88-019-39851060-4</h4>
								</div>
								<div class="info-box">
									<h6 class="info-box-small">Address</h6>
									<h4 class="info-box-head">House # 4, Road # 1, Block - F, <br/> Banani, Dhaka-1213, Bangladesh.</h4>
								</div>
								<div class="social-box">
									<a href="https://www.facebook.com/diu.net.bd" target="_blink"><img src="<?php bloginfo('template_url');?>/images/fb.png"></a>
									<a href="https://www.youtube.com/channel/UCH919CzDsWuHZXwvEeA0Z4w" target="_blink"><img src="<?php bloginfo('template_url');?>/images/youtube.png"></a>
									<a href="https://twitter.com/diubd" target="_blink"><img src="<?php bloginfo('template_url');?>/images/tw.png"></a>
									<a href="https://www.linkedin.com/edu/dhaka-international-university-10307" target="_blink"><img src="<?php bloginfo('template_url');?>/images/ln.png"></a>
									<a href="https://www.instagram.com/dhaka_international_university" target="_blink"><img src="<?php bloginfo('template_url');?>/images/instagram icon.png"></a>
									<a href="https://plus.google.com/u/0/+DhakaInternationalUniversity" target="_blink"><img src="<?php bloginfo('template_url');?>/images/google pluse icon.png"></a>
									<a href="https://www.pinterest.com/DIUdhaka" target="_blink"><img src="<?php bloginfo('template_url');?>/images/Pinterest.png"></a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php } ?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<a href="javascript:void(0)"><img src="<?php bloginfo('template_url');?>/images/du-footer-logo.png"></a>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
					<p class="copyright">© Dhaka International University. All rights Reserved. </p>
				</div>
			</div>
		</div>
	</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/jquery.flexslider.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/modernizr.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/fancybox/jquery.fancybox.js"></script>
	<script src="<?php bloginfo('template_url');?>/OwlCarousel/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.min.js"></script>
	<script src="https://pagination.js.org/dist/2.1.0/pagination.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.4/lodash.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/teacherJsfile.js"></script>
	<script>
		$('.diu-partners.owl-carousel').owlCarousel({
		    loop: true,
		    margin: 15,
		    nav: false,
		    responsive:{
		        0:{
		            items:1
		        },
	            479:{
	                items:2
	            },
		        767:{
		            items:3
		        },
		        1000:{
		            items:5
		        }
		    }
		});
      //   $( document ).ready(function() {
			//
			// var proxy = "https://cors-anywhere.herokuapp.com/";
			// if($('#data-container').length>0){
			// 	var dept = $('#data-container').attr('data');
			// 	var diuUrl = "https://172.16.7.75/api/get_all_teachers/"+dept;
			// 	$.ajax({
			// 		method: 'GET',
			// 		async:false,
			// 		url: diuUrl,
			// 		crossDomain: true,
			// 		crossOrigin: true,
			// 		dataType: 'json', //change the datatype to 'jsonp' works in most cases
			// 		success: (res) => {
			//
			// 			console.log(res.data);
			// 			$('#pagination-container').pagination({
			// 				dataSource: getDepartmentsWiseTeachers(res.data.teachers),
			// 				pageSize: 3,
			// 				callback: function(data, pagination) {
			// 					// template method of yourself
			// 					var html = templatePager(data);
			// 					$('#data-container').html(html);
			// 				}
			// 			});
			// 		}
			// 	});
			// }
			//
			// function templatePager(teachers){
			// 	var returnHtml = '';
			// 	$.each(teachers, (index, teacher) => {
			// 		var imgSource = teacher.photo ? teacher.photo : 'https://via.placeholder.com/200';
			// 		var img = '<img src="' + imgSource + '" class="img-responsive">';
			// 		var tName = '<h4 class="techer-name"> ' + teacher.name + ' </h4>';
			// 		var designation = '<h5 class="techer-designation"> ' + teacher.position + ' </h5>';
			// 		var email =
			// 			'<a href="mailto:' + teacher.email + '" class="techer-more-new">' + teacher.email +
			// 			'</a>';
			// 		returnHtml+= '<li> ' + img + tName + designation + email + ' </li>';
			// 	});
			//
			// 	return returnHtml;
			// }
      //       $('a.fancybox, area.fancybox, li.fancybox a, a.fancybox1').fancybox( {'overlayShow' : true, 'maxWidth' : 600, 'height':'auto', 'hideOnOverlayClick' : true, 'showCloseButton' : true, 'margin' : 20, 'centerOnScroll' : true, 'enableEscapeButton' : true, 'autoScale' : true, 'transitionIn' : 'elastic', 'easingIn' : 'easeOutBack', 'transitionOut' : 'elastic', 'easingOut' : 'easeInBack', 'opacity' : false, 'hideOnContentClick' : false, 'titleShow' : true, 'titlePosition' : 'over', 'titleFromAlt' : true, 'showNavArrows' : true, 'enableKeyboardNav' : true, 'cyclic' : false })
			// $('a.fancybox1').fancybox( {'autoPlay': true, 'overlayShow' : true, 'hideOnOverlayClick' : true, 'showCloseButton' : true, 'margin' : 20, 'centerOnScroll' : true, 'enableEscapeButton' : true, 'autoScale' : true, 'transitionIn' : 'elastic', 'easingIn' : 'easeOutBack', 'transitionOut' : 'elastic', 'easingOut' : 'easeInBack', 'opacity' : false, 'hideOnContentClick' : false, 'titleShow' : true, 'titlePosition' : 'over', 'titleFromAlt' : true, 'showNavArrows' : true, 'enableKeyboardNav' : true, 'cyclic' : false })
			// setTimeout(function(){jQuery('#fancybox-auto').trigger('click')},1000);
			// jQuery('#fancybox-auto1').trigger('click');
      //   });



				$( document ).ready(function() {


					function templatePager(teachers){
							var returnHtml = '';
								$.each(teachers, (index, teacher) => {
										var imgSource = teacher.profilepic ? teacher.profilepic : 'https://via.placeholder.com/200';
										var img = '<img src="' + imgSource + '" class="img-responsive">';
										var tName = '<h4 class="techer-name"> ' + teacher.name + ' </h4>';
										var designation = '<h5 class="techer-designation"> ' + teacher.position + ' </h5>';
										var email =
											'<a href="mailto:' + teacher.email1 + '" class="techer-more-new">' + teacher.email1 +
											'</a>';
										returnHtml+= '<li> ' + img + tName + designation + email + ' </li>';
								});

							return returnHtml;
					}


								type = typeof tlist_json;
								console.log(type);

								if( type !== "undefined" ){	
																
									$('#pagination-container').pagination({
										dataSource:tlist_json,
										pageSize: 3,
										callback: function(data, pagination) {
											// template method of yourself
											// var html = templatePager(data);s
											// console.log(data, pagination);
											$('#data-container').html(templatePager(data));
										}
									});
								}

						$('a.fancybox, area.fancybox, li.fancybox a, a.fancybox1').fancybox( {
							'overlayShow' : true, 'maxWidth' : 600, 'height':'auto', 'hideOnOverlayClick' : true,
							'showCloseButton' : true, 'margin' : 20, 'centerOnScroll' : true, 'enableEscapeButton' : true,
							'autoScale' : true, 'transitionIn' : 'elastic', 'easingIn' : 'easeOutBack', 'transitionOut' : 'elastic',
							'easingOut' : 'easeInBack', 'opacity' : false, 'hideOnContentClick' : false, 'titleShow' : true,
							'titlePosition' : 'over', 'titleFromAlt' : true, 'showNavArrows' : true, 'enableKeyboardNav' : true, 'cyclic' : false });

						$('a.fancybox1').fancybox( {
							'autoPlay': true, 'overlayShow' : true, 'hideOnOverlayClick' : true, 'showCloseButton' : true, 'margin' : 20,
							'centerOnScroll' : true, 'enableEscapeButton' : true, 'autoScale' : true, 'transitionIn' : 'elastic',
							'easingIn' : 'easeOutBack', 'transitionOut' : 'elastic', 'easingOut' : 'easeInBack', 'opacity' : false,
							'hideOnContentClick' : false, 'titleShow' : true, 'titlePosition' : 'over', 'titleFromAlt' : true, 'showNavArrows' : true,
							'enableKeyboardNav' : true, 'cyclic' : false });

						setTimeout(function(){jQuery('#fancybox-auto').trigger('click')},1000);
						jQuery('#fancybox-auto1').trigger('click');
				});
</script>

<script>

		$(function() {
			$('#faculty-list').change(function(){
				$('.table-box-new').removeClass("active");
				if($('#faculty-list').val() == 'business') {
					$('.table-box-new').removeClass("active");
					$('#business').addClass("active");
				}
				else if ( $('#faculty-list').val() == 'law'){
					$('.table-box-new').removeClass("active");
					$('#law').addClass("active");
				}
				else if ( $('#faculty-list').val() == 'arts'){
					$('.table-box-new').removeClass("active");
					$('#arts').addClass("active");
				}
				else if ( $('#faculty-list').val() == 'engineering'){
					$('.table-box-new').removeClass("active");
					$('#engineering').addClass("active");
				}
				else if ( $('#faculty-list').val() == 'phamacy'){
					$('.table-box-new').removeClass("active");
					$('#phamacy').addClass("active");
				}
				else {
					$('.table-box-new').hide();
				}
			});

		});
		$(window).load(function() {
		  // The slider being synced must be initialized first

		  $('#slider').flexslider({
			animation: "fade",
			animationLoop: true,
			controlsContainer: '.flex-container',
			slideshow: true,
			directionNav: false,
			manualControls: ".main-banner-Bullet li"
		  });
		   $('#campus-slider').flexslider({
			  pauseOnHover: true,
			  animation: 'slide',
			  controlsContainer: '.flex-container',
			  directionNav: false,
			  manualControls: ".brand-explore-Bullet li"
			});
			$('#diu-admin-slider').flexslider({
			  animation: 'slide',
			  controlsContainer: '.flex-container',
			  directionNav: false,
			  manualControls: ".diu-admin-bullet li"
			});
			$('#key-resource-slider').flexslider({
			  animation: 'slide',
			  controlsContainer: '.flex-container',
			  directionNav: false,
			  manualControls: ".key-resource-bullet li"
			});
		});

	function stripTrailingSlash(str) {
	    if(str.substr(-1) === '/') {
		return str.substr(0, str.length - 1);
	    }
	    return str;
	}


//	current_location = stripTrailingSlash(window.location);
	current_location = stripTrailingSlash(window.location.href);
	console.log(	window.location);
	console.log(	$('a[href="'+current_location+'"]').length);
	$('#myNavbar>ul>li>a[href="'+current_location+'"]').addClass('active');
	</script>

	<?php wp_footer(); ?>

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/57109dc60e1f1fbb3c7b0df2/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
</body>
</html>
