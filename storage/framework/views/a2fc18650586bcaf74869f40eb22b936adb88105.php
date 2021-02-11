<?php $__env->startSection('title'); ?>
  <?php echo e($single_sd['title'] ?? ''); ?> | Decor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo e(asset($single_sd['image1'] ?? '')); ?>)">
        <div class="auto-container">
            <h1><?php echo e($single_sd['title']); ?></h1>
            <ul class="page-breadcrumb">
                <li><a href="home.html#services">Services</a></li>
                <li><?php echo e($single_sd['title']); ?></li>
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
                                            <img src="<?php echo e(asset($single_sd['image2'] ?? '')); ?>" alt="" />
                                        </div>
                                    </div>
                                    <!--Image Column-->
                                    <div class="image-column col-md-5 col-sm-5 col-xs-12">
                                        <div class="image">
                                            <img src="<?php echo e(asset($single_sd['image3'] ?? '')); ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="feature-about">
                                    
                            <h2><?php echo e($single_sd['input1'] ?? ''); ?></h2>
                                <p><?php echo $single_sd['details'] ?? ''; ?></p>
                                
                        </div>
                        <div class="feature-about">
                                    
                            <h2><?php echo e($single_sd['input2'] ?? ''); ?></h2>
                                <p><?php echo $single_sd['details1'] ?? ''; ?></p>
                                
                        </div>
                         <div class="feature-about">
                                    
                            <h2><?php echo e($single_sd['input3'] ?? ''); ?></h2>
                                <p><?php echo $single_sd['details2'] ?? ''; ?></p>
                                
                        </div>
                        <div class="feature-about">
                                    
                            <h2><?php echo e($single_sd['input4'] ?? ''); ?></h2>
                                <p><?php echo $single_sd['details3'] ?? ''; ?></p>
                                
                        </div>
                        <div class="feature-about">
                                    
                            <h2><?php echo e($single_sd['input5'] ?? ''); ?></h2>
                                <p><?php echo $single_sd['details4'] ?? ''; ?></p>
                                
                        </div>
                                
                            <h2><?php echo e($single_sd['input6'] ?? ''); ?></h2>
                            <div class="text">
                            	
                                <!--Featured Blocks-->
                                <div class="featured-blocks" style="border: none;">
                                    <div class="clearfix">
                                    
                                    	<?php $__currentLoopData = $further_sub_category_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fscv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!--Featured Block-->
                                        <?php if(strlen($fscv['1']['further_sub_category_value']) > 0): ?>
                                        <div class="featured-block col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="inner-box" style="height: 250px; overflow: hidden;">
                                                <div class="icon-box">
                                                    <span class="icon <?php echo e($fscv['1']['further_sub_category_value']); ?>"></span>
                                                </div>
                                                <h3><a href="#"><?php echo e($fscv['0']['further_sub_category_value']); ?></a></h3>
                                                <div class="text"><?php echo e($fscv['3']['further_sub_category_value']); ?></div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
		                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                      </div>  
                                </div>

                                
                                <h2><?php echo e($single_sd['input7'] ?? ''); ?></h2>
                                <p><?php echo e($single_sd['textarea1'] ?? ''); ?></p>
                                
                                <div class="row clearfix">
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <ul class="list-style-six">
                                        	<?php $__currentLoopData = $further_sub_category_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fscv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(strlen($fscv['2']['further_sub_category_value']) > 0): ?>
                                                    <li><?php echo e($fscv['2']['further_sub_category_value'] ?? ''); ?></li>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>