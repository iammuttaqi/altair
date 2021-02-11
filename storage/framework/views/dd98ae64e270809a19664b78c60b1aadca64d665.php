<?php $__env->startSection('title'); ?>
  <?php echo e($main_title ?? ''); ?> | Decor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="Home page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="Home page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bootstrap'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

<style type="text/css">
	
	.carousel-caption {
		text-align: left;
		top: 30%;
	}

	.carousel-caption h1 {
		position: relative;
		color: #ffffff;
		font-size: 50px;
		font-weight: 600;
		line-height: 1.3em;
		display: inline-block;
		text-shadow: none;
	}

	.carousel-caption h1 span {
		position: relative;
		font-style: italic;
		display: inline-block;
		text-transform: lowercase;
		font-family: 'Playfair Display', serif;
		border-bottom: 1px solid #f7bd00;
		text-shadow: none;
	}

	.carousel-caption p {
		position: relative;
		font-size: 18px;
		font-weight: 500;
		color: #ffffff;
		line-height: 1.7em;
		font-family: 'Open Sans', sans-serif;
		text-shadow: none;
	}

	.carousel-caption a {
		transition: none 0s ease 0s;
		text-align: inherit;
		line-height: 21px;
		border-width: 2px;
		margin: 30px 24px 9px 0px;
		padding: 10px 36px;
		letter-spacing: 0px;
		font-weight: bold;
		font-size: 14px;
		text-shadow: none;
	}

	.carousel-control-prev, .carousel-control-next {
		height: 100px;
		width: 100px;
		top: 45%;
		background: #000;
	}
	
	.carousel-control-next:focus, .carousel-control-prev:focus {
	    opacity: .5;
	}

	.carousel-control-next:hover, .carousel-control-prev:hover {
		opacity: .9;
	}

	.atfEaseInOut, .carousel-item {
		animation-timing-function: ease;
		animation-duration: .5s;
	}

	.delay-point5s {
		animation-delay: .5s;
	}

</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="main-slider">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">

	  	<?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <div class="carousel-item <?php echo e($slider == reset($sliders) ? 'active' : ''); ?> wow slideInUp">
	      <img src="<?php echo e($slider['image1'] ?? ''); ?>" class="d-block" style="height: 100vh; object-fit: cover" alt="Slider">

			<div class="carousel-caption d-md-block">
				<div class="auto-container">
					<h1 class="wow fadeInDown delay-point5s atfEaseInOut"><?php echo e($slider['input1'] ?? ''); ?>

					<br>
					<span class="wow fadeInDown delay-point5s atfEaseInOut" style="color: #f9bf26"><?php echo e($slider['input2'] ?? ''); ?></span>
					</h1>
					<br><br>
					<p class="wow fadeInUp delay-point5s atfEaseInOut"><?php echo e($slider['input3'] ?? ''); ?></p>
					<a href="<?php echo e($slider['input4'] ?? ''); ?>" class="theme-btn btn-style-one wow fadeInUp delay-point5s atfEaseInOut"><?php echo e($slider['input5']); ?></a>
				</div>
			</div>

	    </div>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	  </div>

	  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</section>

<!--End Main Slider-->

<!--Mechanical Section-->
<section class="mechanical-section" style="background-image:url(<?php echo e($about['image1'] ?? ''); ?>)">
	<div class="auto-container">
		<div class="row clearfix">
			
			<!--Image Column-->
			<div class="wow fadeInLeft image-column col-md-5 col-sm-12 col-xs-12">
				<div class="image">
					<img src="<?php echo e($about['image2'] ?? ''); ?>" alt="" />
				</div>
			</div>
			
			<!--Content Column-->
			<div class="wow fadeInRight content-column col-md-7 col-sm-12 col-xs-12">
				<div class="inner-column">
					<h2><?php echo e($about['input1'] ?? ''); ?> <br><span class="theme_color"><?php echo e($about['input2'] ?? ''); ?></span> <?php echo e($about['input3'] ?? ''); ?></h2>
					<div class="text">
						<p><?php echo e($about['textarea1'] ?? ''); ?></p>
						
					</div>
					<a href="<?php echo e(route('frontend_about')); ?>" class="theme-btn btn-style-one"><?php echo e($about['input4'] ?? ''); ?></a>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!--End Mechanical Section-->

<!--Services Section Three-->
<section id="services" class="services-section-three">
	<div class="auto-container">
		<!--Title Box-->
		<div class="title-box">
			<h2>What we do</h2>
			<div class="styled-text">We help customers built World Class Construction Projects Since 1970</div>
			<div class="text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution.</div>
		</div>
		
		<div class="row clearfix">
			
			<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<!--Services Block Three-->
			<div class="wow fadeInUp service-block-three col-md-6 col-sm-6 col-xs-12">
				<div class="inner-box">
					<div class="image">
						<a href="<?php echo e(route('service_detail', $service['sub_category_id'])); ?>"><img src="<?php echo e($service['image1'] ?? ''); ?>" alt="" /></a>
					</div>
					
					<div class="lower-content">
						<h3><a href="<?php echo e(route('service_detail', $service['sub_category_id'])); ?>"><?php echo e($service['title'] ?? ''); ?></a></h3>
						<div class="text"><?php echo str_limit($service['details'], 600) ?? ''; ?></div>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
		</div>
		
	</div>
</section>
<!--End Services Section Three-->

<!--Call To Action Section-->
<section class="call-to-action-section">
	<div class="auto-container">
		<div class="row clearfix">
			
			<div class="column col-md-9 col-sm-12 col-xs-12">
				<h2><?php echo e($promotional['input9'] ?? ''); ?></h2>
			</div>
			
			<div class="btn-column col-md-3 col-sm-12 col-xs-12">
				<a href="#contact" class="theme-btn btn-style-three">Contact Us</a>
			</div>
			
		</div>
	</div>
</section>
<!--Call End To Action Section-->

<!--Project Section Two-->
<section class="project-sectio-two">
	<div class="auto-container">
		<div class="sec-title-two centered" >
			<h2 style="color: #ffffff">Our Projects</h2>
		</div>
	</div>
	
	<!--Porfolio Tabs-->
	<div class="project-tab">
		<div class="auto-container">
			<div class="tab-btns-box">
				<!--Tabs Header-->
				<div class="tabs-header">
					<ul class="product-tab-btns clearfix">
					</ul>
				</div>
			</div>
		</div>
		<!--Tabs Content-->
		<div class="p-tabs-content">
			<!--Portfolio Tab / Active Tab-->
			<div class="p-tab active-tab" id="p-tab-1">
				<div class="project-carousel owl-theme owl-carousel justify-content-center">
					<?php if(count($projects) > 0): ?>
						<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<!--Gallery Item Three-->
						<div class="gallery-item-three">
							<div class="inner-box">
								<figure class="image-box m-auto" style="width: 233.8px; height: 181.85px; object-fit: cover">
									<img src="<?php echo e($project['image1'] ?? ''); ?>" alt="">
									<!--Overlay Box-->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="<?php echo e(route('project_detail', $project['sub_category_id'])); ?>" class="link"><span class="icon flaticon-unlink"></span></a>
											</div>
										</div>
									</div>
								</figure>
								<h3><a href="<?php echo e(route('project_detail', $project['sub_category_id'])); ?>"><?php echo e($project['title'] ?? ''); ?></a></h3>
								<div class="designation"><?php echo e(ucfirst($project['name'] ?? '')); ?></div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
				</div>
			</div>
			
			<!--Portfolio Tab-->
			
		</div>
	</div>
</section>
<!--End Project Section-->

<!--Testimonial Section-->
<section class="clients-section">
	
	
	<div class="auto-contain">
		<div class="sec-title-two centered">
			<h2><?php echo e($client_title ?? ''); ?></h2>
		</div>
		<!--Sponsors Carousel-->
		<ul class="sponsors-carousel owl-carousel owl-theme">
			<?php if(count($clients) > 0): ?>
				<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="slide-item"><figure class="image-box"><a href="<?php echo e($client['input1'] ?? ''); ?>"><img src="<?php echo e($client['image1'] ?? ''); ?>" alt=""></a></figure></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		</ul>
	</div>
	
	
</section>
<section class="testimonial-section style-three">
	<div class="auto-container">
		<!--Sec Title Two-->
		<div class="sec-title-two centered">
			<h2><?php echo e($testimonial_title ?? ''); ?></h2>
		</div>
		<div class="two-item-carousel owl-carousel owl-theme">
			<?php if(count($testimonials) > 0): ?>
				<?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<!--Testimonial Block-->
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="image">
								<img src="<?php echo e($testimonial['image1'] ?? ''); ?>" alt="" />
							</div>
							<div class="text"><?php echo e($testimonial['textarea1'] ?? ''); ?></div>
							<div class="author-name">- <?php echo e($testimonial['input1'] ?? ''); ?></div>
							<div class="author-designation"><?php echo e($testimonial['input2'] ?? ''); ?></div>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- End Testimonial Section -->


<!--sister-concern Section-->
<section class="clients-section">
	
	
	<div class="auto-contain">
		<div class="sec-title-two centered">
			<!-- <h2><?php echo e($co_partner_title ?? ''); ?></h2> -->
			<h2>Co-partners</h2>
		</div>
		<!--Sponsors Carousel-->
		<ul class="promotional-sponsors-carousel owl-carousel owl-theme">
			<?php if(count($co_partners) > 0): ?>
				<?php $__currentLoopData = $co_partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="slide-item"><figure class="image-box"><a href="<?php echo e($cp['input2'] ?? ''); ?>" title="<?php echo e($cp['input1'] ?? ''); ?>"><img src="<?php echo e($cp['image1'] ?? ''); ?>" alt="<?php echo e($cp['input1'] ?? ''); ?>"></a></figure></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		</ul>
	</div>
	
</section>
<!--End Clients Section-->

<section class="facts-section">
	<!-- <div class="column col-md-12 col-sm-12 col-xs-12"> -->
	<div class="sidebar-news" style="background-image:url(<?php echo e($promotional['image1'] ?? ''); ?>)">
		<div>
			<div class="auto-contain row justify-content-between">
				
				<div class="title-box  col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sec-title-five ">
						<h2><?php echo e($promotional['title'] ?? ''); ?></h2>
					</div>
					<br>
					<div class="text"><?php echo e($promotional['textarea1'] ?? ''); ?></div>
				</div>
				
				<div class="logo-try col-lg-6 col-md-6 col-sm-12 col-xs-12 align-self-end">
					<div class="footer-widget row">
						<div class="col-xs-6 col-sm-3 text1">
							<div class="count-outer count-box">
								<span class="count-text" style="font-size: 60px; color: white;" data-speed="2000" data-stop="<?php echo e($promotional['input2'] ?? ''); ?>">0</span>+
							</div>
							
							<h4><?php echo e($promotional['input1'] ?? ''); ?></h4>
							
						</div>
						<div class="col-xs-6 col-sm-3 text1">
							<div class="count-outer count-box">
								<span class="count-text" style="font-size: 60px; color: white;" data-speed="2000" data-stop="<?php echo e($promotional['input4'] ?? ''); ?>">0</span>+
							</div>
							
							<h4><?php echo e($promotional['input3'] ?? ''); ?></h4>
							
						</div>
						<div class="col-xs-6 col-sm-3 text1">
							<div class="count-outer count-box">
								<span class="count-text" style="font-size: 60px; color: white;" data-speed="2000" data-stop="<?php echo e($promotional['input6'] ?? ''); ?>">0</span>+
							</div>
							
							<h4><?php echo e($promotional['input5'] ?? ''); ?></h4>
						</div>
						<div class="col-xs-6 col-sm-3 text1">
							<div class="count-outer count-box">
								<span class="count-text" style="font-size: 60px; color: white;" data-speed="2000" data-stop="<?php echo e($promotional['input8'] ?? ''); ?>">0</span>+
							</div>
							
							<h4><?php echo e($promotional['input7'] ?? ''); ?></h4>
						</div>
						
					</div>
					
				</div>
				</div>    <!-- </div -->
				
			</div>
		</div>
	</section>
	<!--News Section-->
	<section class="news-section" id="latestUpdates">
		<div class="auto-container">
			<div class="sec-title">
				<h2><?php echo e($lu_titles[0]['category_value'] ?? ''); ?></h2>
				<div class="title"><?php echo e($lu_titles[1]['category_value'] ?? ''); ?></div>
			</div>
			
			<div class="row clearfix">
				<!--Column-->
				<div class="column col-md-12 col-sm-12 col-xs-12">
					<div class="row clearfix">
						<?php if(count($latest_updates) > 0): ?>
							<?php $__currentLoopData = $latest_updates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $update): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
							<div class="wow fadeInUp news-block col-md-4 col-sm-6 col-xs-12">
								<div class="inner-box">
									<div class="image">
										<a href="<?php echo e(route('blogs')); ?>"><img src="<?php echo e($update['image1'] ?? ''); ?>" alt="" /></a>
										<div class="post-date"><?php echo e($update['input1'] ?? ''); ?></div>
									</div>
									<div class="lower-box">
										<h3><a href="<?php echo e(route('blogs')); ?>"><?php echo e($update['input2'] ?? ''); ?></a></h3>
										<div class="text"><?php echo e($update['textarea1'] ?? ''); ?></div>
										<!-- <a href="<?php echo e(route('blogs')); ?>" class="read-more">Read more</a> -->
									</div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
					</div>
				</div>
				
			</div>
			<div class="col-md-4 offset-5">
			<a href="<?php echo e(route('blogs')); ?>" class="theme-btn btn-style-one">More Projects</a>
			</div>

		</div>
	</section>
	<!--End News Section-->
	
	<!--Map Section-->
	<section id="contact" class="map-section">
		
		<div class="auto-container">
			<div class="map-outer row align-items-center">

				<div class="wow fadeInLeft col-md-8 col-sm-12 col-xs-12">
					<!--Map Canvas-->
					<div class="map-canvas"
						data-zoom="14"
						data-lat="23.750441"
						data-lng="90.399247"
						data-type="roadmap"
						data-hue="#ffc400"
						data-title="Decor"
						data-icon-path="images/icons/map-marker.png"
						data-content="Address: 40/D, Dilu Road,New Eskaton, <br> Moghbazar Dhaka, Bangladesh.">
					</div>
				</div>

				<div class="wow fadeInRight col-md-4 col-sm-12 col-xs-12">
					<div class="sams-widget sams1-widget">
						<div class="widget-content">
							<div class="text" style="font-size: 30px; color: white; ">Contact Us</div>
							<!--Emailed Form-->
							<div class="emailed-form">
							<form action="<?php echo e(route('contact_us_post')); ?>" method="post">
								<?php echo e(csrf_field()); ?>

								<div class="form-group">

									<input type="text" name="name" value="" placeholder="Name" required>

									<input type="email" name="email" value="" placeholder="Email address" required>

									<textarea placeholder="Address" name="address"></textarea>

									<textarea placeholder="Message us for any inquiries" name="msg"></textarea>

									<button type="submit" class="theme-btn p-3">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>
	new WOW().init();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>