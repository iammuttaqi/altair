<?php $__env->startSection('title'); ?>
  About Us | Diaplous
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="about us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?php echo e(asset($about[0]['image1'])); ?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('frontend_home')); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">About Us</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      About 2
    =========================== -->
    <section id="about2" class="about about-2 pb-30">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row heading heading-2">
              <div class="col-sm-12 col-md-12 col-sm-12">
                <h2 class="heading__title" style="text-align: left"><?php echo e($about[0]['input1']); ?></h2>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-7 col-lg-7">
                <?php echo $about[0]['details']; ?>

              </div><!-- /.col-lg-7 -->
              <div class="col-sm-12 col-md-5 col-lg-5">
                <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1"
                  data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true"
                  data-speed="700">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-worldwide"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Our Mission</h4>
                      <p class="fancybox__desc" style="text-align: justify;"><?php echo e($about[0]['textarea1']); ?></p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-transfer"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Our Vision</h4>
                      <p class="fancybox__desc" style="text-align: justify;"><?php echo e($about[0]['textarea2']); ?></p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.carousel -->
              </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About 2 -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

  <script> 
      $(document).ready(function(){
          $("#Company-menu").addClass("active");
      });
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>