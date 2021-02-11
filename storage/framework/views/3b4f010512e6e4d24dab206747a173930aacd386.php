<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Admin Login | IDL-KRD</title>

    <!-- Styles -->
    <link href="<?php echo e(url('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div style="margin-top: 150px" id="app">

        <?php echo $__env->yieldContent('content'); ?>
        
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(url('js/app.js')); ?>"></script>
</body>
</html>
