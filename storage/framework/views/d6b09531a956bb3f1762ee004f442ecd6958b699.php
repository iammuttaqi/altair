<?php $__env->startSection('title'); ?>
  <?php echo e($project_header[0]['category_value'] ?? ''); ?> | Decor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="page-title" style="background-image:url(<?php echo e($project_header[2]['category_value'] ?? ''); ?>);background-position:0% 100%">
	<div class="auto-container">
		<h1><?php echo e($project_header[1]['category_value'] ?? ''); ?></h1>
		<ul class="page-breadcrumb">
			<li><a href="home.html">Home</a></li>
			<li><?php echo e($project_header[1]['category_value'] ?? ''); ?></li>
		</ul>
	</div>
</section>
<!--End Page Title-->

<!--Gallery Section-->
<section class="gallery-section style-three">
	<div class="auto-container">
		<!--MixitUp Galery-->
		<div class="mixitup-gallery">
			
			<!--Filter-->
			<div class="filters clearfix">
				
				<ul class="filter-tabs filter-btns text-center clearfix">
					<li class="active filter" data-role="button" data-filter="all">All</li>
					<?php $__currentLoopData = $projectsName; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project_class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="filter" data-role="button" data-filter=".<?php echo e($project_class ?? ''); ?>"><?php echo e(ucfirst($project_class ?? '')); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
				
			</div>
			
			<div class="filter-list row clearfix">
				
				<?php if(isset($projects) > 0): ?>
					<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<!--Gallery Item-->
						<div class="gallery-item mix all <?php echo e($project['name'] ?? ''); ?> col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image" style="width: 277.5px; height: 215.833px; object-fit: cover">
									<img src="<?php echo e($project['image1'] ?? ''); ?>" alt="" />
									<div class="overlay-box">
										<a href="<?php echo e(route('project_detail', $project['sub_category_id'] ?? '')); ?>" class="overlay-link"></a>
										<div class="content">
											<h3><a href="<?php echo e(route('project_detail', $project['sub_category_id'] ?? '')); ?>"><?php echo e($project['title'] ?? ''); ?></a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mixitupjs'); ?>
<script src="<?php echo e(asset('frontend/js/mixitup.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>