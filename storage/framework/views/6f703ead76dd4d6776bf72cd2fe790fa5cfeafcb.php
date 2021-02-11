<?php $helper = new \App\Lib\Helpers;
$categories    = $helper->getServices()[0];
$services      = $helper->getServices()[1];
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
          <h4 class="contact__panel-title">ROAD 3, 30B, <br/>IKOTA VILLA ESTATE, <br/>LAGOS, NIGERIA.</h4>
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.591249123214!2d3.5536966141498!3d6.44649402584375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf71aca893ddd%3A0x86eeefa5db8a8296!2sIkota%20Villa%20Estate!5e0!3m2!1sen!2sbd!4v1574766099705!5m2!1sen!2sbd" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
            <p>ROAD 3, 30B, IKOTA VILLA ESTATE, LAGOS, NIGERIA.</p>
            <p>Email: <a href="mailto:info@diaplousng.com">info@diaplousng.com</a></p>
            <p>Phone: <a href="tel:+2348033041302">+234 803 304 1302</a></p>
            <p><a href="https://www.linkedin.com/company/diaplousng" target="_blank"><img src="/frontend/assets/images/linkedin.png" width="20px"></a></p>
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
                <li><a href="careers.php">Career</a></li>
                <li><a href="contacs.php">Contact</a></li>
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
                <div class="client">
                    <a href="#!"><img src="/frontend/assets/images/clients/c1.jpg" alt="Nigerian Navy"></a>
                </div>
                <div class="client">
                    <a href="#!"><img src="/frontend/assets/images/clients/c2.jpg" alt="Civil Defence"></a>
                </div>
                <div class="client">
                    <a href="#!"><img src="/frontend/assets/images/clients/c3.jpg" alt="Partner"></a>
                </div>
                <div class="client">
                    <a href="#!"><img src="/frontend/assets/images/clients/c4.jpg" alt="Nigerian Maritime Administration & Safety Agency"></a>
                </div>
                <div class="client">
                    <a href="#!"><img src="/frontend/assets/images/clients/c5.jpg" alt="Nigerian Petrolium Exchange"></a>
                </div>
                <div class="client">
                    <a href="#!"><img src="/frontend/assets/images/clients/c6.jpg" alt="The Nigeria Police"></a>
                </div>
                <div class="client">
                    <a href="#!"><img src="/frontend/assets/images/clients/c7.jpg" alt="Maritime Security Providers Association Of Nigeria"></a>
                </div>
                <div class="client">
                    <a href="#!"><img src="/frontend/assets/images/clients/c8.jpg" alt="BIMCO"></a>
                </div>
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
            <a href="http://diaplous.codingwallet.com">Diaplous</a>
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