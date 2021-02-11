<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="<?php echo e(url('image/png')); ?>" href="<?php echo e(url('assets/img/favicon-16x16.png')); ?>" sizes="16x16">
    <link rel="icon" type="<?php echo e(url('image/png')); ?>" href="<?php echo e(url('assets/img/favicon-32x32.png')); ?>" sizes="32x32">

    <title> <?php echo $__env->yieldContent('title'); ?></title>

    
    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo e(url('bower_components/uikit/css/uikit.almost-flat.min.css')); ?>" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="<?php echo e(url('assets/icons/flags/flags.min.css')); ?>" media="all">



    <!-- altair admin -->
    <link rel="stylesheet" href="<?php echo e(url('assets/css/main.min.css')); ?>" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="<?php echo e(url('assets/css/themes/themes_combined.min.css')); ?>" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
    <script type="text/javascript" src="<?php echo e(asset('bower_components/matchMedia/matchMedia.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('bower_components/matchMedia/matchMedia.addListener.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ie.css')); ?>" media="all">
    <![endif]-->

    <?php echo $__env->yieldContent('styles'); ?>
    
</head>

<body class="sidebar_main_open sidebar_main_swipe">
<?php echo $__env->make('layouts.backend.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.backend.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="page_content">
    <div id="page_content_inner">
        
        <!-- main content start from here -->
       <?php echo $__env->yieldContent('content'); ?>
        <!-- main content end from here -->

    </div>
</div>


<!-- common functions -->
<script src="<?php echo e(url('assets/js/common.min.js')); ?> "></script>
<!-- uikit functions -->
<script src="<?php echo e(url('assets/js/uikit_custom.min.js')); ?>"></script>
<!-- altair common functions/helpers -->
<script src="<?php echo e(url('assets/js/altair_admin_common.min.js')); ?>"></script>

<script src="<?php echo e(url('bower_components/datatables/media/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('bower_components/datatables-buttons/js/dataTables.buttons.js')); ?>"></script>
<script src="<?php echo e(url('assets/js/custom/datatables/datatables.uikit.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/editor/ckeditor.js')); ?>"></script>
<script src="<?php echo e(url('assets/js/pages/plugins_datatables.js')); ?>"></script>

<?php echo $__env->yieldContent('custom_footer_js'); ?>

</body>
</html><?php /**PATH C:\laragon\www\altair\resources\views/layouts/backend/master.blade.php ENDPATH**/ ?>