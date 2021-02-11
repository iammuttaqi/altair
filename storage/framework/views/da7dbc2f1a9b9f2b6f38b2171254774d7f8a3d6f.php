<?php $__env->startSection('title'); ?>
  Services | Diaplous
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="services page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="services page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="frontend/assets/images/page-titles/10.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">What We Do</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Services
    =========================== -->
    <section id="services" class="services pt-0 bg-gray">
        <div class="container">
          <div class="row heading mb-40">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-3">
              <span class="heading__subtitle">Services We Offer</span>
            </div><!-- /.col-lg-12 -->
            <div class="col-sm-12 col-md-6 col-lg-5">
              <h2 class="heading__title">We Offer Armed & Unarmed Maritime Services.</h2>
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
              <p class="heading__desc">Our outstanding operations team delivers nothing short of operational excellence 24/7. Our clients constantly commend us on the proactive, informative, helpful and diligent management of operations.</p>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">

              <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="service-item">
                    <div class="service__img">
                      <img src="/<?php echo e($service['image1']); ?>" alt="service" class="img-fluid">
                    </div><!-- /.service-img -->
                  <div class="service__overlay">
                  <!-- <div class="service__icon"><i class="icon-airplane"></i></div> -->
                    <h4 class="service__title"><?php echo e($service['input1']); ?></h4>
                    <p class="service__desc"><?php echo $service['details1']; ?></p>
                    <a href="service-details/<?php echo e($service['sub_category_id']); ?>?title=<?php echo e($service['input1']); ?>" class="btn btn__white btn__link btn__underlined">Read More</a>
                  </div>
                </div><!-- /.service-item -->
              </div><!-- /.col-lg-4 -->
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <a href="contacts.php" class="btn btn__primary btn__hover3 btn__lg mt-20">Contact US</a>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Services -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    
  <script> 
    $(document).ready(function(){
        $("#Services-menu").addClass("active");
    });
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>