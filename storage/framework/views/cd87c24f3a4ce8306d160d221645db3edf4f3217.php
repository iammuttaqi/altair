<?php $__env->startSection('title'); ?>
  <?php echo e($int_header[0]['category_value'] ?? ''); ?> | Decor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="Home page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="Home page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="page-title" style="background-image:url(<?php echo e($int_header[2]['category_value'] ?? ''); ?>)">
	<div class="auto-container">
		<h1><?php echo e($int_header[1]['category_value'] ?? ''); ?></h1>
		<ul class="page-breadcrumb">
			<li><a href="home.html#services">Services</a></li>
			<li><?php echo e($int_header[1]['category_value'] ?? ''); ?></li>
		</ul>
	</div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
	<div class="auto-container">
		<div class="row clearfix">
			
			
			<!--Content Side-->
			<div class="content-side col-lg-12 col-md-8 col-sm-12 col-xs-12">
				<div class="services-single">
					<div class="inner-service">
						<!--Gallery Image-->
						<div class="gallery-image">
							<div class="row clearfix">
								<!--Image Column-->
								<div class="image-column col-md-7 col-sm-7 col-xs-12">
									<div class="image">
										<img src="<?php echo e($slider['image1'] ?? ''); ?>" alt="" />
									</div>
								</div>
								<!--Image Column-->
								<div class="image-column col-md-5 col-sm-5 col-xs-12">
									<div class="image">
										<img src="<?php echo e($slider['image2'] ?? ''); ?>" alt="" />
									</div>
								</div>
							</div>
						</div>
						<div class="feature-about">
							
							<h2><?php echo e($about['title'] ?? ''); ?></h2>
							<p><?php echo $about['details'] ?? ''; ?></p>
							
						</div>
						
						<h2><?php echo e($procedure_header['category_value'] ?? ''); ?></h2>
						<div class="text">
							<!--Featured Blocks-->
							<div class="featured-blocks">
								<div class="clearfix">
									
									<?php if(isset($procedures) > 0): ?>
										<?php $__currentLoopData = $procedures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $procedure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<!--Featured Block-->
											<div class="featured-block col-lg-3 col-md-3 col-sm-6 col-xs-12">
												<div class="inner-box">
													<div class="icon-box">
														<span class="icon <?php echo e($procedure['name'] ?? ''); ?>"></span>
													</div>
													<h3><a href="#"><?php echo e($procedure['title'] ?? ''); ?></a></h3>
													<div class="text"><?php echo e($procedure['textarea1'] ?? ''); ?></div>
												</div>
											</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
									
								</div>
							</div>
							
							
							
							
							
							<h2><?php echo e($service_header[0]['category_value'] ?? ''); ?></h2>
							<p><?php echo e($service_header[1]['category_value'] ?? ''); ?></p>
							
							<div class="row clearfix">
								<div class="column col-md-6 col-sm-6 col-xs-12">
									<ul class="list-style-six">
										<?php if(isset($services) > 0): ?>
											<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li><?php echo e($service['title'] ?? ''); ?></li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php endif; ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!--End Services Section Three-->
<section class="project-sectio-two">
	<div class="auto-container">
		<div class="sec-title light">
			<h2>Our Projects</h2>
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
					
					<?php if(isset($projects) > 0): ?>
						<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<!--Gallery Item Three-->
							<div class="gallery-item-three">
								<div class="inner-box">
									<figure class="image-box" style="width: 233.8px; height: 181.85px; object-fit: cover">
										<img src="<?php echo e($project['image1'] ?? ''); ?>" alt="">
										<!--Overlay Box-->
										<div class="overlay-box">
											<div class="overlay-inner">
												<div class="content">
													<a href="<?php echo e(route('project_detail', $project['sub_category_id'] ?? '')); ?>" class="link"><span class="icon flaticon-unlink"></span></a>
												</div>
											</div>
										</div>
									</figure>
									<h3><a href="<?php echo e(route('project_detail', $project['sub_category_id'] ?? '')); ?>"><?php echo e($project['title'] ?? ''); ?></a></h3>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>