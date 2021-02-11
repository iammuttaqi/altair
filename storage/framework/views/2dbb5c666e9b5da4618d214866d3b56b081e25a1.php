<?php $helper = new \App\Lib\Helpers;
$categories   = $helper->getServices()[0];
$services     = $helper->getServices()[1];
$clients      = $helper->getClients();
$contact      = $helper->getContactInformation();
$other        = $helper->getOtherInformation();
?>

<!-- ========================= 
      cta 1
=========================  -->
<section id="cta1" class="cta cta-1 border-top pt-40 pb-10">
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-4">
      <div class="contact-panel contact-panel-2">
        <div class="contact__panel-header d-flex align-items-center">
          <i class="icon-placeholder"></i>
          <h4 class="contact__panel-title"><?php echo e($contact['Address']); ?></h4>
        </div>
      </div><!-- /.contact-panel -->
    </div><!-- /.col-lg-4 -->
    <div class="col-sm-12 col-md-12 col-lg-3 text-right">
      <h2 class="cta__title">Sign up for latest news and services of Diaplous.</h2>
    </div><!-- /.col-lg-3 -->
    <div class="col-sm-12 col-md-12 col-lg-5">
      <form>
        <div class="form-group d-flex">
          <input type="text" class="form-control mr-30" placeholder="Your Email Address">
          <button class="btn btn__primary btn__hover3">Sign Up!</button>
        </div>
      </form>
    </div><!-- /.col-lg-5 -->
  </div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.cta1 -->

<section id="googleMap" class="google-map p-0">
    <iframe src="<?php echo e($other['Google Maps iframe source URL']); ?>" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section><!-- /.GoogleMap -->

<!-- ========================
  Footer
========================== -->
<footer id="footer" class="footer footer-1">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 footer__widget footer__widget-about">
          <div class="footer__widget-content">
            <img src="/frontend/assets/images/logo/logo-dark.png" width="134px" height="50px" alt="logo" class="mb-30">
            <p><?php echo e($contact['Address']); ?></p>
            <p>Email: <a href="mailto:<?php echo e($contact['Email']); ?>"><?php echo e($contact['Email']); ?></a></p>
            <p>Phone: <a href="tel:<?php echo e($contact['Phone']); ?>"><?php echo e($contact['Phone']); ?></a></p>
            <p><a href="<?php echo e($other['Linkedin Profile URL']); ?>" target="_blank"><img src="/frontend/assets/images/linkedin.png" width="20px"></a></p>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
          <h6 class="footer__widget-title">Company</h6>
          <div class="footer__widget-content">
            <nav>
              <ul class="list-unstyled">
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/why-us">Why Choose Us</a></li>
                <li><a href="/policies">Our Policies</a></li>
                <li><a href="/compliance">Compliance</a></li>
                <li><a href="/our-team">Our Team</a></li>
                <li><a href="/careers">Career</a></li>
                <li><a href="/contacts">Contact</a></li>
              </ul>
            </nav>
          </div><!-- /.footer-widget-content -->
        </div><!-- /.col-lg-2 -->
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
          <h6 class="footer__widget-title"><?php echo e($category['name']); ?></h6>
          <div class="footer__widget-content">
            <nav>
              <ul class="list-unstyled">
                  <?php $__currentLoopData = $services[$category['id']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><a href="/service-details/<?php echo e($service['id']); ?>?title=<?php echo e($service['name']); ?>"><?php echo e($service['name']); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </nav>
          </div><!-- /.footer-widget-content -->
        </div><!-- /.col-lg-2 -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div><!-- /.row -->
      
      <div class="row mt-20">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="200">
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                  <div class="client">
                      <img src="<?php echo e($client['image1']); ?>" alt="<?php echo e($client['input1']); ?>"/>
                  </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><!-- /.carousel -->
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
      
    </div><!-- /.container -->
  </div><!-- /.footer-top -->
  
  <div class="container">
    <div class="footer-bottom">
      <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-9">
          <div class="footer__copyright">
            <nav>
              <!-- <ul class="list-unstyled footer__copyright-links d-flex flex-wrap">
                <li><a href="#">Terms & Conditions </a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Sitemap</a></li>
              </ul> -->
            </nav>
            <span>&copy; 2019, All rights reserved by</span>
            <a href="<?php echo e($other['Website URL']); ?>">Diaplous</a>
          </div><!-- /.Footer-copyright -->
        </div><!-- /.col-lg-6 -->
        <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center">
          <div class="social__icons justify-content-end w-100">
            <!-- <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a> -->
          </div><!-- /.social-icons -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div><!-- /.Footer-bottom -->
  </div><!-- /.container -->
</footer><!-- /.Footer -->
<button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

<div class="module__search-container">
  <i class="fa fa-times close-search"></i>
  <form class="module__search-form">
    <input type="text" class="search__input" placeholder="Search Here">
    <button class="module__search-btn"><i class="fa fa-search"></i></button>
  </form>
</div><!-- /.module-search-container -->