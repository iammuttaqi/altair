<?php $__env->startSection('title'); ?>
  <?php echo e($module->name ?? ''); ?> | Decor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo e(asset($services_header[1]['category_value'])); ?>)">
    	<div class="auto-container">
        	<h1><?php echo e($services_header[0]['category_value'] ?? ''); ?></h1>
            <ul class="page-breadcrumb">
            	<li><a href="home.html">Home</a></li>
                <li><?php echo e($services_header[0]['category_value'] ?? ''); ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Services Section Three-->
    <section class="gallery-section">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter-->
                
                
                <div class="filter-list row clearfix">
                	
                	<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--Gallery Item-->
                    <div class="gallery-item mix all col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo e($service['image1'] ?? ''); ?>" alt="" />
                                <div class="overlay-box">
                                    <a href="<?php echo e(route('service_detail', $service['sub_category_id'])); ?>" class="overlay-link"></a>
                                    <div class="content">
                                        <h3><a href="<?php echo e(route('service_detail', $service['sub_category_id'])); ?>"><?php echo e($service['title'] ?? ''); ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section Three-->

<section class="project-sectio-two">
<div class="auto-container">
	<div class="sec-title light">
		<h2>Related Projects</h2>
	</div>
</div>

<!--Porfolio Tabs-->
<div class="project-tab">
	<div class="auto-container">
		<div class="tab-btns-box">
			<!--Tabs Header-->
			
		</div>
	</div>
	<!--Tabs Content-->
	<div class="p-tabs-content">
		<!--Portfolio Tab / Active Tab-->
		<div class="p-tab active-tab" id="p-tab-1">
			<div class="project-carousel owl-theme owl-carousel">
				
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
		
	</div>
</div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mixitupjs'); ?>
<script src="<?php echo e(asset('frontend/js/mixitup.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>