<?php $__env->startSection('title'); ?>
  Upcoming Projects | Decor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo e(asset('frontend/images/background/12.jpg')); ?>)">
    	<div class="auto-container">
        	<h1>Upcoming Projects</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Upcoming Projects</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Blog Page Section-->
    <section class="blog-page-section">
    	<div class="auto-container">
        	<div class="inner-container">
                <div class="row clearfix">
                    
                    <?php $__currentLoopData = $latest_updates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $update): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <!--News Block Three-->
                    <div class="news-block-three col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="javascript:void(0)"><img src="<?php echo e(asset($update['image1'])); ?>" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="upper-box clearfix">
                                    <div class="posted-date pull-left"><?php echo e($update['input1']); ?></div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="javascript:void(0)"><?php echo e($update['input2']); ?></a></h3>
                                    <div class="text"><?php echo e($update['textarea1']); ?></div>
                                    <!-- <a href="javascript:void(0)" class="theme-btn btn-style-one read-more">Read more</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Blog Page Section-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>