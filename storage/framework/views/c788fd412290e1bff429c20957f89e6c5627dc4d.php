<?php $__env->startSection('title'); ?>
  Leadership | Diaplous
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="leadership page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="leadership page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?php echo e($ourTeam['image1']); ?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Team</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Our Team</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Team
    ========================== -->
    <section id="team" class="team  pb-70">
      <div class="container">
        <div class="row text-center">
          <!-- Member #1 -->
          <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: left; text-transform: capitalize;">
              <h5 class="theme-color-g mb-5"><?php echo e($ourTeam['input1']); ?></h5>
              <h6><?php echo e($ourTeam['input2']); ?></h6>
            <p style="text-align: justify"><?php echo e($ourTeam['input9']); ?></p>

        
        
        <br><br>
        <h5 class="theme-color-g mb-5"><?php echo e($ourTeam['input3']); ?></h5>
              <h6><?php echo e($ourTeam['input4']); ?></h6>
            <p style="text-align: justify"><?php echo e($ourTeam['input10']); ?></p>

        <br><br>
        <h5 class="theme-color-g mb-5"><?php echo e($ourTeam['input5']); ?></h5>
              <h6><?php echo e($ourTeam['input6']); ?></h6>
            <p style="text-align: justify"><?php echo e($ourTeam['input11']); ?></p>

        <br><br>
        
        <h5 class="theme-color-g mb-5"><?php echo e($ourTeam['input7']); ?></h5>
              <h6><?php echo e($ourTeam['input8']); ?></h6>
            <p style="text-align: justify"><?php echo e($ourTeam['input12']); ?></p>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.team5 end  -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

  <script> 
    $(document).ready(function(){
        $("#Company-menu").addClass("active");
    });
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>