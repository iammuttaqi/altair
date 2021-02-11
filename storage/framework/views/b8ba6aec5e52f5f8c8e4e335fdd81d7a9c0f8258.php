<?php $__env->startSection('title'); ?>
  Contact Us | Diaplous
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="Contact us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="Contact us page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="<?php echo e($contactUs['image1']); ?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Contact Us</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ==========================
        contact 1
    =========================== -->
    <section id="contact1" class="contact text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Get In Touch</span>
              <h2 class="heading__title"><?php echo e($contactUs['input1']); ?></h2>
              <div class="divider__line divider__theme divider__center mb-0"></div>
              <p class="heading__desc"><?php echo $contactUs['details']; ?></p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <form action="<?php echo e(route('contact_us_post')); ?>" method="post">
              <?php echo e(csrf_field()); ?>

              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="Name"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email"></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input name="phone" type="text" class="form-control" placeholder="Phone"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input name="company" type="text" class="form-control" placeholder="Company"></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <textarea name="details" class="form-control" placeholder="Request Details"></textarea>
                  </div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" class="btn btn__secondary btn__hover3">Submit Request</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact 1 -->


    <!-- ==========================
       Contact panels
    ============================ -->
    <section id="contactPanels" class="contact-panels text-center pb-70">
      <div class="container">
        <div class="row">
          <!-- Contact panel #1 -->
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="contact-panel">
              <div class="contact__panel-header">
                <h4 class="contact__panel-title">Head Office</h4>
              </div>
              <ul class="contact__list list-unstyled">
                <li><?php echo e($contactInfo['Address']); ?></li>
                <li>Email: <a href="mailto: <?php echo e($contactInfo['Email']); ?>"><?php echo e($contactInfo['Email']); ?></a></li>
                <li>Phone: <a href="tel: <?php echo e($contactInfo['Phone']); ?>"><?php echo e($contactInfo['Phone']); ?></a></li>
              </ul>
            </div><!-- /.contact-panel -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /. Contact panels -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

  <script> 
    $(document).ready(function(){
        $("#Contact-menu").addClass("active");
    });
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>