<?php $__env->startSection('title'); ?>
  Why Us | Diaplous
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="why us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="why us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?php echo e($whyUs['image1']); ?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Why Choose Us!</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Why Choose Us!</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      About 1
    =========================== -->
    <section id="about1" class="about about-1 pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="heading heading-2">
              <h2 class="heading__title"><?php echo e($whyUs['input1']); ?></h2>
              <?php echo $whyUs['details']; ?>

            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About 1 -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
  
  <script> 
    $(document).ready(function(){
        $("#Company-menu").addClass("active");
    });
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>