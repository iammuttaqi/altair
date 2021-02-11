<!DOCTYPE html>
<html>
    <!-- Mirrored from t.commonsupport.com/borvel/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Jan 2020 04:38:58 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title> <?php echo $__env->yieldContent('title'); ?> </title>
        <?php echo $__env->yieldContent('meta_keyword'); ?>
        <?php echo $__env->yieldContent('meta_description'); ?>
        <!-- Stylesheets -->
        <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
        <link href="<?php echo e(asset('frontend/css/bootstrap.css')); ?>" rel="stylesheet">
        <?php echo $__env->yieldContent('bootstrap'); ?>
        <link href="<?php echo e(asset('frontend/plugins/revolution/css/settings.css')); ?>" rel="stylesheet" type="text/css') }}"><!-- REVOLUTION SETTINGS STYLES -->
        <link href="<?php echo e(asset('frontend/plugins/revolution/css/layers.css')); ?>" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
        <link href="<?php echo e(asset('frontend/plugins/revolution/css/navigation.css')); ?>" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
        <link href="<?php echo e(asset('frontend/css/style.css')); ?>" rel="stylesheet">
        
        <link href="<?php echo e(asset('frontend/css/animate.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('frontend/images/favicon.png')); ?>" type="image/x-icon" rel="shortcut icon">
        <link href="<?php echo e(asset('frontend/images/favicon.png')); ?>" type="image/x-icon" rel="icon">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?php echo $__env->yieldContent('styles'); ?>
        <link href="<?php echo e(asset('frontend/css/responsive.css')); ?>" rel="stylesheet">
    </head>
    <body>
        <div class="page-wrapper">
            
            <!-- Preloader -->
            <div class="preloader"></div>
            
            <!-- Main Header / Header Style Three-->
            <?php echo $__env->make('layouts.frontend.inc.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!--End Main Header -->
            
            <!-- -->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- -->
            
            <!--Main Footer-->
            <?php echo $__env->make('layouts.frontend.inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!--End Main Footer-->
        </div>
        <!--End pagewrapper-->
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

        <script src="<?php echo e(asset('frontend/js/jquery.js')); ?>"></script>
        <!--Revolution Slider-->
        <script src="<?php echo e(asset('frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/plugins/revolution/js/jquery.themepunch.tools.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/main-slider-script.js')); ?>"></script>
        <!-- <script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script> -->
        <script src="<?php echo e(asset('frontend/js/jquery.fancybox.js')); ?>"></script>
        <?php echo $__env->yieldContent('mixitupjs'); ?>
        <script src="<?php echo e(asset('frontend/js/owl.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/wow.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/appear.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/script.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/bootstrap.bundle.min.js')); ?>"></script>
        <!--Google Map APi Key-->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
        <script src="<?php echo e(asset('frontend/js/map-script.js')); ?>"></script>
        <!--End Google Map APi-->
        <script src="<?php echo e(asset('frontend/js/particles.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/app.js')); ?>"></script>
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
    <!-- Mirrored from t.commonsupport.com/borvel/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Jan 2020 04:48:52 GMT -->
</html>