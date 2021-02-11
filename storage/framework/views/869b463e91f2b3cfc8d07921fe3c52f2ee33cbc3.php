<?php $helper = new \App\Lib\Helpers; ?>

<!-- =========================
    Header
=========================== -->
<header id="header" class="header header-transparent">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo" width="134px" height="50px">
                <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo" width="134px" height="50px">
            </a>

            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>

            <div class="header__top-right d-none d-lg-block">
                <ul class="list-unstyled d-flex justify-content-end align-items-center">
                    <li><i class="icon-phone"></i><span><a href="tel:+2348033041302" style="color: white;">+234 803 304 1302</a></span></li>
                    <li><a href="https://www.linkedin.com/company/diaplousng" target="_blank"><img src="assets/images/linkedin.png" width="20px"></a></li>
                    <li><a href="contacts.php" class="btn btn__white"><i class="icon-list"></i><span>Request A Quote</span></a></li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav__item with-dropdown">
                        <a href="index.php" id="Home-menu" class="dropdown-toggle nav__item-link">Home</a>
                    </li>

                    <li class="nav__item with-dropdown">
                        <a href="about-us.php" id="Company-menu" class="dropdown-toggle nav__item-link">Company</a>
                        <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                            <li class="nav__item"><a href="about-us.php" class="nav__item-link">About Us</a></li>
                            <!-- /.nav-item -->
                            <li class="nav__item"><a href="why-us.php" class="nav__item-link">Why Choose Us</a></li>
                            
                            <li class="nav__item"><a href="policies.php" class="nav__item-link">Our Policies</a></li>
                            <li class="nav__item"><a href="compliance.php" class="nav__item-link">Compliance</a></li>
                            <!-- /.nav-item -->
                            <li class="nav__item"><a href="our-team.php" class="nav__item-link">Our Team</a></li>
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->

                    <li class="nav__item with-dropdown">
                        <a href="services.php" id="Services-menu" class="dropdown-toggle nav__item-link">Services</a>
                        <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu wide-dropdown-menu services-dropdown">
                            <li class="nav__item">
                                <div style="width: 100%" class="row mx-0">
                                    <div class="col-sm-6 dropdown-menu-col">
                                        <h6>Maritime Security</h6>
                                        <ul class="nav flex-column font-13">
                                          <li class="nav__item"><a class="nav__item-link" href="single-service.php">Security Escort Vessels - Armed</a>
                                          </li> <!-- /.nav-item -->
                                          <li class="nav__item"><a class="nav__item-link" href="single-service1.php">Navy Teams - Armed</a>
                                          </li> <!-- /.nav-item -->
                                          <li class="nav__item"><a class="nav__item-link" href="single-service2.php">Maritime Security Liaison Officers - Unarmed</a>
                                          </li> <!-- /.nav-item -->
                                          <li class="nav__item"><a class="nav__item-link" href="single-service3.php">K9 stowaway search - Aemed/Unarmed</a>
                                          </li> <!-- /.nav-item -->
                                        </ul>
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-3 dropdown-menu-col">
                                        <h6>Port Agency Services</h6>
                                        <ul class="nav flex-column font-13">
                                          <li class="nav__item"><a class="nav__item-link" href="single-service4.php">Port Agency Services</a></li> <!-- /.nav-item -->
                                          <li style="line-height: 0px" class="nav__item"><a class="nav__item-link" href="single-service5.php">HAS & OPA</a></li> <!-- /.nav-item -->
                                          <!-- /.nav-item -->
                                        </ul>
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-3 dropdown-menu-col">
                                        <h6>Special Projects</h6>
                                        <ul class="nav flex-column font-13">
                                          <li class="nav__item"><a class="nav__item-link" href="egina.php">Egina</a>
                                          </li> <!-- /.nav-item -->
                                        </ul>
                                    </div><!-- /.col-sm-6 -->
                                </div><!-- /.row -->
                            </li><!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                    
                    <!--<li class="nav__item with-dropdown">-->
                    <!--    <a href="clients.php" class="dropdown-toggle nav__item-link">Clients</a>-->
                    <!--</li><!-- /.nav-item -->
                    
                    <li class="nav__item with-dropdown">
                        <a href="careers.php" id="Career-menu" class="dropdown-toggle nav__item-link">Career</a>
                    </li><!-- /.nav-item -->

                    <li class="nav__item">
                        <a href="contacts.php" id="Contact-menu" class="nav__item-link">Contact Us</a>
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