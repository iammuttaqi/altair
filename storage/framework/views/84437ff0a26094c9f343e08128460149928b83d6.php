<?php $__env->startSection('title'); ?>
  <?php echo e($main_title ?? ''); ?> | Decor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="page-title" style="background-image:url(<?php echo e($header_titles[3]['category_value'] ?? ''); ?>); background-position:0% 100%">
	<div class="auto-container">
		<h1><?php echo e($header_titles[0]['category_value'] ?? ''); ?></h1>
		<ul class="page-breadcrumb">
			<li><a href="home.html">Home</a></li>
			<li><?php echo e($header_titles[0]['category_value'] ?? ''); ?></li>
		</ul>
	</div>
</section>
<!--End Page Title-->

<!--Approach Section-->
<section class="approach-section">
	<div class="auto-container">
		<div class="row clearfix">
			
			<!--Content Column-->
			<div class="content-column col-md-8 col-sm-12 col-xs-12">
				<div class="inner-column">
					<div class="sec-title">
						<h2><?php echo e($details['title'] ?? ''); ?></h2>
					</div>
					<div class="styled-text"><?php echo e($details['name'] ?? ''); ?></div>
					<div class="text">
						<p><?php echo $details['details1'] ?? ''; ?></p>
						<p><?php echo $details['details2'] ?? ''; ?></p>
					</div>
				</div>
			</div>
			
			<!--Image Column-->
			<div class="image-column col-md-4 col-sm-12 col-xs-12">
				<div class="inner-column">
					<div class="image">
						<img src="<?php echo e($details['image1'] ?? ''); ?>" alt="" />
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!--End Approach Section-->

<!--Fluid Section One-->

<!--End Fluid Section One-->

<!--Contruction Section-->
<section class="team-section team-page-section">
	<div class="auto-container">
		<!--Sec Title-->
		<div class="sec-title">
			<h2><?php echo e($team_titles[0]['category_value'] ?? ''); ?></h2>
			<div class="title"><?php echo e($team_titles[1]['category_value'] ?? ''); ?></div>
		</div>
		<div class="row clearfix">
			
			<?php if(count($teams) > 0): ?>
				<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<!--Team Block-->
					<div class="team-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="inner-box">
							<div class="image">
								<img src="<?php echo e($team['image1'] ?? ''); ?>" alt="" style="width: 100%; height: 346.367px; object-fit: cover">
								<div class="overlay-box">
									<ul class="social-icon-one">
										<li><a href="<?php echo e($team['input1'] ?? ''); ?>"><span class="fa fa-twitter"></span></a></li>
										<li><a href="<?php echo e($team['input2'] ?? ''); ?>"><span class="fa fa-linkedin-square"></span></a></li>
										<li><a href="<?php echo e($team['input3'] ?? ''); ?>"><span class="fa fa-facebook-square"></span></a></li>
										<li><a href="<?php echo e($team['input4'] ?? ''); ?>"><span class="fa fa-skype"></span></a></li>
									</ul>
								</div>
							</div>
							<div class="lower-box">
								<h3><a href="#"><?php echo e($team['name'] ?? ''); ?></a></h3>
								<div class="designation"><?php echo e($team['title'] ?? ''); ?></div>
							</div>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
			
			<!--Team Block-->
			<div class="team-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="inner-box">
					<div class="image">
						<img src="<?php echo e(asset('frontend/images/resource/team-3.jpg')); ?>" alt="" />
						<!--Join Overlay-->
						<div class="join-overlay">
							<div class="overlay-inner">
								<div class="content">
									<a href="<?php echo e($team_titles[2]['category_value'] ?? ''); ?>"><h2>Join us</h2></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!--End Testimonial Section-->

<!--Renovation Section-->
<section class="renovation-section" style="background-image:url(<?php echo e($renovation['image1'] ?? ''); ?>)">
	<div class="auto-container">
		<h3><?php echo e($renovation['input1'] ?? ''); ?> <span><?php echo e($renovation['input2'] ?? ''); ?></span> <?php echo e($renovation['input3'] ?? ''); ?> </h3>
		<h2><?php echo e($renovation['input4'] ?? ''); ?></h2>
		<a href="<?php echo e(route('frontend_home')); ?>/#contact" class="theme-btn btn-style-one"><?php echo e($renovation['input5'] ?? ''); ?></a>
	</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>