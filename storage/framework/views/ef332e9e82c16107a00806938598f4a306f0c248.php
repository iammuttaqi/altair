
<?php $helper = app('App\Lib\Helpers'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="<?php echo e(asset('frontend/assets/images/favicon/favicon.png')); ?>" rel="icon">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <?php echo $__env->yieldContent('meta_keyword'); ?>
    <?php echo $__env->yieldContent('meta_description'); ?>

    <meta name="author" content="https://ontiktechnology.com">

    <title>Home | Diaplous </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&amp;display=swap">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/libraries.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/custom.css')); ?>" />

    <?php echo $__env->yieldContent('style'); ?>

</head>

<body>

    <div class="wrapper">

        <?php echo $__env->make('layouts.frontend.inc.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.frontend.inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
    </div>

<script src="<?php echo e(asset('frontend/assets/js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/plugins.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/main.js')); ?>"></script>

<?php echo $__env->yieldContent('script'); ?>

</body>
</html>