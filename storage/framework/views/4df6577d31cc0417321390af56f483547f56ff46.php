<?php $__env->startSection('title'); ?>
  Career | Diaplous
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="career page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="career page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="frontend/assets/images/page-titles/11.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Careers</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Work With Us</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================= 
         careers
    =========================  -->
    <section id="careers" class="careers bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Join Our Team</span>
              <h2 class="heading__title">No Current Openings</h2>
              <div class="divider__line divider__center"></div>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.careers -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

  <script> 
    $(document).ready(function(){
        $("#Career-menu").addClass("active");
    });
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>