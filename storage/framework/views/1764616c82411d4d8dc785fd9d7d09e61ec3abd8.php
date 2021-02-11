<?php $__env->startSection('title'); ?>
  Compliance | Diaplous
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="compliance page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="compliance page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?php echo e(asset($compliance[0]['image1'])); ?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Compliance</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Compliance</h1>
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
              <h2 class="heading__title"><?php echo e($compliance[0]['input1']); ?></h2>
              <?php echo $compliance[0]['details']; ?>

            </div><!-- /.heading -->
          </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About 1 -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>