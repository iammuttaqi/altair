<?php
$helper        = new \App\Lib\Helpers;
$categories    = $helper->getServices()[0];
$services      = $helper->getServices()[1];
$firstCategory = True;
$contact       = $helper->getContactInformation();
$other       = $helper->getOtherInformation();
?>

<!-- =========================
    Header
=========================== -->
<header id="header" class="header header-transparent">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/index">
                <img src="/frontend/assets/images/logo/logo-light.png" class="logo-light" alt="logo" width="134px" height="50px">
                <img src="/frontend/assets/images/logo/logo-dark.png" class="logo-dark" alt="logo" width="134px" height="50px">
            </a>

            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>

            <div class="header__top-right d-none d-lg-block">
                <ul class="list-unstyled d-flex justify-content-end align-items-center">
                    <li><i class="icon-phone"></i><span><a href="tel:<?php echo e($contact['Phone']); ?>" style="color: white;"><?php echo e($contact['Phone']); ?></a></span></li>
                    <li><a href="<?php echo e($other['Linkedin Profile URL']); ?>" target="_blank"><img src="/frontend/assets/images/linkedin.png" width="20px"></a></li>
                    <li><a href="/contacts" class="btn btn__white"><i class="icon-list"></i><span>Request A Quote</span></a></li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav__item with-dropdown">
                        <a href="/index" id="Home-menu" class="dropdown-toggle nav__item-link">Home</a>
                    </li>

                    <li class="nav__item with-dropdown">
                        <a href="/about-us" id="Company-menu" class="dropdown-toggle nav__item-link">Company</a>
                        <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                            <li class="nav__item"><a href="/about-us" class="nav__item-link">About Us</a></li>
                            <!-- /.nav-item -->
                            <li class="nav__item"><a href="/why-us" class="nav__item-link">Why Choose Us</a></li>
                            
                            <li class="nav__item"><a href="/policies" class="nav__item-link">Our Policies</a></li>
                            <li class="nav__item"><a href="/compliance" class="nav__item-link">Compliance</a></li>
                            <!-- /.nav-item -->
                            <li class="nav__item"><a href="/our-team" class="nav__item-link">Our Team</a></li>
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->

                    <li class="nav__item with-dropdown">
                        <a href="/services" id="Services-menu" class="dropdown-toggle nav__item-link">Services</a>
                        <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu wide-dropdown-menu services-dropdown">
                            <li class="nav__item">
                                <div style="width: 100%" class="row mx-0">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($firstCategory): ?>
                                    <?php echo e($firstCategory = False); ?>

                                    <div class="col-sm-6 dropdown-menu-col">
                                    <?php else: ?>
                                    <div class="col-sm-3 dropdown-menu-col">
                                    <?php endif; ?>
                                        <h6><?php echo e($category['name']); ?></h6>
                                        <ul class="nav flex-column font-13">
                                          <?php $__currentLoopData = $services[$category['id']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li class="nav__item"><a class="nav__item-link" href="/service-details/<?php echo e($service['id']); ?>?title=<?php echo e($service['name']); ?>"><?php echo e($service['name']); ?></a>
                                          </li> <!-- /.nav-item -->
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div><!-- /.col-sm-6 -->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div><!-- /.row -->
                            </li><!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                    
                    <li class="nav__item with-dropdown">
                        <a href="/careers" id="Career-menu" class="dropdown-toggle nav__item-link">Career</a>
                    </li><!-- /.nav-item -->

                    <li class="nav__item">
                        <a href="/contacts" id="Contact-menu" class="nav__item-link">Contact Us</a>
                    </li><!-- /.nav-item --> 
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->

            <div class="navbar-modules">
                <div class="modules__wrapper d-flex align-items-center">
                    <a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a>
                </div><!-- /.modules-wrapper -->
            </div><!-- /.navbar-modules -->
        </div>
    </nav>
</header>