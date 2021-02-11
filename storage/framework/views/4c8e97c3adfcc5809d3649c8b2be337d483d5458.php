<?php $__env->startSection('title'); ?>
  <?php echo e($single_pd['title'] ?? ''); ?> | Decor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="page-title" style="background-image:url(<?php echo e(asset($single_pd['image4'] ?? '')); ?>); background-position:0% 100%">
	<div class="auto-container">
		<h1><?php echo e($single_pd['title'] ?? ''); ?></h1>
		<ul class="page-breadcrumb">
			<li><a href="<?php echo e(route('frontend_home')); ?>">Home</a></li>
			<li><?php echo e($single_pd['title'] ?? ''); ?></li>
		</ul>
	</div>
</section>
<!--End Page Title-->

<!--Project Single Section-->
<section class="project-single-section">
	<div class="auto-container">
		<div class="sec-title">
			<h2><?php echo e($single_pd['title'] ?? ''); ?></h2>
		</div>
		
		<div class="row clearfix">
			<div class="column col-md-6 col-sm-12 col-xs-12">
				<h3>Project Description</h3>
				<div class="text">
					<?php echo $single_pd['details'] ?? ''; ?>

				</div>
			</div>
			<div class="column col-md-6 col-sm-12 col-xs-12">
				<div class="image">
					<img src="<?php echo e(asset($single_pd['image1'] ?? '')); ?>" alt="" />
				</div>
			</div>
		</div>
		
		<div class="row clearfix">
			<div class="column col-md-6 col-sm-12 col-xs-12">
				<h3>Clients</h3>
				<div class="text">
					<?php echo $single_pd['details1'] ?? ''; ?>

				</div>
			</div>
			<div class="column col-md-6 col-sm-12 col-xs-12">
				<div class="image">
					<img src="<?php echo e(asset($single_pd['image2'] ?? '')); ?>" alt="" />
				</div>
			</div>
		</div>
		
		<!--Project Complition Section-->
		<div class="project-completion-section">
			<div class="inner-project">
				<div class="row clearfix">
					<!--Content Column-->
					<div class="content-column col-md-6 col-sm-12 col-xs-12">
						<div class="inner-column">
							<h2>Project Completion</h2>
							<div class="project-text"><?php echo $single_pd['details2'] ?? ''; ?></div>
							<ul class="list-style-four">
								<?php if(isset($further_sub_category_values) > 0): ?>
									<?php $__currentLoopData = $further_sub_category_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fscv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li><?php echo e($fscv ?? ''); ?></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
							</ul>
						</div>
					</div>
					<!--Image Column-->
					<div class="image-column col-md-6 col-sm-12 col-xs-12">
						<div class="image">
							<img src="<?php echo e(asset($single_pd['image3'] ?? '')); ?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>