<?php $__env->startSection('title'); ?>
  Home | Diaplous
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_keyword'); ?>
  <meta name="keyword" content="Home page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_description'); ?>
  <meta name="description" content="Home page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

      <!-- ============================
          Slider
      ============================== -->
      <section id="slider1" class="slider slider-1">
        <div class="owl-carousel thumbs-carousel carousel-arrows" data-slider-id="slider1" data-dots="false"
          data-autoplay="true" data-nav="true" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
          <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="<?php echo e($service['image1']); ?>" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                  <div class="slide__content">
                    <h2 class="slide__title"><?php echo e($service['input1']); ?></h2>
                    <p class="slide__desc"><?php echo $service['details1']; ?></p>
                    <a href="service-details/<?php echo e($service['sub_category_id']); ?>?title=<?php echo e($service['input1']); ?>" class="btn btn__white mr-40">View Details</a>
                    <!-- <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                      <div class="video__player">
                        <span class="video__player-animation"></span>
                        <i class="fa fa-play"></i>
                      </div>Our Video!
                    </a> -->
                  </div><!-- /.slide-content -->
                </div><!-- /.col-lg-8 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </div><!-- /.carousel -->
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12  d-none d-lg-block">
              <div class="owl-thumbs thumbs-dots" data-slider-id="slider1">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <button class="owl-thumb-item">
                  <i class="icon-transfer"></i>
                  <span><?php echo e($service['input1']); ?></span>
                </button>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div><!-- /.owl-thumbs -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.slider -->

      <!-- ========================
        About 4
      =========================== -->
      <section id="about4" class="about about-2 about-4 pb-40">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="row heading heading-2">
                <div class="col-sm-12 col-md-12 col-sm-12">
                  <h2 class="heading__title"><?php echo e($index['input1']); ?></h2>
                </div><!-- /.col-lg-12 -->
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
                        <p class="fancybox__desc" style="text-align: justify;">Our mission is to provide professional maritime services that exceeds best industry practice and leaves every client desiring to maintain a long term relationship with us.
                        </p>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                    <div class="fancybox-item">
                      <div class="fancybox__icon">
                        <i class="icon-transfer"></i>
                      </div><!-- /.fancybox-icon -->
                      <div class="fancybox__content">
                        <h4 class="fancybox__title">Our Vision</h4>
                        <p class="fancybox__desc" style="text-align: justify;">Our vision is to become the first choice provider of maritime solutions in Africa.
                        </p>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-7 col-lg-7">
                  <p class="heading__desc mb-30" style="text-align: justify;">
                      <?php echo e($index['input2']); ?>

                  .</p>
                  <!-- <p>We pride ourselves on providing the best transport and shipping services available allover the
                    world. Our skilled personnel, utilising the latest communications, tracking and processing software,
                    combined with decades of experience! Through integrated supply chain solutions, demo-03 drives
                    sustainable competitive advantages to some of Australia's largest companies.</p> -->
                  <!-- <img src="assets/images/about/singnture.png" alt="singnture" class="signature mb-30"> -->
                </div><!-- /.col-lg-7 -->
              </div><!-- /.row -->
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-9 col-lg-5">
              <div class="about__img mb-60">
                <img src="<?php echo e($index['image1']); ?>" alt="about img" class="img-fluid">
                <span><a href="about-us">More About Us!</a></span>
              </div><!-- /.about-img -->
            </div><!-- /.col-lg-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.About 4 -->

      <!-- ========================
          Services
      =========================== -->
      <section id="servicesLayout2" class="services services-layout2 bg-gray pb-70">
        <div class="container">
          <div class="row heading mb-40">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <span class="heading__subtitle">Services We Offer</span>
            </div><!-- /.col-lg-12 -->
            <div class="col-sm-12 col-md-6 col-lg-5">
              <h2 class="heading__title"><?php echo e($index['input3']); ?></h2>
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
              <p class="heading__desc"><?php echo e($index['input4']); ?></p>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="container col-padding-0">
          <div class="row">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="service-item">
                <div class="service__img">
                  <img src="<?php echo e($category['image1']); ?>" alt="service" class="img-fluid">
                </div><!-- /.service-img -->
                <div class="service__content">
                  <div class="service__icon"><i class="<?php echo e($category['input2']); ?>"></i></div>
                  <h4 class="service__title"><?php echo e($category['input1']); ?></h4>
                  <p class="service__desc">
                    <?php echo $category['details']; ?>

                  </p>
                </div>
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-6 -->

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <a href="services" class="btn btn__primary btn__hover3 mt-50">Explore More</a>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section>

      <!-- =========================
         Promotional
        =========================== -->
      <section id="video1" class="video video-1 bg-overlay bg-parallax counters-white">
        <div class="bg-img"><img src="<?php echo e($index['image2']); ?>" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <!-- <div class="video__btn mb-45">
                <a class="popup-video" href="https://www.youtube.com/watch?4=&amp;v=TKnufs85hXk">
                  <span class="video__player-animation"></span>
                  <div class="video__player">
                    <i class="fa fa-play"></i>
                  </div>
                </a>
              </div><!-- /.video --> 
            </div><!-- /.col-lg-12 -->
            <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
              <div class="heading">
                <span class="heading__subtitle color-white">Our Goal</span>
                <h3 class="heading__title color-white"><?php echo e($index['input5']); ?></h3>
              </div><!-- /.heading -->
            </div><!-- /.col-xl-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6 offset-xl-1">
              <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="counter-item">
                    <div class="counter__icon"><i class="icon-worldwide"></i></div>
                    <h4><span class="counter"><?php echo e($index['input6']); ?></span><span>+</span></h4>
                    <p class="counter__desc">Clients</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="counter-item">
                    <div class="counter__icon"><i class="icon-ship"></i></div>
                    <h4><span class="counter"><?php echo e($index['input7']); ?></span><span>+</span></h4>
                    <p class="counter__desc">Oprations</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="counter-item">
                    <div class="counter__icon"><i class="icon-transfer"></i></div>
                    <h4><span class="counter"><?php echo e($index['input8']); ?></span><span></span></h4>
                    <p class="counter__desc">Casualities</p>
                  </div><!-- /.counter-item -->
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.video 1 -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

  <script> 
      $(document).ready(function(){
          $("#Home-menu").addClass("active");
      });
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.frontend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>