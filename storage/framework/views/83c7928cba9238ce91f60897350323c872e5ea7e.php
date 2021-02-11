<?php $__env->startSection('title'); ?>
  Policies | Diaplous
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="policies page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="policies page">
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
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Policies</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Our Policies</h1>
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

          <?php $__currentLoopData = $policies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row heading heading-2">
              <div class="col-sm-12 col-md-12 col-sm-12">
                <h2 class="heading__title"><?php echo e($policy['input1']); ?></h2>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                  <article class="four">
                <p style="text-align: justify;"><?php echo $policy['details']; ?>

</p>
<div class="readmore">
              <a href="#!" data-article="four" class="btn btn__secondary btn__link btn__underlined">Read more</a>
            </div>
            <div class="hide show-this-on-click">
                <?php echo $policy['details1']; ?>

              </div>
                <div class="readless hide">
                  <a href="#!" data-article='four' class="btn btn__secondary btn__link btn__underlined">Read less</a>
                </div>
                </article>
              </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-7 -->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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